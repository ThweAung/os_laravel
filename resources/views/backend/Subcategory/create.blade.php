@extends('backend.master')
@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Subcategory Create Form</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">

			<form action="{{route('subcategories.store')}}" method="POST" enctype="multipart/form-data">
				@csrf
				

				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name">
					</div>
				</div>

				
				<div class="form-group row">
					<div class="col-sm-10">
						<label for="name" class="col-sm-2 col-form-label">SubCategory</label>
						<select class="form-control form-control-md" id="inputCategory" name="category">
							<optgroup label="Choose category">
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</optgroup>
						</select>
					</div>
				</div>
				<br>
				<input type="submit" name="create" value="Create" class="btn btn-primary">
			</form>
		</div>
	</div>
</div>
@endsection