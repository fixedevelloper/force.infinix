<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet"  href="{{asset('libs/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Infinix login</title>

</head>

<body>
<section class="signinform-scn">
    <div class="signinform-group">
        <div class="page-width">
            <div class="d-flex justify-content-center">
                <h3 class="text-center">LOGIN</h3>
            </div>

            <div class="signinform-inner">
                <a href="#" class="logo mt-3 mb-3">
                    <img src="{{asset('img/logo.svg')}}" alt="Coderwrap">
                </a>

                <div class="form-tabs">
                    <div class="f-tab-item" data-tab="login-tab">
                        <div>
                            <span class="flabel">Automatic login</span>
                        </div>
                    </div>
                    <div class="f-tab-item" data-tab="register-tab">
                        <div>
                            <span class="flabel">View By ID</span>
                        </div>
                    </div>

                </div>
                <div class="cw-form-info">
                        <!--Login Form Start-->
                        <div class="cmn-form-group login-tab">
                            <h2>Automatic login</h2>
                            <button class="cmn-btn" type="button" id="btn_login" onclick="loginAuto()">Login</button>
        </div>
                        <!--Login Form End-->
                        <!--Create Account Form Start-->
                        <div class="cmn-form-group register-tab">
                            <h2>View by ID</h2>
                            <div class="input-group">
                                <input name="id" type="text" placeholder="05" id="login_id"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = '5'" required="">
                            </div>
                            <button class="cmn-btn" type="button" onclick="loginById()">Preview</button>
                        </div>
                        <!--Create Account Form End-->
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var configs={
        routes:{
            index: "{{\Illuminate\Support\Facades\URL::to('/')}}",
            dashboard: "{{\Illuminate\Support\Facades\URL::route('admin.dashboard')}}",
            login: "{{\Illuminate\Support\Facades\URL::route('login')}}",
        }
    }
</script>
<script src="{{asset('js/jquery-3.7.min.js')}}"></script>
<script
    src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script>
    // First Tab & Tab Data class
    document.querySelector('.signinform-inner .f-tab-item:first-child').classList.add('active');
    document.querySelector('.cmn-form-group:first-child').classList.add('showform');

    // Tab Code
    let tabitems = document.querySelectorAll('.signinform-inner .f-tab-item');
    tabitems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            let datatab = e.target.getAttribute('data-tab');

            // Remove active class from all tab items
            tabitems.forEach(function(item) {
                item.classList.remove('active');
            });

            // Add active class to clicked tab item
            e.target.classList.add('active');

            let tabDataItems = document.querySelectorAll('.cmn-form-group');
            tabDataItems.forEach(function(dItem) {
                dItem.classList.remove('showform');
            });
            document.querySelector(`.${datatab}`).classList.add('showform');
        });
    });

</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/web3@1.7.3/dist/web3.min.js"></script>
<script src="https://bscscan.com/assets/js/custom/web3-eth.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.2.umd.min.js" type="application/javascript"></script>
<script src="{{ asset('js/cdn/ctra.js') }}"></script>
</body>

</html>
