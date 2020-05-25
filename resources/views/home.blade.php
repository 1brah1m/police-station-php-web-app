@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col" style="text-align: center;">

            <h3>
                Main Menu
            </h3>

            <div class="alert alert-secondary" role="alert" style="text-align: center;">
                <a href="case_details">Add Case Details</a>
            </div>

            <div class="alert alert-secondary" role="alert" style="text-align: center;">
                <a href="add_police_inspector">Add Inspector</a>
            </div>

            <div class="alert alert-secondary" role="alert" style="text-align: center;">
                <a href="instructions">Add Instructions</a>
            </div>

            <div class="alert alert-secondary" role="alert" style="text-align: center;">
                <a href="instructions_list">Update Instructions</a>
            </div>

        </div>
        <div class="col">
            <h3>Today's Instructions {{Date("d-m-Y")}}</h3>

            <?php $instructions = App\InspectorInstructions::all(); ?>

            @foreach($instructions as $instruction)
                @if(!$instruction->isCompleted)
                    <div class="alert alert-success" role="alert" style="text-align: center;">
                        Instruction Details: {{ $instruction->instructions }}
                        <br> 
                        Deadline: {{ $instruction->complete_date }}
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection
