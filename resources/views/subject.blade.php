@extends('layout.app')

@section('content')
<form method="POST" action="{{route('subject.save')}}">
    @csrf
<div class="card">
  <div class="card-header">
    <h1>Clinical trial</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Migraine headaches</h5>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="mb-3 row">
        <label for="firstName" class="col-sm-2 col-form-label">First Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="firstName" id="firstName" value="" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="dob" class="col-sm-2 col-form-label">Date of Birth:</label>
        <div class="col-sm-3">
            <input type="date" class="form-control" name="dob" id="dob" value="" max={{today()}} value="" required>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputFrequency" class="col-sm-2 col-form-label">Frequency:</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="inputFrequency" name="frequency">
                <option selected value="">Please select frequency with which subject experiences migraine headaches</option>
                <option value="monthly">Monthly</option>
                <option value="weekly">Weekly</option>
                <option value="daily">Daily</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row" id="dailyCat" style="display:none">
        <label for="inputDailyFrequencyCat" class="col-sm-2 col-form-label">Daily frequency category</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="inputDailyFrequencyCat" name="dailyFrequencyCat">
                <option selected value="">Please select daily frequency with which subject experiences migraine headaches</option>
                <option value="1">1-2</option>
                <option value="3">3-4</option>
                <option value="5">5+</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</form>
@endsection