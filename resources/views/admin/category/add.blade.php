
@extends('layouts.admin');



@section('content')
<div class="card">
	<div class="card-header">
		<h1>Add Category</h1>
	</div>
	<div class="card-body">
     <form action="{{url('insert-category')}}" method="POST">
     	@csrf
     	<div class="row">
     		<div class="col-md-6 mb-3">
     			<label for="">Name</label>
     			<input type="text" class="form-control" name="name">
	</div>
		<div class="col-md-6 mb-3">
     			<label for="">Slug</label>
     			<input type="text" class="form-control" name="slug">
	</div>
		<div class="col-md-6 mb-3">
     			<label for="">Description</label>
     			<textarea rows="3" class="form-control" name="description">
     			</textarea>
	</div>
	<div class="col-md-6 mb-3">
     			<label for="">Status</label>
     			<input type="checkbox" class="form-control" name="status">
	</div>
	<div class="col-md-12 mb-3">
     			<label for="">Meta Title</label>
     			<input type="text" class="form-control" name="meta_title">
	</div>
	<div class="col-md-12 mb-3">
     			<label for="">Meta keywords</label>
     			<textarea rows="3" class="form-control" name="meta_keywords">

     			</textarea>
	</div>
     <div class="col-md-12 mb-3">
                    <label for="">Meta description</label>
                    <textarea rows="3" class="form-control" name="meta_description">

                    </textarea>
     </div>
	
<div class="col-md-12">
	<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>


@endsection



