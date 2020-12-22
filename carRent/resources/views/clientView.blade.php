@extends('layouts.app')
@section('content')
<div class="col-md-12">
            <div class="card border-0">
                 <div class="row">
                @foreach($cars as $car)
                        <div class="col-sm-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$car->name}}</h5>
                                    <a href=" #"><img src="{{ asset('images/') }}/{{$car->image}}" alt="" class="img-fluid" ></a>
                                    
                                    <div class="card-heading">RM{{$car->price}} 
                                    <button style="float:right;" class="btn btn-danger btn-xs">AddTo MyCar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach       
                    </div>
                      
               
                <div>{{ $cars->links()}}</div>  
                
            </div>
         </div>
@endsection    