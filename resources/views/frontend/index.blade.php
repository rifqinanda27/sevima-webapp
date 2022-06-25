@extends('layout')
<title>Homepage</title>
@include('frontend.layouts.nav')
<section class="my-3 container">
<div class="container py-5">
	<div class="row flex-column-reverse flex-md-row">
		<div class="col-12 col-md-5">
			<h1 class="h1 text-dark fw-bold">Selamat datang di website kami</h1>
			<p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. </p>
			<div class="d-block d-md-none d-lg-block">
				<a href="/tutorial" class="btn btn-dark btn-shp shadow">Tutorial</a>
			</div>
		</div>
		<div class="col-12 col-lg-7">
			<img src="/assets/img/img_hero_section.png" class="img-fluid">
		</div>
	</div>
	<div class="text-center d-none d-md-block d-lg-none">
		<a href="/tutorial" class="btn btn-dark btn-shp shadow">Tutorial</a>
	</div>
</div>
</section>
<section class="category py-5">
	<div class="container">
		<div class="title">
			<h5 class="text-secondary">Kategori</h5>
			<h2 class="fw-bold">Tutorial</h2>
			<p class="text-secondary">Silahkan dibaca . . .</p>
		</div>
		<div class="row">
			@foreach($category as $ctr)
			<div class="col-lg-4">
				<a href="{{ url('/view-category/' . $ctr->id) }}" class="text-decoration-none">
					<div class="card p-3 shadow">
						<div class="card-body">
							<div>
								<p class="h4 text-dark">{{ $ctr->course }}</p>
								<p class="text-secondary">{{ Str::limit($ctr->desc, 20) }}</p>
							</div>
						</div>
					</div>	
				</a>
			</div>
			@endforeach
		</div>
		<div class="my-2">
			{{ $category->links() }}
		</div>
	</div>
</section>
<section class="category2 py-5">
<div class="container">
		<div class="title">
			<h5 class="text-secondary">Kategori</h5>
			<h2 class="fw-bold">Recent Post</h2>
			<p class="text-secondary">Silahkan dibaca . . .</p>
		</div>
		@foreach($blog as $blg)
		<div class="card shadow p-3 my-2">	
			<div class="row card-body">
				<div class="col-5">
					<img src="{{ asset('/storage') }}/{{ $blg->image }}" class="img-fluid w-100">
				</div>
				<div class="col-7">
					<p class="h2"><a class="text-decoration-none text-dark" href="">{{ $blg->title }}</a></p>
					<p>{{ Str::limit($blg->desc, 100) }}</p>
					<a class="text-decoration-none text-muted" href="">read more . . .</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</section>
@include('frontend.layouts.footer')