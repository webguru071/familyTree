@extends('layouts.base')

@section('title', $title)

@section('content')

@if(!$create_family)
  <div class="modal fade" id="addFamilyNameModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Family Name</h5>
        </div>
        <form action="{{route('createFamily')}}" method="post" id="createFamilyName">
          @csrf
          <div class="modal-body">
            <input class="form-control form-control-lg" type="text" placeholder="Family Name" name="familyname" autocomplete="off">
          </div>
          <div class="modal-footer">
              <button type="submit" class="btn btn-success">Set Family Name</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready(function(){

      $("#addFamilyNameModel").modal({
        show: true,
        backdrop: "static",
        keyboard: false,
      });

      $("#createFamilyName").submit(function(event) {
          event.preventDefault()
          let url     = $(this).attr('action')
          let method  = $(this).attr('method')
          let data    = $(this).serialize() + $("#postBody").text()

          $.ajax({
              type        : method,
              url         : url,
              data        : data,
              dataType    : 'json',
              cache       : false,
              success     : function(response) {
                  let message = ''
                  $("#message").hide()
                  if (response.success == true) {
                      location.reload();
                  } else {
                      $.each(response.message, function(item, element) {
                          message += element[0]+'<br>';
                      })

                      $("#message").html('<div id="toast-container" class="toast-bottom-left">'
                        +'<div class="toast toast-error" role="button">'
                        +'<div class="toast-message">'
                        + message
                        +'</div>'
                        +'</div>'
                        +'</div>'
                      ).show(1000);

                      setTimeout(function(){
                        $("#message").hide(1000);
                      }, 3000)
                  }
              }
          })
      })
  });
</script>

@else

<div class="main-content-wrapper">
    <div class="container">
        <div class="main-section-container">
            <div class="row">
              <br>
              <form method="post" action="/addfamillymember/{{$family_info->id}}" autocomplete="off">
                @csrf
                <fieldset>
                  <legend>Add Family Memeber</legend>

                  <div class="form-group row">
                    <label for="staticfamilyName" class="col-sm-2 col-form-label">Family Name</label>
                    <div class="col-sm-10">
                      <label for="staticfamilyName" class="col-sm-2 col-form-label">{{$family_info->family_name}}</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="existingMember">Created family members</label>
                    <select class="form-control" id="existingMember" name="existingMember">
                        <option value="">Select Family Member</option>
                        @foreach($family_members as $member)
                          <option value="{{$member->user_id}}">{{$member->User->name}}</option>
                        @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="familymemberName">Add or invite member</label>
                    <input type="text" class="form-control" id="familymemberName" name="familymemberName" placeholder="Enter Family Name">
                  </div>

                  <div class="form-group">
                    <label for="ralation">Relationship to the member</label>
                    <select class="form-control" id="ralation" name="familyralation">
                      <option value="">Select Relationship</option>
                      <option value="father">Father</option>
                      <option value="mother">Mother</option>
                      <option value="siblings">Siblings</option>
                      <option value="spouse">Spouse</option>
                      <option value="ex-spouse">ex-spouse</option>
                      <option value="children">Children</option>
                      <option value="grandchildren">Grandchildren</option>
                      <option value="great-grandchildren">Great Grandchildren</option>
                      <option value="great-great-grandchildren">Great Great Grandchildren</option>
                      <option value="great-great-great-grandchildren">Great Great Great Grandchildren</option>
                      <option value="great-great-great-great-grandchildren">Great Great Great Great Grandchildren</option>
                    </select>
                  </div>

                  <fieldset>
                    <legend>Invitation formr</legend>

                    <div class="form-group">
                      <label for="invitationMailAddress">Email</label>
                      <input type="email" class="form-control" id="invitationMailAddress" name="invitationMailAddress" placeholder="Enter Family Name">
                    </div>

                    <div class="form-group">
                      <label for="invitationPhoneNumber">Phone Number</label>
                      <input type="text" class="form-control" id="invitationPhoneNumber" name="invitationPhoneNumber" placeholder="Enter Family Name" onkeyup="enable()">
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input enable-radio-button" type="radio" name="sendcode_through" id="inlinvai_smseRadio1" value="sms" disabled>
                      <label class="form-check-label" for="inlineRadio1">via SMS</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input enable-radio-button" type="radio" name="sendcode_through" id="inlinvai_smseRadio2" value="whatsapp" disabled>
                      <label class="form-check-label" for="inlineRadio2">via whatsapp</label>
                    </div>
                  </fieldset>
                  <button type="submit" class="btn btn-primary">Add Member</button>
                </fieldset>
              </form>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
  function enable() {
    var ck = $('#invitationPhoneNumber').val();
    if (ck != '') {
      $('.enable-radio-button').prop("disabled", false);
    }else{
      $('.enable-radio-button').prop("disabled", true);
    }
  }
</script>
@endif
<div id="message"></div>
@endsection
