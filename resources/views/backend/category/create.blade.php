@extends('layout')
<title>Create</title>
@include('backend.layouts.nav')
<div class="container">
	<div class="my-5">
		<div class="card shadow">
			<div class="card-header">
				<h3 class="h3">Add Category</h3>
			</div>	
			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif	
			<div class="card-body my-2">
				<form action="/admin/category" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Course Name</label>
						<input type="text" name="course" class="form-control" placeholder="course . . .">
					</div>
					<div class="my-2">
						<button class="btn btn-dark">Add</button>
						<a href="/admin/category" class="btn btn-outline-dark">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('backend.layouts.footer')