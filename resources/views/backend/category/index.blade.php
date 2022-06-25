@extends('layout')
<title>Posts</title>
@include('backend.layouts.nav')
<div class="container py-5">
	<div class="text-center">
		<h1 class="h1 fw-bold">Category</h1>
	</div>
	<div class="card">
		<div class="card-body">
            <div class="py-2">
                <form action="{{ url('/admin/category') }}" method="get" class="d-flex">
                    <input type="text" name="search" class="form-control">
                    <button type="submit" class="btn btn-dark btn-shp">Search</button>
                </form>
            </div>
			<div class="text-center py-2">
				<a href="{{ url('/admin/category/create') }}" class="btn btn-dark btn-shp">Create</a>
				<a href="{{ url('/admin') }}" class="btn btn-outline-dark btn-shp">Back to Dashboard</a>
			</div>
		</div>
		<div class="card-body">
			<div class="py-3">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width: 10px;">No.</th>
							<th>Course</th>
							<th>Description</th>
							<th style="width: 300px">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($category as $ctr)
						<tr>
							<th>{{ $loop->iteration }}</th>
							<td>{{ $ctr->course }}</td>
							<td>{{ Str::limit($ctr->desc, 50) }}</td>
							<td>
								<a href="{{ url('/admin/category/' . $ctr->id . '/edit') }}" class="btn btn-dark btn-shp">Edit</a>
								<form action="{{ url('/admin/category/' . $ctr->id) }}" method="post">
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