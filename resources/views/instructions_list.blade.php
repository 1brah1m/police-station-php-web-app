@extends('layouts.app')

@section('content')
<div class="container">
    <h3>
        All Instructions
    </h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">
                    #
                </th>
                <th scope="col">
                    Inspector Name
                </th>
                <th scope="col">
                    PS Name
                </th>
                <th scope="col">
                    Case No.
                </th>
                <th scope="col">
                    Instruction Details
                </th>
                <th scope="col">
                    Instructions Date
                </th>
                <th scope="col">
                    Completed Date
                </th>
                <th scope="col">
                    Completed?
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $instructions = App\InspectorInstructions::all(); ?>
            @foreach($instructions as $instruction)
                <tr>
                    <th scope="row">
                        <a href="edit_instruction/{{$instruction->id}}">{{ $instruction->id }}</a>
                    </th>
                    <td>
                        {{ $instruction->police_inspector->name }}
                    </td>
                    <td>
                        {{ $instruction->station }}
                    </td>
                    <td>
                        {{ $instruction->police_case->cr_no }}
                    </td>
                    <td>
                        {{ $instruction->instructions }}
                    </td>
                    <td>
                        {{ $instruction->start_date }}
                    </td>
                    <td>
                        {{ $instruction->complete_date }}
                    </td>
                    <td>
                        @if($instruction->isCompleted)
                            {{ 'YES' }}
                        @else
                            {{ 'NO' }}
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
