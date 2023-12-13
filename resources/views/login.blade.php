@extends('base')
@push('scripts')
    <style>
        .content{
            width: 600px;
            height: auto;
            margin: 0 auto;
            padding: 30px;
        }
        .nav-pills{
            width: 600px;
        }
        .nav-item{
            width: 50%;
        }
        .nav-pills .nav-link{
            font-weight: bold;
            padding-top: 13px;
            text-align: center;
            background: #343436;
            color: #fff;
            border-radius: 30px;
            height: 100px;
        }
        .nav-pills .nav-link.active{
            background: #fff;
            color: #000;
        }
        .tab-content{
            position: absolute;
            width: 600px;
            height: auto;
            margin-top: -50px;
            background: #fff;
            color: #000;
            border-radius: 30px;
            z-index: 1000;
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
            padding: 30px;
            margin-bottom: 50px;
        }
        .tab-content button{
            border-radius: 15px;
            width: 100px;
            margin: 0 auto;
            float: right;
        }
    </style>
@endpush
@section('content')

    <section class="about-docs about-docs-dark valign-center scroll-section">
        <div class="parallax-bg" id="scene3">
            <img class="layer layer-1" data-depth="0.15" src="img/dark-skin/whitepaper/light-1.png" alt="">
            <img class="layer layer-2" data-depth="0.2" src="img/dark-skin/whitepaper/light-2.png" alt="">
        </div>
        <div class="container mt-5">
        <div class="content">
            <!-- Nav pills -->
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill">Login Automatic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="{{route('loginwithaddress')}}">Login with Adresse</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="login" class="container tab-pane active">
                    <div class="d-flex justify-content-between">
                        <a style="width: 100%" type="button" class="btn btn-primary" id="submit_by_id" onclick="login()">Login</a>
                    </div>
                </div>
                <div id="regis" class="container tab-pane fade">
                    <form>
                        <div class="form-group">
                            <label for="InputName">Your Address</label>
                            <input type="text" class="form-control is-valid" id="InputName" placeholder="Full Name">
                       </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/cdn/ctra.js') }}"></script>
@endpush
