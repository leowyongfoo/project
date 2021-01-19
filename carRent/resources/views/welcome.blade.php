@extends('layouts.appslide')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<style>
</style>
</head>
    <body>

     <!--------------------------------------------------- introduction  ----------------------------------------------->
     <div class="container" style="width:101%; max-width: 1920px; position: relative;" >
    <img src="images/background.jpg" alt="Snow" margin="auto" style="width:101%; opacity: 0.2;  margin-top: -24px; margin-left: -30px; position: absolute; height: 600px">
    <h1 style="position: absolute; color:white; top: 8px; left: 16px;">Why Choose Us??</h1>
    <img src="images/5Year.jpg" alt="5" style="position: absolute; top: 108px; color:white; left: 230px; height: 140px; border-radius: 50%;">
    <h4 style="position: absolute; top: 258px; color:white; left: 200px;">5 Years Of Experience</h4>
    <img src="images/5Star.jpg" alt="5" style="position: absolute; top: 98px; color:white; left: 610px; height: 180px; border-radius: 50%;">
    <h4 style="position: absolute; top: 258px; color:white; left: 630px;">5 Star Service</h4>
    <img src="images/Guarantee.jpg" alt="5" style="position: absolute; top: 108px; color:white; left: 1035px; height: 140px; border-radius: 50%;">
    <h4 style="position: absolute; top: 258px; color:white; left: 1000px;">Best Fare Guanrateen</h4>
    <img src="images/Direct.jpg" alt="5" style="position: absolute; top: 358px; color:white; left: 180px; height: 140px;">
    <h4 style="position: absolute; top: 508px; color:white; left: 200px;">You can direct booking</h4>
    <img src="images/fast.jpg" alt="5" style="position: absolute; top: 348px; color:white; left: 610px; height: 180px;">
    <h4 style="position: absolute; top: 508px; color:white; left: 600px;">Book Within Minutes</h4>
    <img src="images/comfort.jpg" alt="5" style="position: absolute; top: 340px; color:white; left: 1000px; height: 180px;">
    <h4 style="position: absolute; top: 508px; color:white; left: 1030px;">Comfortable car</h4>


    <footer class="text-white text-center text-lg-start"  style="background-color: #3c3c3c; width:101%; margin-top: -24px; margin-left: -30px; position: absolute; height: 600p; top: 602px;">

  <div class="container p-4">

    <div class="row">

      <div class="col-lg-5 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Content</h5>

        <p>
          This program is design by Southern University's student and 
          use to modify the Car Booking System. This program is just in demo because we noob so need more time to design the better one.
        </p>
      </div>

      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h5>Group Member</h5>

        <ul class="list-unstyled">
          <li>
            <a class="text-white" Style="text-decoration: none;">Ong Jia Kang</a>
          </li>
          <li>
            <a class="text-white" Style="text-decoration: none;">Leow Yong Foo</a>
          </li>
          <li>
            <a class="text-white" Style="text-decoration: none;">Ng Jian Chong</a>
          </li>
          <li>
            <a class="text-white" Style="text-decoration: none;">Leong Cheng Yang</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
        <h5>Student ID</h5>

        <ul class="list-unstyled">
          <li>
            <a class="text-white" Style="text-decoration: none;">D190293C</a>
          </li>
          <li>
            <a class="text-white" Style="text-decoration: none;">D190152C</a>
          </li>
          <li>
            <a class="text-white" Style="text-decoration: none;">D190343C</a>
          </li>
          <li>
            <a class="text-white" Style="text-decoration: none;">D190442C</a>
          </li>
        </ul>
      </div>

    </div>

  </div>

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    ©2021Copyright:
    <a class="text-white">Suc_Student</a>
  </div>

</footer>
    </div>
    </body>
    
</html>
@endsection
