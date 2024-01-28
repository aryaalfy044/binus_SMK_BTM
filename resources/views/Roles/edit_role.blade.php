@extends('template')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="container">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Role</h4>
                <br>
                <form class="forms-sample" method="post" action="{{ route('store-user') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtName">Role Name</label>
                        <input type="text" class="form-control" name="name" id="txtName" placeholder="Name" value="Programmer">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="txtAddress">Updated Date</label>
                        <input type="text" readonly class="form-control" name="address" id="txtAddress" placeholder="Created Date" value="28-12-2023">
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button type="button" class="btn btn-light" onclick="cancelRedirect();">Kembali</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function cancelRedirect() {
        window.location.href = "{{ url('list-users') }}";
    }
</script>
@endsection