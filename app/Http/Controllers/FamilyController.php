<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\FamilyName;
use App\FamilyMember;
use App\GuestMember;
use App\FamilyRelation;

class FamilyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $family_members=$family_info=$allMembers='';
        $create_family = User::find(Auth::id())->FamilyMember()->exists();

        if ($create_family) {
            $family_id = User::find(Auth::id())->FamilyMember()->first()->family_id;
            $family_info = FamilyName::find($family_id);
            $family_members = FamilyMember::all()->where('family_id', $family_id);
        }

        return view('user.family')->with(['title'=>'My Family', 'create_family' => $create_family, 'family_members' => $family_members, 'family_info' => $family_info]);
    }

    public function store(Request $request)
    {
        $validator = ['message'=>'', 'success'=>false];

        $validator['message'] = Validator::make($request->all(), [
            'familyname' => 'required',
        ], [
            'required' => 'Your family name is empty',
        ]);

        if($validator['message']->fails()){
            $validator['message'] = $validator['message']->errors()->toArray();
        } else {
            $validator['message'] = FamilyName::create([
                'family_name' => $request->familyname,
            ]);

            FamilyMember::create([
                'user_id'   => Auth::id(),
                'family_id' => $validator['message']->id,
            ]);

            $validator['success'] = True;
        }

        return response()->json($validator);
    }

    public function addFamilyMember(Request $request, $familyId)
    {
        $validator = ['message'=>'', 'success'=>false];

        $validator['message'] = Validator::make($request->all(), [
            'existingMember'    => 'required',
            'familymemberName'  => 'required',
            'familyralation'    => 'required',
        ]);

        if ($validator['message']->fails()) {
            $validator['message'] = $validator['message']->errors()->toArray();

            dd($validator['message']);
        } else {
            $invite_code = '';
            if ($request->invitationMailAddress || $request->invitationPhoneNumber) {
                $invite_code  = invite_code();
            }

            $guestInfo = GuestMember::create([
                'name'        => $request->familymemberName,
                'email'       => $request->invitationMailAddress,
                'phone'       => $request->invitationPhoneNumber,
                'through'     => $request->sendcode_through,
                'invite_code' => $invite_code,
            ]);

            $guestFamilyId = FamilyMember::create([
                'user_id'   => $guestInfo->id,
                'family_id' => $familyId,
                'guest'     => True,
            ]);

            FamilyRelation::create([
              'family_id'             => $guestFamilyId->family_id,
              'user_id'               => $request->existingMember,
              'relationWith_user_id'  => $guestInfo->id,
              'relationship'          => $request->familyralation,
              'guest'                 => True,
            ]);

            $validator['message'] = "Family Member Added";
        }

        return back();
    }

    private function invite_code($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
