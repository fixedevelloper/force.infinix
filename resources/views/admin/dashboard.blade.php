@extends('admin.base')
@push('css_or_js')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endpush
@section('content')
    <span hidden id="id_user_smart">{{$id}}</span>
    <div class="row">
        <div class="col-xl-3 col-sm-6">
            <div class="card overflow-hidden">
                <div class="card-header align-items-start border-0 pb-0">
                    <div class="mr-auto">
                        <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success" aria-hidden="true"></i>4%(30 days)</p>
                        <h2 class="text-black mb-0 font-w600">$<span id="getDirectReferrerReward"></span></h2>
                    </div>
                    <img src="{{asset('img/admin/12/47_20231218_094800_0000.svg')}}" width="42" height="42">
                </div>
                <div class="card-body p-0">
                    <canvas id="widgetChart" class="max-h80 mt-auto"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card overflow-hidden">
                <div class="card-header align-items-start border-0 pb-0">
                    <div class="mr-auto">
                        <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger" aria-hidden="true"></i>4%(30 days)</p>
                        <h2 class="text-black mb-0 font-w600">$<span id="S10_INCOME"></span></h2>
                    </div>
                    <img src="{{asset('img/admin/12/48_20231218_094800_0001.svg')}}" width="42" height="42">
                </div>
                <div class="card-body p-0">
                    <canvas id="widgetChart2" class="max-h80 mt-auto"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card overflow-hidden">
                <div class="card-header align-items-start border-0 pb-0">
                    <div class="mr-auto">
                        <p class="mb-2 fs-13"><i class="fa fa-caret-down scale5 mr-2 text-danger" aria-hidden="true"></i>4%(30 days)</p>
                        <h2 class="text-black mb-0 font-w600">$<span id="S4_MACHINEIncome"></span></h2>
                    </div>
                    <img src="{{asset('img/admin/12/49_20231218_094801_0002.svg')}}" width="42" height="42">
                </div>
                <div class="card-body p-0">
                    <canvas id="widgetChart3" class="max-h80 mt-auto"></canvas>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card overflow-hidden">
                <div class="card-header align-items-start border-0 pb-0">
                    <div class="mr-auto">
                        <p class="mb-2 fs-13"><i class="fa fa-caret-up scale5 mr-2 text-success" aria-hidden="true"></i>4%(30 days)</p>
                        <h2 class="text-black mb-0 font-w600">$<span id="randomRewards"></span></h2>
                    </div>
                    <img src="{{asset('img/admin/12/50_20231218_094801_0003.svg')}}" width="42" height="42">
                {{--    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5566 23.893C21.1991 24.0359 20.8009 24.0359 20.4434 23.893L16.6064 22.3582L21 31.1454L25.3936 22.3582L21.5566 23.893Z" fill="#AC4CBC"/>
                        <path d="M21 20.8846L26.2771 18.7739L21 10.3304L15.7229 18.7739L21 20.8846Z" fill="#AC4CBC"/>
                        <path d="M21 0.00012207C9.40213 0.00012207 0.00012207 9.40213 0.00012207 21C0.00012207 32.5979 9.40213 41.9999 21 41.9999C32.5979 41.9999 41.9999 32.5979 41.9999 21C41.9871 9.40762 32.5924 0.0129395 21 0.00012207ZM29.8417 20.171L22.3417 35.171C21.9714 35.9121 21.0701 36.2124 20.3294 35.8421C20.0387 35.697 19.8034 35.4617 19.6583 35.171L12.1583 20.171C11.9253 19.7032 11.9519 19.1479 12.2284 18.7043L19.7284 6.70453C20.2269 6.00232 21.1996 5.83661 21.9018 6.33511C22.0451 6.43674 22.1701 6.56125 22.2717 6.70453L29.7712 18.7043C30.0482 19.1479 30.0747 19.7032 29.8417 20.171Z" fill="#AC4CBC"/>
                    </svg>--}}
                </div>
                <div class="card-body p-0">
                    <canvas id="widgetChart4" class="max-h80 mt-auto"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-block d-sm-flex border-0">
                </div>
                <div class="card-body pb-0 pt-sm-3 pt-0 tab-content">
                    <div class="row flex-grow-1">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <img class="rounded-circle card_img_dark" width="60" src="{{asset("img/admin/1.svg")}}" alt="">
                                        </div>
                                        <div class="col-md-8 text-start">
                                            <h6 class="card-title fw-bolder mt-2">@if($user) {{$user->name}} @else Username
                                                <a  data-toggle="modal" data-target="#exampleModal"><img class="cas_img" src="{{asset("img/pen.png")}}" alt=""></a> @endif</h6>
                                            <h6 class="card-title fw-bolder mt-2">ID: <span id="id_user_smart">{{$id}}</span>
                                            </h6>
                                            <h6 class="card-title fw-bolder mt-2">Upline ID: <span id="parent_id"></span>
                                            </h6>
                                            {{--<i class="fa fa-spinner fa-spin" id="spinner_dashboard"></i>
                                            <h6 class="card-title fw-bolder mt-2" id="address_user_smart"></h6>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin">

                                <div class="card mb-2">
                                    <div class="card-body text-white">
                                        <div class="d-flex justify-content-between align-items-baseline">
                                            <h6 class="card-title mb-0">Personal link</h6>
                                        </div>
                                        <div class="" style="cursor: pointer">

                                    <span id="click_item" onclick='dashboard.copyText()'>{{$link}}</span><img class="cas_img" src="{{asset('img/admin/9.svg')}}"/>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="card">
                <div class="card-header d-sm-flex d-block pb-0 border-0">
                    <div>
                        <h4 class="fs-20 text-black">X MACHINE PROGRAMMS ET PREVIEW</h4>
                      {{--  <p class="mb-0 fs-12">Lorem ipsum dolor sit amet, consectetur</p>--}}
                    </div>
                </div>
                <div class="card-body pb-0">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <i class="fa fa-spinner fa-spin" id="spinner_dashboard"></i>
                        <div class="row"  id="level_gradian"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                            <div class="d-grid gap-2 align-self-end mt-5 mb-3">
                                <span class="col-md-6 h1 text-end mb-2 text-white" id="order_total">USDC</span>
                                <a href="{{route('preview',['id'=>$id])}}" class="btn btn-primary d-block btn-lg text-uppercase align-self-end">Preview
                                    <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                            </div>

                        </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                            <div>
                                <h4 class="fs-20 text-black"></h4>
                                <p class="mb-0 fs-12"></p>
                            </div>
                       </div>
                        <div class="card-body">
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-xxl-12">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="mb-0 text-black fs-20">RECENT SYSTEM ACTIVITY</h4>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table text-center bg-info-hover tr-rounded">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Address</th>
                                        <th class="text-right">Time</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0 text-center">
                            <a href="#" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h4 class="mb-0 text-black fs-20 text-uppercase">Best recruiters in the system</h4>
                        </div>
                        <div class="card-body p-3">
                            <div class="table-responsive">
                                <table class="table text-center bg-warning-hover tr-rounded">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Address</th>
                                        <th class="text-center">Partners</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-0 pt-0 text-center">
                            <a href="#" class="btn-link">Show more <i class="fa fa-caret-right ml-2 scale-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  {{--  <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
            <div class="row flex-grow-1">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <img class="rounded-circle card_img_dark" src="{{asset("img/admin/1.svg")}}" alt="">
                                </div>
                                <div class="col-md-8 text-start">
                                    <h6 class="card-title fw-bolder mt-2">@if($user) {{$user->name}} @else Username  <a  data-toggle="modal" data-target="#exampleModal"><img class="cas_img" src="{{asset("img/pen.png")}}" alt=""></a> @endif</h6>
                                    <h6 class="card-title fw-bolder mt-2">ID: <span id="id_user_smart">{{$id}}</span>
                                    </h6>
                                    <i class="fa fa-spinner fa-spin" id="spinner_dashboard"></i>
                                    <h6 class="card-title fw-bolder mt-2" id="address_user_smart"></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin">
                    <div>
                        <div class="card mb-2" style="background-image: url({{asset('img/admin/6.svg')}});
                            background-repeat:no-repeat;
                            background-size:contain;
                            background-position-x: right;">
                            <div class="card-body text-white">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Personal link</h6>
                                </div>
                                <div class="" style="cursor: pointer">
                                   --}}{{-- <span><a href="{{$link}}" id="click_item">{{$link}}</a></span>--}}{{--
                                    <span id="click_item">{{$link}}</span><img class="cas_img" src="{{asset('img/admin/9.svg')}}"/>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="pub d-flex justify-content-between align-items-baseline">
                                    <img class="" src="{{asset("img/logo.svg")}}" alt="">
                                </div>
                                <div class="">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row flex-grow-1">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card" style="background-image: url({{asset('img/admin/2.svg')}});
                background-repeat:no-repeat;
                background-size:contain;
                background-position-x: right;">
                <div class="card-body">
                    <h6 class="card-title fw-bolder mt-2">Patners</h6>
                    <h6 class="card-title fw-bolder mt-2"><span id="dash_partners"></span></h6>
                    <span class="block"><span class="mdi mdi-arrow-top-right"></span></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card" style="background-image: url({{asset('img/admin/3.svg')}});
                background-repeat:no-repeat;
                background-size: 100px;
                background-position-x: right;">
                <div class="card-body">
                    <h6 class="card-title fw-bolder mt-2">Teams</h6>
                    <div class="loader"></div>
                    <h6 class="card-title fw-bolder mt-2" id="direct_partners"></h6>
                    <span class="block"><span class="mdi mdi-arrow-top-right"></span></span>

                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card" style="background-image: url({{asset('img/admin/17.svg')}});
                background-repeat:no-repeat;
                background-size: 100px;
                background-position-x: right;">
                <div class="card-body">
                    <h6 class="card-title fw-bolder mt-2">Profits</h6>
                    <h6 class="card-title fw-bolder mt-2">
                        <i class="fa fa-spinner fa-spin" id="spinner_dashboard"></i>
                        <p id="randomRewards"></p>
                        <p id="getDirectReferrerReward"></p>
                        <p id="S10_INCOME"></p>
                        <p id="S4_MACHINEIncome"></p></h6>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <h3 class="mx-5">X-machine Programs</h3>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card text-white card_gradiant">
                <div class="card-body">
                    <div class="row">
                        <span class="col-md-6 text-start h1">X3</span><span class="col-md-6 h1 text-end" id="order_total">USDC</span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="row" id="level_gradian">

                            </div>
                            <i class="fa fa-spinner fa-spin" id="spinner_dashboard"></i>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                           --}}{{--     <span class="d-block text-end">Missed Profits</span>
                                <span class="d-block text-end">400USD</span>--}}{{--
                            </div>
                            <div class="d-grid gap-2 align-self-end mt-5">
                                <a href="{{route('preview',['id'=>$id])}}" class="d-block btn btn-primary align-self-end">Preview
                                    <img style="height: 40px" src="{{asset('img/admin/11.svg')}}"></a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8">
            <h3>Platform recent activity</h3>
            <div class="card">
                <div class="card-body">
                    <table>
                        <tbody>
                        <tr>
                            <td><i class="fa fa-user"></i></td>
                            <td><span>new user joined</span><span class="table_span" id="newJoined">ID 124</span></td>
                            <td><span>2min ago</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-4">

        </div>
    </div>
--}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Username</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="id_parent" hidden  placeholder="Paul.K" id="parent_id">
                            <label for="exampleFormControlInput1" class="form-label">USERNAME</label>
                            <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Paul.K">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
@push('scripts')

    <script src="{{ asset('js/admin/dashboard.js') }}"></script>
@endpush
