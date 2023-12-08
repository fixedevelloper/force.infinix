
@extends('base')

@section('content')
    <div class="form-wrap">
        <form  class="signin-form">
            <div class="form-image">
                <img src="{{asset('img/image-form.png')}}" alt="">
            </div>
            <div class="form-content">
                <h2>Register</h2>
                <div class="mat-div">
                    <label class="mat-label">Address</label>
                    <input type="text" class="mat-input">
                </div>

                <input type="submit" class="btn gradient_button" value="REGISTER">

            </div>
        </form>
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
    <script src="https://cdn.jsdelivr.net/npm/@walletconnect/browser@1.0.0-beta.46/lib/index.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@walletconnect/qrcode-modal@1.0.0-beta.46/lib/index.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
@endpush
