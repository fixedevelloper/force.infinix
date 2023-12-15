@extends('admin.base')

@section('content')
    <div class=" d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Buy machine</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address user</label>
                        <input type="text" class="form-control" id="buy_address_user" placeholder="0X.....">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Level to uprage</label>
                        <input type="text" class="form-control"  id="level_id" placeholder="1">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" onclick="buy_machin()"><i class="fa fa-spinner fa-spin" id="spinner_register"></i>buy machin</button>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/cdn/ctr_admin_register.js') }}"></script>
@endpush
