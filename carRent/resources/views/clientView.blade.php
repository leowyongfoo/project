@extends('layouts.app')
@section('content')
<body  style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('images/Background1.jpg'); background-size: cover;" >
    

@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 

<div class="col-md-12">

            <div class="container p-4">
                 <div class="row">
                @foreach($cars as $car)
                        <div class="col-sm-4">
                            <div class="card h-100 card bg-dark text-white" Style="outline: 5px groove black;">
                                <div class="card-body">
                                    <a href="{{ route('car.detail', ['id' => $car->id]) }}"><img src="{{ asset('images/') }}/{{$car->image}}" alt="" class="img-fluid" ></a>
                                    <h5 class="card-title">Car: {{$car->name}}</h5>
                                    
                                    <h5 class="card-title">Type: {{$car->typeID}}</h5>
                                     
                                    <h5 class="card-title">Description: {{$car->description}}</h5>
                                    <div> <h5 class="card-title">RM: {{$car->price}} /Day </h5>
                                    <a href="{{ route('car.detail', ['id' => $car->id]) }}"><button style="float:right;" class="btn btn-danger btn-xs">View More</button></a>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach 
                   
                    </div>
               
                <div>{{ $cars->links()}}</div>  
                
            </div>
         </div>
         </body>
@endsection    