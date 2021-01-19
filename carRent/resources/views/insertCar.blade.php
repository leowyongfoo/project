@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:left"> 
                   

    <div class="row">

      <div class="col-md-4">
       
    </div>

      <div class="col-md-4 ">

            <form class="subform"  method="post" action="{{ route('addCar') }}" enctype="multipart/form-data">
                @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <h1 Style="text-align:center;">Insert Car</h1>
                    <div class="container p-4">
                        <p>
                            <label for="ID" class="label">Car ID:</label>
                            <input type="text" name="ID" id="ID" class="form-control" placeholder="Please insert Car ID">
                        </p>
                        <p>
                            <label for="name" class="label">Car Name:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Please insert Car Name">
                        </p>
                        <p>
                            <label for="description" class="label">Description:</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Introduce to the car......">
                        </p>
                        <p>
                        <label for="description" class="label">Brand:</label>
                        
                        <select name= "type" id= "type" class="form-control" placeholder="Please Select Car brand">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select> 
                        </p>
                        <p>
                            <label for="price" class="label">Price /per day:</label>
                            <input type="number" name="price" id="Price" class="form-control" placeholder="Please Key in the price /per hour">
                        </p>
                        
                        <p>
                            <label for="price" class="label">Photo (for the car):</label><br>
                            <input type="file" name="car-image" placeholder="">
                        </p>
                        <p style="text-align:center">
                            <input type="submit" name="insert" value="Insert" class="btn btn-secondary">
                        </p>
                        </form>
        </div>

        <div class="col-md-4 ">
        </div>

    </div>

  </div>
@endsection