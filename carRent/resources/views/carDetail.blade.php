@extends('layouts.app')
@section('content')  
	<div class="row" align="center">
        @foreach($cars as $car)       
        <div class="col-md-6"><img src="{{ asset('images/') }}/{{$car->image}}" alt="" width="50%" class="img-fluid"> </div>
            <div class="col-md-6">
                <form action="#" method="post">
                       @csrf
                       <h5 class="text-muted">{{$car->name}}</h5>
                    <h5 class="card-title">{{$car->description}}</h5>
                    
                   
                    <div style="height: 100px">RM {{$car->price}} <button type="submit" style="float:right" class="btn btn-danger btn-xs">Add To MyCar</button>
                </form>
            </div>
        @endforeach     
	</div>
@endsection  