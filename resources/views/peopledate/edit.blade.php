@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit People</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('people.update', $peodata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        
        <div class="col-md-12">
          <strong>Name people:</strong>
          <input type="text" name="name" class="form-control" placeholder="Name Otdel">
        </div>
        <div class="col-md-12">
          <strong>Phone number</strong>
          <input type="text" name="phone_number" class="form-control" placeholder="Phone number">
        </div>
        <div class="col-md-12">
          <strong>email</strong>
          <input type="text" name="email" class="form-control" placeholder="email">
        </div>
        <div class="col-md-12">
          <strong>address</strong>
          <input type="text" name="address" class="form-control" placeholder="address">
        </div>
        <br>
        <br>
        <div class="col-md-12">
          <strong>Chose Otdel :</strong>
          <select class="form-control" name="otdel_id">
            @foreach ($deperdatas as $deperdata)    
              <optgroup label = "{{$deperdata->name}}"></optgroup>
              @foreach ($otdeldates as $otdeldata)    
                    @if($otdeldata->department_id == $deperdata->id)
                       <option>{{$otdeldata->name}}</option>
                    @endif
              @endforeach
            @endforeach
          </select>
        </div> 
        <br>
        <br>
        <div class="col-md-12">
          <a href="{{route('people.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>

      </div>
    </form>
  </div>
@endsection
