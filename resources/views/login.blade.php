<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">

    <title>Infinix login</title>

</head>

<body>
<section class="signinform-scn">
    <div class="signinform-group">
        <div class="page-width">
            <h3 class="text-center">LOGIN</h3>
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
                    <form action="#" method="post">
                        <!--Login Form Start-->
                        <div class="cmn-form-group login-tab">
                            <h2>Automatic login</h2>
                            <button class="cmn-btn" type="button">Login</button>
        </div>
                        <!--Login Form End-->
                        <!--Create Account Form Start-->
                        <div class="cmn-form-group register-tab">
                            <h2>View by ID</h2>
                            <div class="input-group">
                                <input type="text" placeholder="05" onfocus="this.placeholder = ''" onblur="this.placeholder = '5'" required="">
                            </div>
                            <button class="cmn-btn" type="submit">Preview</button>
                        </div>
                        <!--Create Account Form End-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0lpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
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
    document.querySelector('.forgot.f-tab-item').addEventListener('click', function(e) {
        document.querySelector('.form-tabs').classList.add('formtabs-show');
    });

    //Cancel Code
    document.querySelector('.cancel-link').addEventListener('click', function(e) {
        document.querySelector('.forgotpass-tab').classList.remove('showform');
        document.querySelector('.form-tabs').classList.remove('formtabs-show');
        document.querySelector('div[data-tab="login-tab"]').classList.add('active');
        document.querySelector('.login-tab').classList.add('showform');
    });

    document.querySelector('.login-link').addEventListener('click', function(e) {
        document.querySelector('div[data-tab="login-tab"]').classList.add('active');
    });
    document.querySelector('.signup-link').addEventListener('click', function(e) {
        document.querySelector('div[data-tab="register-tab"]').classList.add('active');
    });
</script>
</body>

</html>
