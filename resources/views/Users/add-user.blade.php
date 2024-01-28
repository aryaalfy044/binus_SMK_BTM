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
                <h4 class="card-title">New User</h4>
                <br>
                <form class="forms-sample" method="post" action="{{ route('store-user') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="txtName">Name</label>
                        <input type="text" class="form-control" name="name" id="txtName" placeholder="Name" value="{{ old('name') }}">
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ddlGender">Gender</label>
                        <select class="form-control" name="gender" id="ddlGender">
                            <option value="">Select gender</option>
                            <option {{ old('gender') == 'Male' ? "selected" : "" }} value="Male">Male</option>
                            <option {{ old('gender') == 'Female' ? "selected" : "" }} value="Female">Female</option>
                        </select>
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="txtUsername">Username</label>
                        <input type="text" class="form-control" name="login_id" id="txtUsername" placeholder="Username" value="{{ old('login_id') }}">
                        @error('login_id')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="password" class="form-control" name="password" id="txtPassword" placeholder="Password">
                        @error('password')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="txtConfirmPass">Confirm password</label>
                        <input type="password" class="form-control" id="txtConfirmPass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="txtBirthDate">Date of Birth</label>
                        <input type="date" class="form-control" name="birth_date" id="txtBirthDate" placeholder="dd/mm/yyyy" value="{{ old('birth_date') }}">
                        @error('birth_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="txtBirthPlace">City of Birth</label>
                        <input type="text" class="form-control" name="birth_place" id="txtBirthPlace" placeholder="City of Birth" value="{{ old('birth_place') }}">
                        @error('birth_place')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ddlGender">Role</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">Select Role</option>
                            <option {{ old('role') == 'Male' ? "selected" : "" }} value="Male">Manager</option>
                            <option {{ old('role') == 'Admin' ? "selected" : "" }} value="Female">Admin</option>
                            <option {{ old('role') == 'Leader' ? "selected" : "" }} value="Female">Leader</option>
                            <option {{ old('role') == 'Programmer' ? "selected" : "" }} value="Female">Programmer</option>
                        </select>
                        @error('gender')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="email" class="form-control" name="email_address" id="txtEmail" placeholder="Email address" value="{{ old('email_address') }}">
                        @error('email_address')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="txtAddress">Address</label>
                        <input type="text" class="form-control" name="address" id="txtAddress" placeholder="Address" value="{{ old('address') }}">
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