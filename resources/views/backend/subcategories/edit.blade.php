@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2>Subcategory Edit (Form)</h2>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
		
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control" value="{{$subcategory->name}}">
			</div>
			
			<div class="form-group row">
				<label>Category:</label>
				<select class="form-control" name="subcategory">
					@foreach($categories as $category)
					<option value="{{$subcategory->id}}"
						@if($category->id == $subcategory->category_id)
							{{'selected'}}
						@endif
						>{{$subcategory->name}}</option>
					@endforeach
				</select>
			</div>

			<input type="submit" name="add" value="Update" class="btn btn-outline-primary">

		</form>
	</div>
@endsection