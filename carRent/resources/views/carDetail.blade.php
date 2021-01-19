@extends('layouts.app')
@section('content')  
            <div>   
                <div style="text-align:center"> 
                <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
            </div>

            @foreach($cars as $car)
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0" Style="outline: 5px groove black;">
            <img src="{{ asset('images/') }}/{{$car->image}}" alt="" width="50%" class="img-fluid"> 
            <form action="{{ route('add.to.car') }}" method="post">

                       @csrf
                    <h5 class="card-title"><strong> Car Name: </strong>{{$car->name}}</h5>
                    <h5 class="card-title"><strong> Type: </strong>{{$car->typeID}}</h5>
                    <h5 for="ID" class="label"><strong> Description: </strong></h5>   
                    <h5 class="card-title">{{$car->description}}</h5>
                    <h5 for="ID" class="label"><strong> Price Per day: </strong>RM {{$car->price}}</h5>   
                    <h5 class="card-title"><strong> Day Rented: </strong> <input type="number" name="dayRented" id="dayRented" value="1" min="1" max="7"> </h5>
                    
                    <input type="hidden" name="id" id="id" value="{{$car->id}}">
                    <input type="hidden" id="name" name="name" value="{{$car->name}}">
                    <input type="hidden" id="amount" name="amount" value="">

                    <p style="text-align:center">
                            <input type="submit" name="insert" value="Add To MyCar" class="btn btn-success">
                    </p>
                </form>
                </div>
        @endforeach
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    </div>
                </div>
                
            </div>
@endsection