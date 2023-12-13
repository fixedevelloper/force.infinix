@extends('base')
@push('scripts')

@endpush
@section('content')

    <div class="form-wrap">
        <form class="signin-form">
            <div class="form-content">
                <h2>Login</h2>
                <button onclick="approve()" type="button" class="btn gradient_button " id="approuve"><i class="fa fa-spinner fa-spin" id="spinner_auto-login"></i> Automatic Login </button>
            </div>
        </form>
    </div>
    <div class="form-wrap mt-3">
        <form class="signin-form">
            <div class="form-content">
                <h2>View account ID </h2>
                <div class="mat-div">
                    <label class="mat-label">Your upline</label>
                    <input placeholder="EX: 10" type="text"  class="mat-input" id="referralid">
                </div>
                <button type="button" onclick="register()" class="btn gradient_button" value="REGISTER"><i class="fa fa-spinner fa-spin" id="spinner_register"></i> Viewer</button>

            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/cdn/ctra.js') }}"></script>
@endpush
