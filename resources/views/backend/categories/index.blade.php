@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Category Lists</h2>
		<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add Categpry</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Photo</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
				 @php $i=1; @endphp
				<tr>
					<td>{{$i++}}</td>
					<td>{{$category->name}} <a href="{{route('categories.show',$category->id)}}"><span class="badge badge-primary badge-pill"> Detail</span></a></td>
					<td><img src="{{asset($category->photo)}}" width="100" height="100"></td>
					<td>
						<a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
							@csrf
							@method('DELETE')
							<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection