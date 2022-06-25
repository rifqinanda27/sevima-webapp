@extends('layout')
<link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css') }}">
<title>{{ $blog->title }}</title>
@include('frontend.layouts.nav')
<section class="my-3 container">
	<div class="row">
		<div class="col-lg-8">
			<div class="card shadow p-3 my-2">	
				<div class="card-body">
                    <h1 class="text-center py-4">{{ $blog->title }}</h1>
					<div class="">
						
					</div>
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide"><img src="{{ asset('/storage/' . $blog->image) }}" class="img-fluid w-100"></li>
                                <li class="splide__slide"><img src="{{ asset('/storage/' . $blog->image2) }}" class="img-fluid w-100"></li>
                                <li class="splide__slide"><img src="{{ asset('/storage/' . $blog->image3) }}" class="img-fluid w-100"></li>
                            </ul>
                        </div>
                    </div>
					<div class="py-4">
						<p>{{ $blog->desc }}</p>
					</div>
                    <div>
                        <a href="{{ url('/posts') }}" class="btn btn-dark">Back</a>
                    </div>
				</div>
			</div>
		</div>
        <div class="col-lg-4">
            <div class="d-flex my-2 shadow">
            <input type="text" name="search" class="form-control">
                <button class="btn btn-dark">Search</button>
            </div>
            <div class="my-3">
                <p class="h3">Category</p>
                <hr>
                @foreach($category as $ctr)
                <div class="d-flex">
                    <p><a class="text-decoration-none h5" href="{{ url('/view-category/' . $ctr->id ) }}">{{ $ctr->course }}</a></p>
                </div>
                @endforeach
            </div>
            <div class="my-3">
                <p class="h3">Earlier Post</p>
                <hr>
                <div class="card shadow my-2">	
                    <div class="row card-body">
                        <div class="col-6">
                            <img src="" class="img-fluid">
                        </div>
                        <div class="col-6">
                            <p class="h4"><a href=""></a></p>
                            <a class="" href="">read more . . .</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
<script>
var splide = new Splide( '.splide', {
  type  : 'fade',
  rewind: true,
} );

splide.mount();
</script>
@include('frontend.layouts.footer')