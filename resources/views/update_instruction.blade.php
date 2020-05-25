@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Police Instructions Details</h3>
            <?php $instruction = App\InspectorInstructions::find($id); ?>
            <form method="POST" action="/update_instructions">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <div class="form-group">
                    <label for="name">
                        Police Inspector Name
                    </label>
                    <select name="inspector_id" class="form-control" disabled>
                        <?php $inspectors = App\PoliceInspector::all(); ?>
                        @foreach($inspectors as $inspector)
                            <option value="{{ $inspector->id }}" @if($instruction->police_inspector->name == $inspector->name) {{ 'selected'}} @endif>
                                {{ $inspector->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="ps_name">
                        PS Name
                    </label>
                    <input type="text" name="ps_name" class="form-control" value="{{ $instruction->station }}" disabled>
                </div>
                <div class="form-group">
                    <label for="case_no">
                        Case No.
                    </label>
                    <select name="case_no" class="form-control" disabled>
                        <?php $police_cases = App\PoliceCase::all(); ?>
                        @foreach($police_cases as $police_case)
                            <option value="{{ $police_case->id }}" @if($instruction->police_case->cr_no == $police_case->cr_no) {{ 'selected'}} @endif>
                                {{ $police_case->cr_no }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="instructions">
                        Instruction Details
                    </label>
                    <textarea name="instructions" class="form-control" rows="5" disabled>{{ $instruction->instructions }}</textarea>
                </div>
                <div class="form-group">
                    <label for="instruction_date">
                        Date Of Instructions
                    </label>
                    <input type="date" name="instruction_date" class="form-control" value="{{ $instruction->start_date }}" disabled>
                </div>
                <div class="form-group">
                    <label for="instruction_complete_date">
                        Date Of Completed Instructions
                    </label>
                    <input type="date" name="instruction_complete_date" class="form-control" value="{{ $instruction->complete_date }}" min="{{ $instruction->complete_date }}">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Postpone">
                </div>
            </form>

            <form method="POST" action="/set_complete">
                @csrf
                <input type="hidden" name="id" value="{{ $id }}">
                <input type="submit" class="btn btn-success" value="Completed">
            </form>
        </div>
        <div class="col">
            
        </div>
    </div>
</div>
@endsection
