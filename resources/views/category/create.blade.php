@extends('template')
@section('content')
<div class="container">

	<div class="row">
		<div class="col-lg-3">

			<h2>Page Create Form</h2>

			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="name" name="name" class="form-control">
		</div>

		
			<div class="form-group">
			<input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
		</div>
			</form>
			</div>
		</div>
	</div>
	

@endsection