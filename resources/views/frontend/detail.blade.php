@extends('frontendtemplate')
@section('content')
<div class="col-lg-9">
	<h2>Item Page Filter By brand and subcategory</h2>

	<div class="card mb-3 border-0" style="max-width: 540px;">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="{{asset($item->photo)}}" class="card-img-top w-100" alt="..." >
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<p>Product Name:</p>
						</div>
						<div class="col-md-6">
							<p>{{$item->name}}</p>
						</div>
						<hr>
						
						<div class="col-md-6">
							<p>product Codeno:</p>
						</div>
						<div class="col-md-6">
							<p>{{$item->codeno}}</p>
						</div>
						<hr>
						
						<div class="col-md-6">
							<p>Product Price:</p>
						</div>
						<div class="col-md-6">
							<p>{{$item->price}}</p>
						</div>
						<hr>
						
						<div class="col-md-6">
							<p>Product Discount:</p>
						</div>
						<div class="col-md-6">
							<p>{{$item->discount}}</p>
						</div>
						<hr>
						
						<div class="col-md-6">
							<p>Product Brand:</p>
						</div>
						<div class="col-md-6">
							<p>OIS</p>
						</div>
						<hr>
						
						<div class="col-md-6">
							<p>Subcategory:</p>
						</div>
						<div class="col-md-6">
							<p>Electric Guitar</p>
						</div>
						<hr>
						
						<div class="col-md-6">
							<p>Description:</p>
						</div>
						<div class="col-md-6">
							<p>{{$item->discount}}</p>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info btn-sm order" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}" data-brandname="{{$item->brand_id}}" data-subcategory="{{$item->subcategory_id}}" data-description="{{$item->description}}">Add to Cart</a>
					<a href="#" class="btn btn-primary btn-sm float-right">Detail</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.row -->
</div>
@endsection
@section('script')
	<script type="text/javascript" src="frontend/js/script.js">
		
	</script>
@endsection