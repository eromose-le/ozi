@extends('layouts.admin')

@section('content')
    
<!-- Content -->
<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- MONITOR DASHBOARD -->
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="lnr-pie-chart icon-gradient bg-ripe-malin"></i>
                    </div>
                    <div>ROOT Admin Dashboard
                        <div class="page-title-subheading">Track Messages sending progress</div>
                    </div>
                </div>
                <!-- ... -->
            </div>
        </div>
        <!-- MONITOR DASHBOARD END -->


        <div class="tabs-animation">

            <!-- Messages -->
            
            <!-- Messages End -->

            <!-- ACTIVE USERS -->
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Control Table
                            <div class="btn-actions-pane-right">
                                <div role="group" class="btn-group-sm btn-group">
                                    <!-- <button class="active btn btn-focus">Last Week</button>
                                    <button class="btn btn-focus">All Month</button> -->
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table
                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th>Name</th>
                                        <th class="text-center">Time</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Progress</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    {{-- PENDING ROW --}}
                                    @if ($campaign_auth->count())
                                        @foreach ($campaign_auth as $campaign)
                                            {{-- @if ($campaign_auth->ownedBy(auth()->user())) --}}
                                                <tr>
                                                    <td class="text-center text-muted">{{ $campaign->id }}</td>
                                                    <td>
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <div class="widget-content-left">
                                                                        <img width="40" class="rounded-circle"
                                                                            src="{{ $campaign->campaigncsv }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-left flex2">
                                                                    <div class="widget-heading">{{ $campaign->campaignname }}</div>
                                                                    {{-- <div class="widget-subheading opacity-7">
                                                                        {{ $campaign->user->number }}</div> --}}
                                                                        <div class="widget-subheading opacity-7">
                                                                        {{ $campaign->campaignbody }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">{{ $campaign->campaigntime }}</td>
                                                    <td class="text-center">{{ $campaign->campaigndate }}</td>
                                                    <td class="text-center">
                                                        <img width="40" class="rounded-circle"
                                                            src="{{ $campaign->status }}" alt="">
                                                    </td>
                                                    <td class="text-center" style="width: 150px;">
                                                        <div class="pie-sparkline">0,0,{{ $campaign->progress }},{{ $campaign->progress2 }},0</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge {{ $campaign->actionsclass }}">{{ $campaign->actions }}</div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge"><a href={{ "edit/". $campaign->id }}>edit</a></div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="badge"><a href={{ "delete/". $campaign->id }}>delete</a></div>
                                                    </td>
                                                    {{-- <td class="text-center">
                                                        <div class="badge"><a href="download">download</a></div>
                                                    </td> --}}
                                                </tr>
                                            {{-- @endif --}}
                                        @endforeach
                                    @else
                                        <p>There are no reports</p>
                                    @endif

                                    {{-- SUCCESS ROW --}}
                                    {{-- <tr>
                                        <td class="text-center text-muted">2</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                            <img width="40" class="rounded-circle"
                                                                src="/images/avatars/3.jpg" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">City of David blast
                                                        </div>
                                                        <div class="widget-subheading opacity-7">
                                                            +2348163657143</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">22-01-2021</td>
                                        <td class="text-center">
                                            <img width="40" class="rounded-circle"
                                                src="/images/avatars/done.gif" alt="">
                                        </td>
                                        <td class="text-center" style="width: 150px;">
                                            <div id="sparkline-chart9"></div>
                                        </td>
                                        <td class="text-center">
                                            <div class="badge badge-success">Completed</div>
                                        </td>
                                    </tr> --}}

                                </tbody>
                            </table>


                            {{-- PAGINATION HERE --}}


                            {{-- 2ND REPORT --}}
                            @if ($campaign_auth->count())
                                @foreach ($campaign_auth as $campaign)
                                    <div>{{ $campaign->campaignname }}
                                        <a href={{ "edit/". $campaign->id }}>edit</a>
                                        <a href={{ "delete/". $campaign->id }}>delete</a>
                                    </div>
                                @endforeach
                            @else
                                <p>There are no reports</p>
                            @endif

                            {{-- ROOT USER SHOW --}}
                            {{-- 2ND REPORT --}}
                            @if ($user_auth->count())
                                @foreach ($user_auth as $user)
                                    <div>{{ $user->name }}
                                        <a href={{ "edit/". $user->id }}>edit</a>
                                        <a href={{ "delete/". $user->id }}>delete</a>
                                    </div>
                                @endforeach
                            @else
                                <p>There are no reports</p>
                            @endif

                        </div>
                        <div class="d-block text-center card-footer">
                            <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"> </i>
                            </button>
                            <button class="btn-wide btn btn-success">Save</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- ACTIVE USERS END -->



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