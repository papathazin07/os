@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Subcategory Create (Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
			@csrf
		
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-group row">
				<label>Category:</label>
				<select class="form-control" name="category">
					@foreach($categories as $category)
					<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>

			<input type="submit" name="add" value="+ Add" class="btn btn-outline-primary">

		</form>
	</div>
@endsection