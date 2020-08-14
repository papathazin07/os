@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Brand Lists</h2>
		<a href="{{route('brands.create')}}" class="btn btn-success float-right">Add Item</a>
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
				@foreach($brands as $brand)
				@php $i=1; @endphp
				<tr>
					<td>{{$i++}}</td>
					<td>{{$brand->name}}<a href="{{route('brands.show',$brand->id)}}"><span class="badge badge-primary badge-pill"> Detail</span></a></td>
					<td><img src="{{asset($brand->photo)}}"></td>
					<td>
						<a href="{{route('brands.edit',$brand->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('brands.destroy',$brand->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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