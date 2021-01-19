@extends('layouts.app')
@section('content') 
<body style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url('images/Background4.jpg');background-size: 100% 100%; background-size: cover;">

<div class="container"><br><br><br>
	    <div class="row" style="float:right;">
		<form   method="post" action="{!! URL::to('paypal') !!}" >
			@csrf
		    <table class="table table-striped table-light"  Style="outline: 5px groove black;">
				
		        <thead>
		        <tr class="thead-white">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
		            <th>Day-Rented</th>
		            <th>Amount</th>
                    <th>Status</th>
		        </tr>
		    </thead>
		        <tbody>	
				@php
					$total=0;
				@endphp
                @foreach($myorders as $myorder)
		            <tr>
		                <td>{{$myorder->id}}</td>
                        <td><img src="{{ asset('images/') }}/{{$myorder->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$myorder->name}}</h6>		                   
		                </td>
		                
                        <td>{{$myorder->carRented}}</td>
						@php
							$subtotal = $myorder->carRented*$myorder->price;
							$total=$total+$subtotal;
						@endphp

                        <td>{{$subtotal}}</td>
		                <td>
		                    {{ $myorder->paymentStatus }}
		                </td>
		            </tr> 
                @endforeach
				 
				<tr class="thead-dark">
		        <td>&nbsp;</td>
                <td>&nbsp;</td>
		        <td>&nbsp;</td>                   
		        <td>&nbsp;</td>
		        <td><input type="hidden" name="amount" value="{{ $total }}"></td>
                <td><input type="submit" name="paynow" value="Pay Now" class="btn btn-dark"></td>
				
		    </tr>
		</form>					
		        </tbody>			
		    </table>		

	</div>
    </div> 
	</body>
@endsection