@extends('backendtemplate')
@section('content')

<div class="container-fluid">
		<h2 class="d-inline-block">Order Lists</h2>
		{{-- <a href="#" class="btn btn-success float-right">Add Item</a> --}}
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Voucher No</th>
					<th>Order date</th>
					<th>Total</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1; @endphp
				@foreach($orders as $order)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$order->voucherno}}</td>
					<td>{{$order->total}}</td>
					<td>{{$order->note}}</td>
					<td>
						<a href="#" class="btn btn-warning">Confirm</a>
						<a href="#" class="btn btn-danger">Detail</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection