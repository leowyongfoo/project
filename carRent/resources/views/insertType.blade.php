@extends('layouts.app')
@section('content') 
            <div>
                    <div style="text-align:left"> 
                    <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
       
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">

                    <form class="subform"  method="post" action="{{ route('addType') }}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <h1 Style="text-align:center;">Insert Type</h1><br>
                    <div class="container p-4">
                    <p>
                        <label for="ID" class="label">Type ID: </label>
                        <input type="text" name="ID" id="ID" class="form-control" placeholder="Please Enter Type ID......">
                    </p>
                    <p>
                        <label for="name" class="label">Name: </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Please Enter Brand Name......">
                    </p>
                    <p>
                        <input type="submit" name="insert" value="Insert" style="float:right;" class="btn btn-success">
                        
                    </p>
                    </form>
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    </div>
                </div>
                
            </div>
@endsection
    