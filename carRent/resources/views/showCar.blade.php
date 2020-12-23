@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
    

<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
                    <th>Type</th>
		            <th>Price per day</th>
                    <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($cars as $car)
		            <tr>
		                <td>{{$car->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$car->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$car->name}}</h6>
		                    <em class="text-muted">	
                            {{$car->description}}	                       
		                    </em>
		                </td>
		                <td>{{$car->typeID}}</td>
                        <td>{{$car->price}}</td>
		                <td>
		                    <a href="{{ route('editCar', ['id' => $car->id]) }}" class="btn btn-warning"><i class="fas fa-edit">Edit</i></a> | 
		                    <a href="{{ route('deleteCar', ['id' => $car->id]) }}" class="btn btn-danger" onclick="return confirm('Confirm Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		
		<div class="text-center">
        {{ $cars->links() }}
        </div>

	</div>
    </div>

@endsection