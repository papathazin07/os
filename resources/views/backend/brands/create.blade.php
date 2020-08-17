@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Brand Create (Form)</h2>
		{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif --}}
		<form method="post" action="{{route('brands.store')}}" enctype="multipart/form-data">
			@csrf
		
			<div class="form-group">
				
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
				@if(!empty($errors->first()))
				<h6 class="alert text-danger">Brand name field is required!</h6>
				@endif
	
			</div>
			<div class="form-group">
				<input type="file" name="photo" id="photo" class="form-control-file">
				@if(!empty($errors->first()))
				<h6 class="alert text-danger">Brand name field is required!</h6>
				@endif
			</div>

			<input type="submit" name="add" value="+ Add" class="btn btn-outline-primary">

		</form>
	</div>
@endsection