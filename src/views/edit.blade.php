@extends('employees::layout')

@section('content')

<form method="POST" action="{{route('employees.update', ['employee'=> $employee->id])}}">
    @csrf
    @method('PUT')
    
    @include('employees::form')

    <button type="submit" class="btn btn-primary">Update</button>

</form>

@endsection