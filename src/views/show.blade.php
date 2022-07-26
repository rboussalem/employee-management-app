@extends('employees::layout')

@section('nav')
<li class="nav-item">
    <a class="nav-link" href="{{route('employees.edit', ['employee' => $employee->id])}}">Edite The Account</a>
</li>
@endsection

@section('content')

<div class="row">
    <div class="col-6 mb-3">
        <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
            <div class="card-header">Personal Information</div>
            <div class="card-body">
                <h5 class="card-title">{{$employee->first_name}} {{$employee->last_name}}</h5>
                <p class="card-text">Card Id : {{$employee->card_id}}</p>
                <p class="card-text">Birth Date : {{$employee->birth_date}}</p>
            </div>
        </div>
    </div>
    
    <div class="col-6 mb-3">
        <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
            <div class="card-header">Professional Informaion</div>
            <div class="card-body">
                <h5 class="card-title">Job Title : {{$employee->job}}</h5>
                <p class="card-text">Job Date : {{$employee->job_date}}</p>
            </div>
        </div>
    </div>

    <div class="col-6 mb-3">
        <div class="card text-white bg-secondary mb-3" style="max-width: 40rem;">
            <div class="card-header">Other</div>
            <div class="card-body">
                <p class="card-text">Adresse : {{$employee->adresse}}</p>
                <p class="card-text">Email : {{$employee->email}}</p>
                
            </div>
        </div>
    </div>
</div>
@endsection
