@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail of Otdel</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>Name Otdel : </strong> {{$otdeldata->name}}
        </div>
      </div>
      @foreach($otdeldata->otdel_peoples as $otdel_people)
      <div class="col-md-12">

        <div class="form-group">
            <strong>Name of People: </strong> {{$otdel_people->name}}
        </div>
      </div>
      @endforeach
      <div class="col-md-12">
        <a href="{{route('otdel.index')}}" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
@endsection
