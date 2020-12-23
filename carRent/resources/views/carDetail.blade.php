@extends('layouts.app')
@section('content')  
	<div class="row" align="center">
        @foreach($cars as $car)       
        <div class="col-md-6"><img src="{{ asset('images/') }}/{{$car->image}}" alt="" width="50%" class="img-fluid"> </div>
            <div class="col-md-6">
                <form action="{{ route('add.to.car') }}" method="post">
                       @csrf
                    <h5 class="card-title">{{$car->description}}</h5>
                    <div style="height: 100px">Day Rented <input type="number" name="dayRented" id="dayRented" value="1" min="1" max="7"> 

                    <input type="hidden" name="id" id="id" value="{{$car->id}}">
                    <input type="hidden" id="name" name="name" value="{{$car->name}}">
                    <input type="hidden" id="amount" name="amount" value="">
                   
                    <div style="height: 100px">RM {{$car->price}} <button type="submit" style="float:right" class="btn btn-danger btn-xs">Add To MyCar</button>
                </form>
            </div>
        @endforeach     
	</div>
@endsection  