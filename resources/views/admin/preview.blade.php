

@extends('admin.base')
@push('css_or_js')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endpush
@section('content')
    <span id="id_user_smart">{{$id}}</span>
    <div class="card" style="background-image: url({{asset('img/admin/5.svg')}})">
        <div class="card-body">
            <div class="row d-flex justify-content-center" id="level_users">
            </div>
            <div class="row container mt-3">
                <div class="col-md-6">
                    <p><img class="number_img" src="{{asset('img/admin/3.svg')}}"><span style="">Number of teams</span>
                    </p>
                    {{-- <p><img class="number_img" src="{{asset('img/admin/8.svg')}}"><span
                             style="">Number of Recycling</span></p>--}}
                    <p><img class="number_img" src="{{asset('img/admin/7.svg')}}"><span style="">Level to upgrade</span>
                    </p>
                </div>
                <div class="col-md-6 text-right">
                    <p>TOTAL EARNINGS</p>
                    <p class="h2" ><span id="total_earning"></span> USDC</p>
                </div>
            </div>
        </div>
        <span id="click_item"></span>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('js/cdn/ctr_admin_custom.js') }}"></script>
@endpush
