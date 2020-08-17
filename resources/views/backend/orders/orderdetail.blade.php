@extends('backendtemplate')
@section('content')
<h2>Order Details</h2>

<div class="container">
  <div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th colspan="4" class="text-center">EM Cafe`<br> Chan Mya Tharsi, Mandalay</th>
        </tr>
      </thead>
      <tbody>
        <tr class="border-0">
          <td class="text-center" colspan="4">
            <h6> Casher: {{Auth::user()->name}}<br>
            Voucherno: {{$order->voucherno}}<br>
            Date: {{$order->orderdate}} </h6>
          </td>
          <tr>
            <td>Item Name</td>
            <td>Price</td>
            <td>Qty</td>
            <td>Amount</td>
          </tr>
        </tr>
          @foreach($order->items as $order)
            <tr>
          <td> {{$order->name}}</td>
          <td>{{$order->price}}</td>
          <td>{{$order->pivot->qty}}</td>
          <td>{{$order->pivot->qty*$order->price}}</td>
        </tr>
        @endforeach
           <tr>
             <td colspan="3">Total</td>
             <td>{{$order->total}}</td>
           </tr>
        
      </tbody>
    </table>
  </div>
</div>

@endsection