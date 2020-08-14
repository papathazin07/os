@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Item Page Filter By brand and subcategory</h2>

	<div class="row">

		{{-- @foreach($brands as $brand) --}}
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="backend/itemimg/1597307402.jpeg" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">Guitar</a>
					</h4>
					<h5>$230</h5>
					<p class="card-text">Good Quality</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info btn-sm">Add to Cart</a>
					<a href="#" class="btn btn-primary btn-sm float-right">Detail</a>
				</div>
			</div>
		</div>
		{{-- @endforeach --}}


	</div>
	<!-- /.row -->
</div>
@endsection