@extends('layouts.admin')

@section('content')

<!-- Content -->
<div class="app-main__outer">
  <div class="app-main__inner">

    <div class="tabs-animation">

      <!-- CATEGORIES TABLE -->
      <div class="row">
          <div class="col-md-12">
              <div class="main-card mb-3 card">
                  {{-- Table Header --}}
                  <div class="card-header">Categories Table
                      <div class="btn-actions-pane-right">
                          <div role="group" class="btn-group-sm btn-group">
                              <!-- <button class="active btn btn-focus">Last Week</button>
                              <button class="btn btn-focus">All Month</button> -->
                          </div>
                      </div>
                  </div>

                  {{-- Table Content --}}
                  <div class="table-responsive">
                      <table
                          class="align-middle mb-0 table table-borderless table-striped table-hover">
                          <thead>
                              <tr>
                                  <th class="text-center">AGE (0 - 18)</th>
                                  <th>AGE (19 - 35)</th>
                                  <th class="text-center">AGE (36 - 65)</th>
                                  <th class="text-center">Crypto / Forex</th>
                                  <th class="text-center">Fashion</th>
                                  <th class="text-center">Inspirational</th>
                                  <th class="text-center">Beauty</th>
                                  <th class="text-center">Technology</th>
                              </tr>
                          </thead>
                          <tbody>
                          {{-- TABLE BODY --}}
                          <tr>
                              <td class="text-center">{{ $campaign_auth->age1 }}</td>
                              <td class="text-center">{{ $campaign_auth->age2 }}</td>
                              <td class="text-center">{{ $campaign_auth->age3 }}</td>
                              <td class="text-center">{{ $campaign_auth->crypto }}</td>
                              <td class="text-center">{{ $campaign_auth->fasion }}</td>
                              <td class="text-center">{{ $campaign_auth->inspirational }}</td>
                              <td class="text-center">{{ $campaign_auth->beauty }}</td>
                              <td class="text-center">{{ $campaign_auth->technology }}</td>
                          </tr>
                                      

                              
                          </tbody>
                      </table>

                  </div>

                  <div class="d-block text-center card-footer">
                    {{-- line bellow table --}}
                  </div>
              </div>
          </div>
      </div>
      <!-- CATEGORIES TABLE END -->

    </div>

    <form action="/edit" method="POST">
        @csrf

      <!-- SIDE FORM -->
      <ul class="forms-wizard">
      <li>
        <a href="{{ route('show') }}">
          <span>Back to all Queries Panel</span>
        </a>
      </li>
      </ul>


      <!-- INPUT FORMS -->
      <div class="form-wizard-content">
          <div>
              <div class="card-body">

                  {{-- CAMPAIGN TITLE --}}
                  <div class="position-relative form-group">
                      <label for="status" class="">Campaign Title</label> <br/>
                      <input name="status" id="status" value="{{ $campaign_auth->campaignname }}" type="text">
                  </div>
                  <br/>

                  {{-- IMAGE UPLOADS --}}
                  <div>
                    <label for="campaignfile" class="">Image file path</label>
                    <a href="/download" download="{{ $campaign_auth->campaignfile }}"> <br/>
                      <input name="campaigncsv" value="{{ $campaign_auth->campaignfile }}">
                    </a>
                  </div><br />

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
                  <div>
                    <label for="status" class="">Icon</label> <br/>
                    <input name="status" value="{{ $campaign_auth->status }}">
                    <select name="status" id="status">
                      <optgroup label="State">
                          <option value="/images/avatars/progress.gif">Progress</option>
                          <option value="/images/avatars/done.gif">Success</option>
                      </optgroup>
                    </select>
                  </div>

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

                  {{-- checkbokes --}}
                  <div>

                    <div>
                      <label for="age1" class="">0 - 18 AGE ( {{ $campaign_auth->age1 }} )</label>
                      <input name="age1" placeholder="{{ $campaign_auth->age1 }}">
                    </div>
                    <div>
                      <label for="age2" class="">19 - 35 AGE ( {{ $campaign_auth->age2 }} )</label>
                      <input name="age2" placeholder="{{ $campaign_auth->age2 }}">
                    </div>
                    <div>
                      <label for="age3" class="">36 - 65 AGE ( {{ $campaign_auth->age3 }} )</label>
                      <input name="age3" placeholder="{{ $campaign_auth->age3 }}">
                    </div>
                    <div>
                      <label for="crypto" class="">Crypto / Forex ( {{ $campaign_auth->age3 }} )</label>
                      <input name="crypto" placeholder="{{ $campaign_auth->crypto }}">
                    </div>
                    <div>
                      <label for="fasion" class="">Fasion ( {{ $campaign_auth->fasion }} )</label>
                      <input name="fasion" placeholder="{{ $campaign_auth->fasion }}">
                    </div>
                    <div>
                      <label for="inspirational" class="">Inspirational ( {{ $campaign_auth->inspirational }} )</label>
                      <input name="inspirational" placeholder="{{ $campaign_auth->inspirational }}">
                    </div>
                    <div>
                      <label for="beauty" class="">Beauty ( {{ $campaign_auth->beauty }} )</label>
                      <input name="beauty" placeholder="{{ $campaign_auth->beauty }}">
                    </div>
                    <div>
                      <label for="technology" class="">Technology ( {{ $campaign_auth->technology }} )</label>
                      <input name="technology" placeholder="{{ $campaign_auth->technology }}">
                    </div>

                  </div>

              </div>

              <br/><br/>
              {{-- UPDATE --}}
              <div class="text-center">
              <button class="btn-shadow btn-wide btn btn-success btn-lg">Update</button>
              </div>
          </div>


      {{-- </form> --}}
      </div>

    </form>

  </div>


  <!-- Footer -->
      <div class="app-wrapper-footer">
          <div class="app-footer">
              <div class="app-footer__inner">

                  <div class="app-footer-left">
                      <div class="footer-dots">

                          <div class="dots-separator"></div>

                          <li class="nav-item">
                              <a>
                                  Copyright © 2021 Ozi is a product of Ozi Technologies. Proudly Made in
                                  Nigeria. All Rights Reserved.
                              </a>
                          </li>

                          <div class="dots-separator"></div>
                      </div>
                  </div>

                  <!-- Right Side -->
                  <div class="app-footer-right">
                      <ul class="header-megamenu nav">

                          <div class="dropdown">
                              <a class="dot-btn-wrapper" aria-haspopup="true" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="dot-btn-icon lnr-earth icon-gradient bg-happy-itmeo"></i>
                              </a>
                              <div tabindex="-1" role="menu" aria-hidden="true"
                                  class="rm-pointers dropdown-menu">
                                  <div class="dropdown-menu-header">
                                      <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                          <div class="menu-header-image opacity-05"
                                              style="background-image: url('/images/dropdown-header/city2.jpg');">
                                          </div>
                                          <div class="menu-header-content text-center text-white">
                                              <h6 class="menu-header-subtitle mt-0"> Choose Language</h6>
                                          </div>
                                      </div>
                                  </div>
                                  <h6 tabindex="-1" class="dropdown-header"> Popular Languages</h6>
                                  <button type="button" tabindex="0" class="dropdown-item">
                                      <span class="mr-3 opacity-8 flag large US"></span> USA
                                  </button>
                                  <button type="button" tabindex="0" class="dropdown-item">
                                      <span class="mr-3 opacity-8 flag large CH"></span> Switzerland
                                  </button>
                                  <button type="button" tabindex="0" class="dropdown-item">
                                      <span class="mr-3 opacity-8 flag large FR"></span>France
                                  </button>
                                  <button type="button" tabindex="0" class="dropdown-item">
                                      <span class="mr-3 opacity-8 flag large ES"></span>Spain
                                  </button>
                                  <div tabindex="-1" class="dropdown-divider"></div>
                                  <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                  <button type="button" tabindex="0" class="dropdown-item active">
                                      <span class="mr-3 opacity-8 flag large DE"></span>Germany
                                  </button>
                                  <button type="button" tabindex="0" class="dropdown-item">
                                      <span class="mr-3 opacity-8 flag large IT"></span> Italy
                                  </button>
                              </div>
                          </div>

                      </ul>
                  </div>

              </div>
          </div>
      </div>
      <!-- Footer End -->
      
  </div>
<!-- Content End -->
<div class="app-drawer-overlay d-none animated fadeIn"></div>

@endsection