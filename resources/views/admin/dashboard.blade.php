@extends('admin.base')
@push('css_or_js')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endpush
@section('content')


    <div class="row">
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
                                    <h6 class="card-title fw-bolder mt-2">Username</h6>
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
                                   {{-- <span><a href="{{$link}}" id="click_item">{{$link}}</a></span>--}}
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
    </div> <!-- row -->
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
                        <div class="col-md-6">
                            <div class="row" id="level_gradian">

                            </div>
                            <i class="fa fa-spinner fa-spin" id="spinner_dashboard"></i>
                        </div>
                        <div class="col-md-6">
                            <div class="">
                           {{--     <span class="d-block text-end">Missed Profits</span>
                                <span class="d-block text-end">400USD</span>--}}
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

{{--    <div class="card" style="background-image: url({{asset('img/admin/5.svg')}})">
        <div class="card-body">
            <div class="row d-flex justify-content-center" id="level_users">
            </div>
            <div class="row container mt-3">
                <div class="col-md-6">
                    <p><img class="number_img" src="{{asset('img/admin/3.svg')}}"><span style="">Number of teams</span>
                    </p>
                   --}}{{-- <p><img class="number_img" src="{{asset('img/admin/8.svg')}}"><span
                            style="">Number of Recycling</span></p>--}}{{--
                    <p><img class="number_img" src="{{asset('img/admin/7.svg')}}"><span style="">Level to upgrade</span>
                    </p>
                </div>
                <div class="col-md-6 text-right">
                    <p>TOTAL EARNINGS</p>
                    <p class="h2" ><span id="total_earning"></span> USDC</p>
                </div>
            </div>
        </div>

    </div>--}}
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
@endsection
@push('scripts')
    <script src="{{ asset('js/cdn/ctr_admin_custom.js') }}"></script>
@endpush
