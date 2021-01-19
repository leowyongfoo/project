@extends('layouts.appSlide')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

</head>
    <body>

     <!--------------------------------------------------- introduction  ----------------------------------------------->
     <div class="container" style="width:101%; max-width: 1920px; position: relative;" >
    <img src="images/background.jpg" alt="Snow" margin="auto" style="width:101%; opacity: 0.2;  margin-top: -24px; margin-left: -30px; position: absolute; height: 600px">
    <h1 style="position: absolute; color:white; top: 8px; left: 16px;">Why Choose Us!</h1>
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

    </div>
    </body>
</html>
@endsection