@extends('admin.base')
@push('css_or_js')
@endpush
@section('content')
    <div class=" d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Create user</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Address user</label>
                        <input type="text" class="form-control" id="register_address_user" placeholder="0X.....">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Parend ID</label>
                        <input type="text" class="form-control"  id="parent_id" placeholder="05">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-primary" onclick="register()"><i class="fa fa-spinner fa-spin" id="spinner_register"></i>Add User</button>
                </div>

            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script src="{{ asset('js/cdn/ctr_admin_register.js') }}"></script>
@endpush
