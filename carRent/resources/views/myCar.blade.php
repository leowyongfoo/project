@extends('layouts.app')
@section('content') 
<body style="background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url('images/Background3.jpg');background-size: 100% 100%; background-size: cover;" >
	

@if(Session::has('deleted'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('deleted')}}
        </div>       
@endif 

<script>
function TotalAmount() {
	
	var prices = document.getElementsByName('price[]');
	
	var total=0;
	
	var cboxes = document.getElementsByName('item[]');    
	var len = cboxes.length;	    
	for (var i=0; i<len; i++) {        
		if(cboxes[i].checked){	//calculate if checked		
			subtotal=parseFloat(prices[i].value)+parseFloat(total);	
			total=subtotal;	
		}				
	}
	document.getElementById('amount').value=total.toFixed(2);
}
</script>   

<div class="container" style="text-align: center;">
	    <div class="row">
        <form   method="post" action="{{ route('create.order') }}" >
            @csrf
		    <table class="table table-striped" style="color:white; width:1100px;">
		        <thead>
		        <tr class="thead-striped ">
		            <th>ID</th>
                    <th>Image</th>
		            <th>Name</th>
		            <th>Day Rented</th>
		            <th>Amount</th>
                    <th>Action</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($mycars as $mycar)
		            <tr>
		                <td><input type="checkbox" name="item[]" value="{{$mycar->cid}}" onchange="TotalAmount()"/></td>
                        <td style="color:white"><img src="{{ asset('images/') }}/{{$mycar->image}}" alt="" width="50"></td>
		                <td style="max-width:300px">
		                    <h6>{{$mycar->name}}</h6>	                    
		                </td>
                        <td>{{$mycar->carRent}}</td>
                        
						@php
							$subtotal = $mycar->carRent * $mycar->price;
						@endphp

                        <td>{{$subtotal}}</td>
						<input type="hidden" value="{{$subtotal}}" name="price[]" id="price[]"/>
		                <td>
		                    <a href="{{ route('deleteMyCar', ['id' => $mycar->cid]) }}" class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>
		            </tr> 
                @endforeach

                <tr class="thead-dark">
		            <td>&nbsp;</td>
                    <td>&nbsp;</td>
		            <td>&nbsp;</td>                   
		            <td style="color: white;"><h3>Total</h3></td>
		            <td><input type="text" name="amount" id="amount" value="" class="form-control" placeholder="0.00"></td>
                    <td><input type="submit" name="checkout" value="Checkout" class="btn btn-light"></td>
		        </tr>
				</form>
		        </tbody>
		    </table>
		
		<div class="text-center">
			{{ $mycars->links() }}
        </div>

	</div>
    </div>
	</body>
@endsection