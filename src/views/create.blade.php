@extends('employees::layout')

@section('content')

<form method="POST" action="{{route('employees.store')}}">
    @csrf
    
    @include('employees::form')

    <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection
