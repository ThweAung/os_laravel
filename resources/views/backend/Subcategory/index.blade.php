@extends('backend.master')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mx-1 mb-0 text-gray-800">Subcategories List</h1>
			<a href="{{route('subcategories.create')}}" class="mx-1 btn btn-info">Add New</a>		
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
			<thead class="table-dark">
				<tr>
					<th>No</th>
					<th>SubCategoryName</th>
					<th>CategoryName</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php  $i=1; @endphp
				@foreach($subcategories as $subcategory)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$subcategory->name}}</td>
					<td>{{($subcategory->category->name)}}</td>
					<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-warning">Edit</a>
						<a href="" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection