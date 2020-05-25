@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Case Details</h3>
            <form method="POST" action="add_new_case">
                @csrf
                <div class="form-group">
                    <label for="cr_no">
                        Cr No.
                    </label>
                    <input type="text" name="cr_no" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="station">
                        Police Station
                    </label>
                    <input type="text" name="station" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">
                        Case Description
                    </label>
                    <textarea name="description" class="form-control" rows="5" required></textarea>
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
