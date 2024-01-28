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
                <h4 class="card-title">Leave Request</h4>
                <br>
                <form class="forms-sample" method="post" action="{{ route('store-user') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtName">Name</label>
                        <input type="text" class="form-control" name="name" id="txtName" placeholder="Name" value="Arya">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="txtAddress">Leave Date From</label>
                        <input type="text" readonly class="form-control" name="txtLeaveDateFrom" id="txtLeaveDateFrom" placeholder="Created Date" value="28-01-2024">
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="txtAddress">Leave Date To</label>
                        <input type="text" readonly class="form-control" name="txtLeaveDateTo" id="txtLeaveDateTo" placeholder="Created Date" value="28-01-2024">
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="txtAddress">Leave Reason</label>
                        <textarea readonly class="form-control" name="txtLeaveReason" id="txtLeaveReason" placeholder="Leave Reason" value="28-01-2024"></textarea>
                        @error('address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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