
@extends('admin.base')

@section('content')
    <div class="card">
        <span hidden id="id_user_smart">{{$id}}</span>
        <div class="card-body">
            <table class="table table-striped table-bordered" id="partner_table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Address</th>
                    <th>Current Level</th>
                </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div>
    </div>


@endsection
@push('scripts')

    <script src="{{ asset('js/admin/partners.js') }}"></script>
@endpush
