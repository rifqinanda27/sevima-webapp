@extends('layout')
<title>Edit</title>
@include('backend.layouts.nav')
<div class="container">
	<div class="my-5">
		<div class="card shadow">
			<div class="card-header">
				<h3 class="h3">Edit Post</h3>
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
				<form action="/admin/posts/{{ $blog->id }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" placeholder="Title . . ." value="{{ $blog->title }}">
					</div>
					<div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
							<option value="{{ $blog->category_id }}">{{ $blog->category->course }}</option>
							<option disabled>Select Category</option>
                            @foreach($category as $ctr)
                            <option value="{{ $ctr->id }}">{{ $ctr->course }}</option>
                            @endforeach
                        </select>
                    </div>
					<div class="form-group">
						<label>Image</label>
						<input type="hidden" name="img_old" value="{{ $blog->image }}">
						<input type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea rows="10px" cols="10px" name="desc" class="form-control" placeholder="Description . . .">{{ $blog->desc }}</textarea>
					</div>
					<div class="my-2">
						<button class="btn btn-dark">Edit</button>
						<a href="/admin/posts" class="btn btn-outline-dark">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@include('backend.layouts.footer')