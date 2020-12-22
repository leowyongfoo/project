@extends('layouts.app')
@section('content') 

<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		          <tr class="thead-dark">
		             <th>ID</th>
                     <th>Name</th>
                     <th>Action</th>
                   </tr>
                </thead>

		        <tbody>	
                @foreach($types as $type)
		            <tr>
		                <td>{{$type->id}}</td>
		                <td style="max-width:300px">
		                    <h6>{{$type->name}}</h6>
		                </td>
		               
		                <td> 
		                    <a href="{{ route('deleteType', ['id' => $type->id]) }}" class="btn btn-danger" onclick="return confirm('Confirm Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach
		        </tbody>
		    </table>
		
		

    </div>
</div>

@endsection