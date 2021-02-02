<form action="/edit" method="POST">
 @csrf
 <div id="smartwizard3" class="forms-wizard-vertical">

  <!-- SIDE FORM -->
  <ul class="forms-wizard">
   <li>
    <a href="{{ route('show') }}">
      <span>All Queries Panel</span>
    </a>
   </li>
  </ul>


  <!-- INPUT FORMS -->
  <div class="form-wizard-content">
  {{-- <form method="POST" action="campaign"> --}}
      {{-- @csrf --}}
      <!-- STEP 1 -->
      <div id="step-122">
          <div class="card-body">

              {{-- CAMPAIGN TITLE --}}
              <div class="position-relative form-group">
                  <label for="status" class="">Campaign Title</label> <br/>
                  <input name="status" id="status" value="{{ $campaign_auth->campaignname }}" type="text">
              </div>
              <br/>

              {{-- CSV UPLOADS --}}
              <div>
                <label for="campaigncsv" class="">CSV file path</label>
                <a href="/download" download="{{ $campaign_auth->campaigncsv }}"> <br/>
                  <input name="campaigncsv" value="{{ $campaign_auth->campaigncsv }}">
                </a>
              </div>

              {{-- HIDDEN ID--}}
              <input name="id" type="hidden" value="{{ $campaign_auth->id }}"> <br/>

              {{-- RECIEVED COUNT --}}
              <div>
                <label for="recieved" class="">Recieved Count</label> <br/>
                <input name="recieved" value="{{ $campaign_auth->recieved }}"> <br/><br/>
              </div>

              {{-- SENT COUNT --}}
              <div>
                <label for="sent" class="">Sent Count</label> <br/>
                <input name="sent" value="{{ $campaign_auth->sent }}"> <br/><br/>
              </div>

              {{-- TOTAL COUNT --}}
              <div>
                <label for="total" class="">Total Count</label> <br/>
                <input name="total" value="{{ $campaign_auth->total }}"> <br/><br/>
              </div>

              {{-- ICON --}}
              <label for="status" class="">Icon</label> <br/>
              <input name="status" value="{{ $campaign_auth->status }}">
              <select name="status" id="status">
                <optgroup label="State">
                    <option value="/images/avatars/progress.gif">Progress</option>
                    <option value="/images/avatars/done.gif">Success</option>
                </optgroup>
              </select>

              {{-- STATISTICS 2 --}}
              <div> <br/>
                <label for="progress2" class="">START</label> <br/>
                <input name="progress2" value="{{ $campaign_auth->progress2 }}"> 
                  <select name="progress2" id="progress2">
                    <optgroup label=" ">
                        <option value="1">START</option>
                        <option value="0">STOP</option>
                    </optgroup>
                  </select>
                <br/><br/>
              </div>
              
              {{-- STATISTICS 1 --}}
              <div>
                <label for="progress" class="">Statistics %</label> <br/>
                <input name="progress" value="{{ $campaign_auth->progress }}"> 
                  <select name="progress" id="progress">
                    <optgroup label="%">
                        <option value="9">10%</option>
                        <option value="3">30%</option>
                        <option value="2">40%</option>
                        <option value="1">50%</option>
                        <option value="0">100%</option>
                        <option value="9">STOP</option>
                    </optgroup>
                  </select>
                <br/><br/>
              </div>

              {{-- ACTIONS --}}
              <div>
                <label for="actions" class="">Actions</label> <br/>
                <input name="actions" value="{{ $campaign_auth->actions }}">
                  <select name="actions" id="actions">
                      <optgroup label="State">
                          <option value="Verifying Payment">Verifying Payment</option>
                          <option value="Pending">Pending</option>
                          <option value="Sending">Sending</option>
                          <option value="Sent">Sent</option>
                          <option value="Cancelled">Cancelled</option>
                      </optgroup>
                    </select>
                 <br/><br/>
              </div>

              {{-- COLOR --}}
              <div>
                <label for="actionsclass" class="">Color</label> <br/>
                <input name="actionsclass" value="{{ $campaign_auth->actionsclass }}">
                  <select name="actionsclass" id="actionsclass">
                    <optgroup label="Colour Background">
                        <option value="badge-warning">Orange</option>
                        <option value="badge-success">Green</option>
                        <option value="badge-danger">Red</option>
                    </optgroup>
                  </select>
                 <br/><br/>
              </div>

          </div>

          {{-- UPDATE --}}
          <div class="text-center">
           <button class="btn-shadow btn-wide btn btn-success btn-lg">Update</button>
          </div>
      </div>


  {{-- </form> --}}
  </div>

 </div>
</form>