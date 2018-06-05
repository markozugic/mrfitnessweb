@extends('layouts.app')

@section('content')
    <a href="/clients" class="btn btn-default">Go Back</a>
    <a href="/pdf/{{$client->id}}" class="btn btn-default" target="_blank">Generate pdf</a>
  <a href="/clients/calculate/{{$client->id}}" class="btn btn-info">Calculate BMI/BMR</a>
    <h1>{{$client->name}}</h1>   
    <hr>
    <small>Created on {{$client->created_at}}</small>
    <hr>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Height</th>
            <th scope="col">Weight</th>
            <th scope="col">Gender</th>
            <th scope="col">Sports/Activity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row">{{$client->id}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->age}}</td>
            <td>{{$client->height}}</td>
            <td>{{$client->weight}}</td>
            <td>{{$client->gender}}</td>
            <td>{{$client->activity}}</td>
          </tr>
        </tbody>
      </table>
      @if(!empty($client->client_index))
      <h1>BMI/BMR</h1>
      @endif
      <hr>
      @foreach($client->client_index as $index)
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">BMI</th>
            <th scope="col">BMR</th>
            <th scope="col">Date measured</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <th scope="row">{{$index->id}}</th>
            <td>{{$index->bmiIndex}}</td>
            <td>{{$index->bmrIndex}}</td>
            <td>{{$index->created_at}}</td>
          </tr>
        </tbody>
      </table>
      @endforeach
@endsection



