@extends('layout')
<title>All Categories</title>
@include('frontend.layouts.nav')
<section class="my-3 container">
	<div class="row">
		<div>
			<p class="h3">All Categories</p>
		</div>
		<div class="col-12">
            @foreach($category as $ctr)
			<a href="{{ url('/view-category/' . $ctr->id) }}" class="text-decoration-none">
				<div class="card shadow p-3 my-2">	
					<div class="card-body">
						<div class="text-center">
							<p class="h2 text-dark">{{ $ctr->course }}</p>
							<p class="text-muted" href="{{ url('/view-category/' . $ctr->id) }}">{{ Str::limit($ctr->desc, 20) }}</p>
						</div>
					</div>
				</div>
			</a>
            @endforeach
		</div>
	</div>
</section>
@include('frontend.layouts.footer')