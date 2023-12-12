
@extends('admin.base')

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
                                        <h6 class="card-title fw-bolder mt-2">ID: <span id="id_user_smart">{{$id}}</span> </h6>
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
                            background-position-x: right;" >
                            <div class="card-body text-white">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Personal link</h6>
                                </div>
                                <div class="">
                                    <span><a href="{{$link}}">{{$link}}</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Image PUB</h6>
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
<div class="row  flex-grow-1">
    <div class="col-md-3 grid-margin stretch-card">
    <div class="card"  style="background-image: url({{asset('img/admin/2.svg')}});
        background-repeat:no-repeat;
        background-size:contain;
        background-position-x: right;">
        <div class="card-body">
            <h6 class="card-title fw-bolder mt-2">Patners</h6>
                <h6 class="card-title fw-bolder mt-2"><span id="dash_partners"></span></h6>
            <span class="block"><span class="mdi mdi-arrow-top-right"></span>235</span>
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
                <h6 class="card-title fw-bolder mt-2">25897</h6>
                    <span class="block"><span class="mdi mdi-arrow-top-right"></span>46</span>

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
                <h6 class="card-title fw-bolder mt-2">xxxxxxxxxxxxxxxxxxxxxxx</h6>
            </div>
        </div>
    </div>

</div>
    <div class="row">
        <h3>X-machine Programs</h3>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card text-white">
                <div class="card-body">
                    <div class="row">
                        <span class="col-md-6 text-start h1">X3</span><span class="col-md-6 h1 text-end">10USD</span>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="row">
                                @for($i=0; $i<11;$i++)
                                  <a class="btn btn-sm bg-info col-md-1 col-sm-4 col-6 col-xl-2 m-1">
                                    </a>
                                @endfor
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="">
                                <span class="d-block text-end">Missed Profits</span>
                                <span class="d-block text-end">400USD</span>
                            </div>
                            <div class="d-grid gap-2 align-self-end mt-5">
                                <a href="{{route('preview')}}" class="d-block btn btn-primary align-self-end">Preview
                                    <img style="height: 40px" src="{{asset('img/admin/11.svg')}}"></a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/cdn/ctra_admin.js') }}"></script>
    <script>
        $(function () {
            var address= getIDUser($('#id_user_smart').text())
            console.log("addresse:"+address);
        })
    </script>
@endpush
