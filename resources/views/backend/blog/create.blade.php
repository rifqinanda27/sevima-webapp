@extends('layout')
<title>Create</title>
@include('backend.layouts.nav')
<div class="container">
	<div class="my-5">
		<div class="card shadow">
			<div class="card-header">
				<h3 class="h3">Add Post</h3>
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
				<form action="/admin/posts" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" placeholder="Title . . .">
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea rows="10px" cols="10px" name="desc" class="form-control" placeholder="Description . . ."></textarea>
					</div>
					<div class="form-group">
						<label>Date</label>
						<input type="date" name="datetime" class="form-control">
					</div>
					<div class="my-2">
						<button class="btn btn-dark">Add</button>
						<a href="/admin/posts" class="btn btn-outline-dark">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('backend.layouts.footer')