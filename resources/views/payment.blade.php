@extends('layouts.app')

@section('content')
    
<!-- CONTENTS -->
<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- PAYMENT TITLE -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo"></i>
                    </div>
                    <div>Payment
                        <div class="page-title-subheading">Use the most preffered payment method to make
                            your purchase</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAYMENT TITLE END -->

        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
            <li class="nav-item">
                <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                    <span>Choose Method</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <!-- 3 -->
            <div class="tab-pane tabs-animation fade active show" id="tab-content-2" role="tabpanel">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3 card">
                            <div class="tabs-lg-alternate card-header">
                                <ul class="nav nav-justified">
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#tab-eg9-0" class="active nav-link">
                                            <div class="widget-number">Bank Transfer</div>
                                            <div class="tab-subheading">
                                                <span class="pr-2 opactiy-6">
                                                    <i class="fa fa-comment-dots"></i>
                                                </span>
                                                Totals
                                            </div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#tab-eg9-1" class="nav-link">
                                            <div class="widget-number">Paystack Link</div>
                                            <div class="tab-subheading">Products</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a data-toggle="tab" href="#tab-eg9-2" class="nav-link">
                                            <div class="widget-number text-danger">USSD</div>
                                            <div class="tab-subheading">
                                                <span class="pr-2 opactiy-6">
                                                    <i class="fa fa-bullhorn"></i>
                                                </span>
                                                *....#
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-eg9-0" role="tabpanel">
                                    <div class="card-body">
                                        <code class="mb-0">
                                            BANK NAME: ACCESS BANK <br />
                                            ACCOUNT NUMBER: 1234567
                                        </code>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg9-1" role="tabpanel">
                                    <div class="card-body">
                                        <p class="mb-0">Choose the paystack link equivalent to the amount
                                            you want to pay. </p>

                                        <br />
                                        <br />
                                        <h5 class="card-title">PayStack Links</h5>
                                        <div id="exampleAccordion" data-children=".item">

                                            <div class="item">
                                                <button type="button" aria-expanded="true"
                                                    aria-controls="exampleAccordion1" data-toggle="collapse"
                                                    href="#collapseExample"
                                                    class="m-0 p-0 btn btn-link">Send to 1,000 Numbers</button>
                                                <div data-parent="#exampleAccordion" id="collapseExample"
                                                    class="collapse">
                                                    <p class="mb-3">https://paystack-link-for-10k.com</p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <button type="button" aria-expanded="false"
                                                    aria-controls="exampleAccordion2" data-toggle="collapse"
                                                    href="#collapseExample2"
                                                    class="m-0 p-0 btn btn-link">Send to 2,500 Numbers</button>
                                                <div data-parent="#exampleAccordion" id="collapseExample2"
                                                    class="collapse">
                                                    <p class="mb-3">https://paystack-link-for-20k.com</p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <button type="button" aria-expanded="false"
                                                    aria-controls="exampleAccordion3" data-toggle="collapse"
                                                    href="#collapseExample3"
                                                    class="m-0 p-0 btn btn-link">Send to 5,000 Numbers</button>
                                                <div data-parent="#exampleAccordion" id="collapseExample3"
                                                    class="collapse">
                                                    <p class="mb-3">https://paystack-link-for-20k.com</p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <button type="button" aria-expanded="false"
                                                    aria-controls="exampleAccordion2" data-toggle="collapse"
                                                    href="#collapseExample4"
                                                    class="m-0 p-0 btn btn-link">Send to 10,000 Numbers</button>
                                                <div data-parent="#exampleAccordion" id="collapseExample4"
                                                    class="collapse">
                                                    <p class="mb-3">https://paystack-link-for-20k.com</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-eg9-2" role="tabpanel">
                                    <div class="card-body">
                                        <p class="mb-0">Currently not available at the moment..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- 3 -->

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
<!-- CONTENTS END -->

<div class="app-drawer-overlay d-none animated fadeIn"></div>

@endsection