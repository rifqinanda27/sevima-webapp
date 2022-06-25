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
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @foreach($category as $ctr)
                            <option value="{{ $ctr->id }}">{{ $ctr->course }}</option>
                            @endforeach
                        </select>
                    </div>
					<div class="form-group">
						<label>Image</label>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="preview mx-2">
                                    <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="image" class="form-control">
                                    <img id="file-ip-1-preview" class="p-2 w-100 img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="preview2 mx-2">
                                    <input type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);" name="image2" class="form-control">
                                    <img id="file-ip-2-preview" class="p-2 w-100 img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="preview3 mx-2">
                                    <input type="file" id="file-ip-3" accept="image/*" onchange="showPreview3(event);" name="image3" class="form-control">
                                    <img id="file-ip-3-preview" class="p-2 w-100 img-fluid">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea rows="10px" cols="10px" name="desc" class="form-control" placeholder="Description . . ."></textarea>
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
<script>
function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}

function showPreview2(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-2-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}

function showPreview3(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-3-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}
</script>
@include('backend.layouts.footer')