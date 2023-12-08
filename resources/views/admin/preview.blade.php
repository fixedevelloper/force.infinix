

@extends('admin.base')

@section('content')
    <div class="row">
        @for($i=0; $i<11;$i++)
            <div class="col-md-2 col-sm-4 col-6 col-xl-2 grid-margin stretch-card">
                <div class="card text-black" style="background-color: darkslategrey; min-height: 150px;background-repeat: no-repeat;
                    background-size: 50px;
                    background-position-x: center;background-position-y: center; background-image: url('{{asset('admin/images/Logo_transparent_USDC_20231125_183246_0000.svg')}}')">
                    <div class="card_body">
                        <div>
                            <span class="h3 text-start">L{{$i}}</span>
                            <span class="h3" style="float: right"><i class="text-warning mdi mdi-circle"></i>40</span>
                        </div>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
