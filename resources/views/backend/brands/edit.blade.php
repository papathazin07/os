@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Brand Edit (Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('brands.update',$brand->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control" value="{{$brand->name}}">
			</div>
			<div class="form-group">
				<input type="file" name="photo" id="photo" class="form-control-file">
				<span><img src="{{asset($brand->photo)}}" width="100" height="100"></span>
				<input type="hidden" name="oldphoto" value="{{$brand->photo}}">
			</div>

			<input type="submit" name="add" value="Update" class="btn btn-outline-primary">

		</form>
	</div>
@endsection