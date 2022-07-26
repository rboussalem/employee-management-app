<div class="row mt-5 mb-3">
    <div class="col-4">
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input class="form-control" name="first_name" id="first_name" type="text" value="{{old('first_name', $employee->first_name?? null)}}">
        </div>
    </div>
    
    <div class="col-4">
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input class="form-control" name="last_name" id="last_name" type="text" value="{{old('last_name', $employee->last_name?? null)}}">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label for="birth_date">Birth Date</label>
            <input class="form-control" name="birth_date" id="birth_date" type="text" value="{{old('birth_date', $employee->birth_date?? null)}}">
        </div>
    </div>
</div>


<div class="row my-3">
    <div class="col-9">
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input class="form-control" name="adresse" id="adresse" type="text" value="{{old('adresse', $employee->adresse?? null)}}">
        </div>
    </div>
</div>


<div class="row my-3">
    <div class="col-3">
        <div class="form-group">
            <label for="card_id">Card Id</label>
            <input class="form-control" name="card_id" id="card_id" type="text" value="{{old('card_id', $employee->card_id?? null)}}">
        </div>
    </div>
    <div class="col-9">
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" name="email" id="email" type="text" value="{{old('email', $employee->email?? null)}}">
        </div>
    </div>
</div>

<div class="row my-3">
    <div class="col-4">
        <div class="form-group">
            <label for="job">Job</label>
            <input class="form-control" name="job" id="job" type="text" value="{{old('job', $employee->job?? null)}}">
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label for="job_date">Job Date</label>
            <input class="form-control" name="job_date" id="job_date" type="text" value="{{old('job_date', $employee->job_date?? null)}}">
        </div>
    </div>
</div>