@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Police Inspector Details</h3>
            <form method="POST" action="add_new_inspector">
                @csrf
                <div class="form-group">
                    <label for="name">
                        Name
                    </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="staff_id">
                        Staff ID
                    </label>
                    <input type="text" name="staff_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="staff_name">
                        Staff Name
                    </label>
                    <input type="text" name="staff_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contact_id">
                        Contact ID
                    </label>
                    <input type="text" name="contact_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="rank">
                        Rank
                    </label>
                    <input type="text" name="rank" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
        <div class="col">
            
        </div>
    </div>
</div>
@endsection
