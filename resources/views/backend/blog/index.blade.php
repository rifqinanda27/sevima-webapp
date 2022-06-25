@extends('layout')
<title>Posts</title>
@include('backend.layouts.nav')
<div class="container py-5">
	<div class="text-center">
		<h1 class="h1 fw-bold">Blog</h1>
	</div>
	<div class="card">
		<div class="card-body">
            <div class="py-2">
                <form action="/blog" method="get" class="d-flex">
                    <input type="text" name="search" class="form-control">
                    <button type="submit" class="btn btn-dark btn-shp">Search</button>
                </form>
            </div>
			<div class="text-center py-2">
				<a href="/admin/posts/create" class="btn btn-dark btn-shp">Create</a>
				<a href="/admin" class="btn btn-outline-dark btn-shp">Back to Dashboard</a>
			</div>
		</div>
		<div class="card-body">
			<div class="py-3">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10px;">No.</th>
							<th>Image</th>
							<th>Title</th>
							<th>Desc</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        @foreach($blogs as $blg)
						<tr>
							<th>{{ $loop->iteration }}</th>
							<td><img width="100px" src="/storage/{{ $blg->image }}"></td>
							<td>{{ $blg->title }}</td>
							<td>{{ Str::limit($blg->desc,40) }}</td>
							<td>
								<a href="{{ url('/admin/posts/')}}/{{ $blg->id }}/edit" class="btn btn-dark btn-shp">Edit</a>
								<form action="/admin/posts/{{ $blg->id }}" method="post">
									@csrf
									@method('DELETE')
									<button class="btn btn-danger btn-shp">Delete</button>
								</form>
							</td>
						</tr>
                        @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@include('backend.layouts.footer')