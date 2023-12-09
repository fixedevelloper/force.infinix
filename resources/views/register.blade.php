
@extends('base')

@section('content')
    <div class="form-wrap">
       {{-- <form class="signin-form" onSubmit="App.registerLand()">
            <div class="form-content">
        <input type="text" placeholder="Enter Referral ID" name="referralid" id="referralid">
        <div class="wrap-btn mt-2">
            <button type="button" class="tf-button style2 me-2" id="tknapprove1" onClick="approuve()" style="display: block;">
                Approve
            </button>
            <button type="button" class="tf-button style2" id="regnbtn1" onClick="register()" style="display: block">
                Register
            </button>
            <button type="button" class="tf-button style2" id="showbuttonAuth" onClick="register()" style="display: none">
                Processing
            </button>
        </div>
            </div>
        </form>--}}
    <form class="signin-form">
            <div class="form-image">
                <div class="mt-5">
                    <ul class="list-group">
                        <span hidden id="user_id"></span>
                        <li class="list-group-item list-group-item-danger" id="wallet_connect">Wallet not connected</li>
                        <li class="list-group-item list-group-item-danger" id="network_approuve">Network</li>
                        <li class="list-group-item list-group-item-success">Registration Available</li>
                        <li class="list-group-item list-group-item-danger" id="balance_id">Balance is less than 10 USDT and 0.004 BNB</li>
                        <li class="list-group-item list-group-item-danger" id="usdt_approve_id">Approve USDT</li>
                    </ul>
                </div>
                <img src="{{asset('img/image-form.png')}}" alt="">
            </div>
            <div class="form-content">
                <h2>Register</h2>
                <div class="mat-div">
                    <label class="mat-label">Your upline</label>
                    <input placeholder="EX: 10" type="text" class="mat-input" id="referralid">
                </div>
                <button onclick="approve()" type="button" class="btn gradient_button " id="approuve"><i class="fa fa-spinner fa-spin" id="spinner_approuve"></i> Approuve</button>
                <button type="button" onclick="register()" class="btn gradient_button" value="REGISTER"><i class="fa fa-spinner fa-spin" id="spinner_register"></i> Register</button>

            </div>
        </form>
     {{--   <form class="signin-form" onSubmit="App.registerLand()">
            <div class="form-image">
                <div class="mt-5">
                    <ul class="list-group">
                        <span hidden id="user_id"></span>
                        <li class="list-group-item list-group-item-danger" id="wallet_connect">Wallet not connected</li>
                        <li class="list-group-item list-group-item-danger" id="network">Network</li>
                        <li class="list-group-item list-group-item-success">Registration Available</li>
                        <li class="list-group-item list-group-item-danger">Balance is less than 10 USDT and 0.004 BNB</li>
                        <li class="list-group-item list-group-item-danger">Approve USDT</li>
                    </ul>
                </div>
               --}}{{-- <img src="{{asset('img/image-form.png')}}" alt="">--}}{{--
            </div>
            <div class="form-content">
                <h2>Register</h2>
                <div class="mat-div">
                    <label class="mat-label">Your upline</label>
                    <input placeholder="EX: 10" type="text" class="mat-input">
                </div>
                <button onclick="App.approuveLand()" class="btn gradient_button" id="approuve">Approuve</button>
                <button type="submit" class="btn gradient_button" value="REGISTER">Register</button>

            </div>
        </form>--}}
    </div>
   {{-- <section class="account padding-top padding-bottom sec-bg-color2">
        <div class="container">
            <div class="account__wrapper" data-aos="fade-up" data-aos-duration="800">

                <img src="{{asset('images/Black White Minimal Coming Soon Instagram Post.svg')}}">
                <h2 CLASS="text-center">COMING SOON</h2>
                --}}{{--<div class="row g-4">
                    <div class="col-lg-6">
                        <div class="account__content account__content--style1">

                            <div class="account__header">
                                <h2>Registration In</h2>
                                <p>INFINIX FORCE</p>
                                <div class="row">
                                <div class="">
                                    <label for="account-email" class="form-label">Your upline</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="account-email" placeholder="001"
                                               required>
                                        <a  href="#" class="input-group-text trk-btn trk-btn--border trk-btn--primary">Save</a>
                                    </div>

                                </div>
                                </div>
                                <div class="mt-5">
                                    <ul class="list-group">
                                        <li class="list-group-item list-group-item-danger">Wallet not connected</li>
                                        <li class="list-group-item list-group-item-danger">Network</li>
                                        <li class="list-group-item list-group-item-success">Registration Available</li>
                                        <li class="list-group-item list-group-item-danger">Balance is less than 10 USDT and 0.004 BNB</li>
                                        <li class="list-group-item list-group-item-danger">Approve USDT</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="account__content account__content--style1">

                            <!-- account tittle -->
                            <div class="account__header">
                                <h2>Guide connect to wallet</h2>
                                <p></p>
                                <a target="_blank" href="#" class="trk-btn trk-btn--border trk-btn--primary d-block mt-4"><i class="fa fa-book-open-reader"></i>Read guide</a>
                            </div>

                        </div>
                    </div>
                </div>--}}{{--
            </div>
        </div>
        <div class="account__shape">
      <span class="account__shape-item account__shape-item--1"><img src="{{asset('images/contact_shap04.png')}}"
                                                                    alt="shape-icon"></span>
        </div>
    </section>--}}
@endsection
@push('scripts')
   {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.2.7-rc.0/web3.min.js"></script>
   --}}
    {{--<script src="{{ asset('js/cdn/truffle-contract.js') }}"></script>--}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ asset('js/cdn/ctra.js') }}"></script>
@endpush
