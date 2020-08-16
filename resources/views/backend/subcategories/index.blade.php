@extends('backendtemplate')
@section('content')
	<div class="container-fluid">
		<h2 class="d-inline-block">Subcategory Lists</h2>
		<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Add Subcategpry</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($subcategories as $subcategory)
				@php $i=1; @endphp
				<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->name}} <a href="{{route('subcategories.show',$subcategory->id)}}"><span class="badge badge-primary badge-pill"> Detail</span></a></td>
					<td>{{$subcategory->category->name}}</td>
					<td>
						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
						<a href="#" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection