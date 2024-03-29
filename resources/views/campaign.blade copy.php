@extends('layouts.app')

@section('content')
    
<!-- Content -->
<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- SCHEDULE -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-stopwatch text-info"></i>
                    </div>
                    <div>Schedule a Message Wizard
                        <div class="page-title-subheading">Send bulk message to your customized audience
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SCHEDULE End -->

        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Start</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane tabs-animation fade show active" id="tab-content-2" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('campaign') }}">
                            @csrf
                            <div id="smartwizard3" class="forms-wizard-vertical">

                                <!-- SIDE FORM -->
                                <ul class="forms-wizard">
                                    <li>
                                        <a href="#step-122">
                                            <em>1</em><span>Compose Mesage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-222">
                                            <em>2</em><span>Schedule Message</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-322">
                                            <em>3</em><span>Send</span>
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

                                            <div class="position-relative form-group">
                                                <label for="campaignname" class="">Campaign Title</label>
                                                <input name="campaignname" id="exampleName" type="text" class="form-control" value="{{ old('campaignname') }}">
                                                @error('campaignname')
                                                    <div style="color: salmon;">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="position-relative form-group">
                                                <label for="textarea">Message</label>
                                                <textarea name="campaignbody" id="editor" type="text"
                                                    placeholder="Text message to send out" rows="1"
                                                    class="form-control autosize-input"
                                                    style="height: 150px;">
                                                </textarea>
                                                @error('campaignbody')
                                                    <div style="color: salmon;">{{ $message }}</div>
                                                @enderror
                                            </div>


                                        </div>
                                    </div>

                                    {{-- @include('numbers') --}}
                                    <!-- STEP 2 -->
                                    <div id="step-222">
                                        <div class="card-body">

                                            <div class="position-relative form-group">
                                                <label for="number">Phone Number</label>
                                                <input name="campaignnumbers" type="digit" class="form-control">
                                                <small class="form-text text-muted">Add numbers manually. Note:
                                                    Separate numbers with <b>";"</b>..
                                                </small>
                                                @error('campaignnumbers')
                                                    <div style="color: salmon;">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="position-relative form-group">
                                                <label for="exampleFile" class="">Upload Numbers</label>
                                                <input name="campaigncsv" id="exampleFile" type="file"
                                                    class="form-control-file">
                                                <small class="form-text text-muted"> .csv, .xlsx, .xlsm, .xlsb,
                                                    .xltx
                                                </small>
                                                @error('campaigncsv')
                                                    <div style="color: salmon;">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="main-card mb-3 card">
                                            <div class="card-body">
                                                <h5 class="card-title">Inline</h5>
                                                <div class="position-relative form-group">
                                                    <div>
                                                        <div class="custom-checkbox custom-control custom-control-inline">
                                                            <input type="checkbox" id="exampleCustomInline" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomInline">An inline custom input</label>
                                                        </div>
                                                        <div class="custom-checkbox custom-control custom-control-inline">
                                                            <input type="checkbox" id="exampleCustomInline2" class="custom-control-input">
                                                            <label class="custom-control-label" for="exampleCustomInline2">and another one</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                            <div class="position-relative form-group">
                                                <label for="exampleDate">Date</label>
                                                <input name="campaigndate" id="exampleDate"
                                                    placeholder="date placeholder" type="date"
                                                    class="form-control">
                                                    @error('campaigndate')
                                                    <div style="color: salmon;">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="position-relative form-group">
                                                <label for="exampleTime">Time</label>
                                                <input name="campaigntime" id="exampleTime"
                                                    placeholder="time placeholder" type="time"
                                                    class="form-control">
                                                    @error('campaigntime')
                                                    <div style="color: salmon;">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <input name="recieved" placeholder="Received Messages" type="hid">
                                            <input name="sent" placeholder="Sent Messages" type="hid">
                                            <input name="total" placeholder="Total Messages" type="hid">

                                            <input name="status" placeholder="Status" type="hid">
                                            <input name="progress" placeholder="Progress" type="hid">
                                            <input name="actions" placeholder="Actions" type="hid">
                                            <input name="actionsclass" placeholder="Actions class" type="hid">

                                        </div>

                                    </div>

                                    <!-- STEP 3 -->
                                    <div id="step-322">
                                        <div class="no-results">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left"
                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix"
                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                <div class="swal2-success-circular-line-right"
                                                    style="background-color: rgb(255, 255, 255);"></div>
                                            </div>
                                            <div class="results-subtitle mt-4">Message Scheduled to Send out
                                            </div>
                                            <div class="results-title"><code>Proceed to Payment..</code></div>
                                            <div class="mt-3 mb-3"></div>
                                            <div class="text-center">
                                                <button class="btn-shadow btn-wide btn btn-success btn-lg">Pay!</button>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                                </div>

                            </div>
                        </form>
                        @if ($campaigns->count())
                            <code style="color: rgb(5, 75, 40);">Whalah for who no dey use Ozi Web Service ooo!!!!</code>
                        @else
                            <code style="color: springgreen;">Try Out Ozi Webservice and be rest assured of 100% delievery rate</code>
                        @endif


                        <div class="divider"></div>

                        <!-- Buttons -->
                        <div class="clearfix">
                            <button type="button" id="reset-btn22"
                                class="btn-shadow float-left btn btn-link">Reset</button>
                            <button type="button" id="next-btn22"
                                class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">Next</button>
                            <button type="button" id="prev-btn22"
                                class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">Previous</button>
                        </div>
                        <!-- Buttins End -->

                    </div>
                </div>
            </div>

        </div>
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
                                Nigeria. All Rights
                                Reserved.
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
                                            style="background-image: url('assets/images/dropdown-header/city2.jpg');">
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