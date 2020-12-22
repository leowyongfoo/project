@extends('layouts.app')

@section('content') 
            <div class="container" >
                <div class="row" style="text-align:right">
                    
                    <form class="form-group"  method="post" action="{{ route('updateCar') }}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3>Edit Product</h3>
                    </p>
                    @foreach($cars as $car)

                    <p>
                        <label for="ID" class="label">Car ID</label>
                        <input type="text" name="ID" id="ID" value="{{$car->id}}" readonly>
                    </p>
                    <p>
                        <label for="name" class="label">Name</label>
                        <input type="text" name="name" id="name" value="{{$car->name}}">
                    </p>
                    <p>
                        <label for="description" class="label">Description</label>
                        <input type="text" name="description" id="description" value="{{$car->description}}">
                    </p>
                    <div class="form-group">
                    <select name= "type" id= "type" class="form-control">
                        @foreach($types as $type)
                        <option  value="{{ $type->id }}"
                        @if($car->typeID==$type->id)
                        selected                    
                        @endif
                        >{{ $type->name }}</option>
                        @endforeach
                    </select> 
                    </div>
                    <p>
                        <label for="price" class="label">Price</label>
                        <input type="number" name="price" id="Price" value="{{$car->price}}">
                    </p>
                    <p>
                        <label for="quantity" class="label">Day Rented</label>
                        <input type="number" name="dayRent" id="dayRent" value="{{$car->dayRent}}">
                    </p>

                    <p>
                        <input type="file" class="form-control" name="car-image" value="">
                    </p>

                    @endforeach
                    <p>
                        <input type="submit" name="edit" value="edit">
                    </p>
                    </form>
                    
                </div>
            </div>
@endsection


