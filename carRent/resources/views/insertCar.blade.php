@extends('layouts.app')
@section('content') 
            <div>
                <div style="text-align:center"> 
                    <form class="subform"  method="post" action="{{ route('addCar') }}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <label for="ID" class="label">Car ID</label>
                        <input type="text" name="ID" id="ID">
                    </p>
                    <p>
                        <label for="name" class="label">Car Name</label>
                        <input type="text" name="name" id="name">
                    </p>
                    <p>
                        <label for="description" class="label">Description</label>
                        <input type="text" name="description" id="description">
                    </p>
                    <select name= "type" id= "type" class="form-control">
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select> 

                    <p>
                        <label for="price" class="label">Price</label>
                        <input type="number" name="price" id="Price">
                    </p>
                    <p>
                        <label for="dayRent" class="label">Day Rent</label>
                        <input type="number" name="dayRent" id="dayRent">
                    </p>

                    <p>
                        <input type="file" class="form-control" name="car-image" value="">
                    </p>
                    <p>
                        <input type="submit" name="insert" value="Insert">
                    </p>
                    </form>
                </div>
            </div>
@endsection