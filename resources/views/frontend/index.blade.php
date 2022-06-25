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
				<a href="/tutorial" class="btn btn-dark btn-shp">Tutorial</a>
			</div>
		</div>
		<div class="col-12 col-lg-7">
			<img src="/assets/img/img_hero_section.png" class="img-fluid">
		</div>
	</div>
	<div class="text-center d-none d-md-block d-lg-none">
		<a href="/tutorial" class="btn btn-dark btn-shp">Tutorial</a>
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
			<div class="col-lg-4">
				<div class="card p-3 shadow">
					<div class="card-body">
						<div>
							<p class="h4">Kategori 1<a href=""></a></p>
							<p class="text-secondary">Tentang bla bla bla</p>
							<a class="" href="">read more . . .</a>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-4">
				<div class="card p-3 shadow">
					<div class="card-body">
						<div>
							<p class="h4">Kategori 1<a href=""></a></p>
							<p class="text-secondary">Tentang bla bla bla</p>
							<a class="" href="">read more . . .</a>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-4">
			<div class="card p-3 shadow">
				<div class="card-body">
					<div>
						<p class="h4">Kategori 1<a href=""></a></p>
						<p class="text-secondary">Tentang bla bla bla</p>
						<a class="" href="">read more . . .</a>
					</div>
				</div>
				</div>	
			</div>
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
		<div class="card shadow p-3 my-2">	
			<div class="row card-body">
				<div class="col-5">
					<img src="assets/img/img_banner_start_first_order_01.png" class="img-fluid">
				</div>
				<div class="col-7">
					<p class="h2"><a class="text-decoration-none text-dark" href="">Title</a></p>
					<p>Bla bla bla</p>
					<a class="" href="">read more . . .</a>
				</div>
			</div>
		</div>
	</div>
</section>
@include('frontend.layouts.footer')