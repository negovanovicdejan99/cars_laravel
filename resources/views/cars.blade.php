@extends('layouts.app')
@section('title', 'Cars')

@section('content')
  <h1>Cars</h1>
  <div class="row">
    <div class="col-md-4">
      <h3>Producer</h3>
    </div>
    <div class="col-md-4">
      <h3>Name</h3>
    </div>
    <div class="col-md-4">
      <h3>Number of doors</h3>
    </div>
  </div>

  @foreach ($cars as $car)
    <div class="row">
      <div class="col-md-4">
      <a href="/cars/{{$car->id}}">{{$car->producer}}</a>
      </div>
      <div class="col-md-4">
            <a href="/cars/{{$car->id}}">{{$car->title}}</a>
      </div>
      <div class="col-md-4">
        {{$car->number_of_doors}} doors
      </div>
    </div>
  @endforeach
@endsection