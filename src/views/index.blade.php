@extends('employees::layout')

@section('content')
    {{-- Header of table   --}}
    <div>

    </div>
    {{-- liste of companies --}}
    <div class="table-responsive">
        @if (count($employees) === 0)
            <div class="alert alert-dark" role="alert">
                There is no companies plz <a href="{{route('employees.create')}}" class="alert-link">Create a new Company</a>.
            </div>
        @else
            <table class="table table-striped table-bordered table-xl" cellspacing="0"
            width="100%">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Card Id</th>
                    <th scope="col">Job</th>
                    <th scope="col">show</th>
                    <th scope="col">edit</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <th scope="row">{{$employee->id}}</th>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->card_id}}</td>
                            <td>{{$employee->job}}</td>
                            <td><a class="nav-link" href="{{route('employees.show', ['employee' => $employee->id])}}">show</a></td>
                            <td><a class="nav-link" href="{{route('employees.edit', ['employee' => $employee->id])}}">edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection