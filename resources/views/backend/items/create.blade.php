@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Item Create (Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="codeno">Code No</label>
				<input type="text" name="codeno" id="codeno" class="form-control">
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="file" name="photo" id="photo" class="form-control-file">
			</div>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="form-group my-3">
						<input type="number" name="price" class="form-control" placeholder="Unit Price">
					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="form-group my-3">
						<input type="number" name="discount" class="form-control" placeholder="Discount Price">
					</div>
				</div>
			</div>

			<div class="form-group row">
				<label>Brand:</label>
				<select class="form-control" name="brand">
					@foreach($brands as $brand)
					<option value="{{$brand->id}}">{{$brand->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group row">
				<label>Subcategory:</label>
				<select class="form-control" name="subcategory">
					@foreach($subcategories as $subcategory)
					<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control" name="item_des"></textarea>
			</div>
			<input type="submit" name="add" value="+ Add" class="btn btn-outline-primary">

		</form>
	</div>
@endsection