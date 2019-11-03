@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Information of People</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name People: </strong> {{$peopledata->name}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Phone numbers: </strong> {{$peopledata->phone_number}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Email: </strong> {{$peopledata->email}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Address: </strong> {{$peopledata->address}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Name of Otdel: </strong> {{$otdeldata->name}}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <strong>Name of Department: </strong> {{$deperdata->name}}
        </div>
      </div>

      <div class="col-md-12">
        <a href="{{route('otdel.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
