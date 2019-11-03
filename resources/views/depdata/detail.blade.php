@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Department</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name Department : </strong> {{$deperdata->name}}
        </div>
      </div>
      @foreach($deperdata->department_otdels as $department_otdel)
      <div class="col-md-12">

        <div class="form-group">
            <strong>Name Otdels: </strong> {{$department_otdel->name}}
        </div>
      </div>
      @endforeach
      <div class="col-md-12">
        <a href="{{route('department.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
