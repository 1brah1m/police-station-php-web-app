@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Police Instructions Details</h3>
            <form method="POST" action="add_instructions">
                @csrf
                <div class="form-group">
                    <label for="name">
                        Police Inspector Name
                    </label>
                    <select name="inspector_id" class="form-control">
                        <?php $inspectors = App\PoliceInspector::all(); ?>
                        @foreach($inspectors as $inspector)
                            <option value="{{ $inspector->id }}">
                                {{ $inspector->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ps_name">
                        PS Name
                    </label>
                    <input type="text" name="ps_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="case_no">
                        Case No.
                    </label>
                    <select name="case_no" class="form-control">
                        <?php $police_cases = App\PoliceCase::all(); ?>
                        @foreach($police_cases as $police_case)
                            <option value="{{ $police_case->id }}">
                                {{ $police_case->cr_no }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="instructions">
                        Instruction Details
                    </label>
                    <textarea name="instructions" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="instruction_date">
                        Date Of Instructions
                    </label>
                    <input type="date" name="instruction_date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="instruction_complete_date">
                        Date Of Completed Instructions
                    </label>
                    <input type="date" name="instruction_complete_date" class="form-control">
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
