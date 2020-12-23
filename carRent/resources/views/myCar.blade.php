@extends('layouts.app')
@section('content') 
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

<div class="container">
	    <div class="row">
        <form   method="post" action="#" >
            @csrf
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
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
                        <td><img src="{{ asset('images/') }}/{{$mycar->image}}" alt="" width="50"></td>
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
		            <td>Total</td>
		            <td><input type="text" name="amount" id="amount" value=""></td>
                    <td><input type="submit" name="checkout" value="Checkout"></td>
		        </tr>
				</form>
		        </tbody>
		    </table>
		
		<div class="text-center">
			{{ $mycars->links() }}
        </div>

	</div>
    </div>

@endsection