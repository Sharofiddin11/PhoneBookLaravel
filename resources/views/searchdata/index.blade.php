@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="/search" method="post" role="search">
            @csrf
            <div class="input-group" style = "left: 40px;">
                <input type="text" class="form-control" name="q" placeholder="Search users"> 
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            Search
                        </button>
                    </span>

                  <select name = "ST1" class="form-control" style = "width: 300px; height: 35px;">
                        <option>Chose otdels on department</option>
                        @foreach ($deperdatas as $deperdata)    
                          <optgroup label = "{{$deperdata->name}}:"></optgroup>
                          @foreach ($otdeldates as $otdeldata)    
                                @if($otdeldata->department_id == $deperdata->id)
                                   <option>{{$otdeldata->name}}</option>
                                @endif
                          @endforeach
                        @endforeach
                  </select>
            </div>
        </form>
        <div class="container">
            @if(isset($details))
            <h2>Search result:</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->phone_number}}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->address}}</td>
                          <td><a class="btn btn-sm btn-success" href="{{route('people.show',$user->id)}}">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>
  </div>
@endsection
