@extends('template')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<h2>Page Edit Form</h2>

			@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<h1 class="mt-4">Category Edit Form</h1>
	<form method="post" action="{{route('category.update',$categoryid->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name:</label>
			<input type="name" name="name" value="{{$categoryid->name}}">
		</div>
		<div class="form-group">
			<input type="submit" name="btnsubmit" class="btn btn-primary" value="update">
		</div>
			</form>
			</div>
		</div>
	</div>

@endsection