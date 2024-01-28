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
                <h4 class="card-title">Overtime Request</h4>
                <br>
                <form class="forms-sample" method="post" action="{{ route('store-user') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="employeeName">Team</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="role" id="rad1" value="Java"
                                            checked>
                                        Java
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="role" id="rad2" value="PHP">
                                        PHP
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="role" id="rad3" value="UI">
                                        UI
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="employeeName">Employee Name</label>
                        <select class="form-control" id="employee">
                            @foreach ($users as $u)
                            <option {{ $user_id===$u->id ? 'selected' : '' }}
                                value="{{$u->id }}">{{$u->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="overtime_date">Overtime Date</label>
                        <input type="date" class="form-control" name="overtime_date" id="overtime_date"
                            placeholder="dd/mm/yyyy" value="{{ old('overtime_date') }}">
                        @error('overtime_date')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="employeeName">Overtime Reason</label>
                        <textarea class="form-control" id="reason" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="employeeName">Overtime Task</label>
                        <textarea class="form-control" id="task" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button type="button" class="btn btn-light" onclick="cancelRedirect();">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function cancelRedirect() {
        window.location.href = "{{ url('manage-ta}";
    }
</script>
@endsection