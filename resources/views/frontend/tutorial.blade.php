@extends('layout')
<title>Homepage</title>
@include('frontend.layouts.nav')
<section class="my-3 container">
	<div class="row">
		<div>
			<p class="h3">Recent Article</p>
		</div>
		<div class="col-lg-8">
			<div class="card shadow p-3 my-2">	
				<div class="row card-body">
					<div class="col-6">
						<img src="" class="img-fluid">
					</div>
					<div class="col-6">
						<p class="h4"><a href=""></a></p>
						<p></p>
						<a class="" href="">read more . . .</a>
					</div>
				</div>
			</div>
		</div>
        @include('frontend.layouts.side')
	</div>
</section>
@include('frontend.layouts.footer')