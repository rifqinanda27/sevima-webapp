@extends('layout')
<title>{{ $category->course }}</title>
@include('frontend.layouts.nav')
<section class="my-3 container">
	<div class="row">
		<div>
			<p class="h3">Sort by Category : {{ $category->course }}</p>
		</div>
		<div class="col-lg-8">
            @foreach($blog as $blg)
			<div class="card shadow p-3 my-2">	
				<div class="row card-body">
					<div class="col-6">
						<img src="{{ asset('/storage/' . $blg->image) }}" class="img-fluid">
					</div>
					<div class="col-6">
						<p class="h2"><a class="text-decoration-none text-dark" href="{{ url('/show-post/' . $blg->id) }}">{{ $blg->title }}</a></p>
						<p>{{ Str::limit($blg->desc ,125) }}</p>
						<a class="text-decoration-none text-muted" href="{{ url('/show-post/' . $blg->id) }}">read more . . .</a>
					</div>
				</div>
			</div>
            @endforeach
		</div>
		<div class="col-lg-4">
			<form action="{{ url('/view-category/' . $category->id) }}">
				<div class="d-flex my-2 shadow">
				<input type="text" name="search" class="form-control">
					<button class="btn btn-dark">Search</button>
				</div>
			</form>
			<div class="my-3">
                <p class="h3">Category</p>
                <hr>
                @foreach($categories as $ctr)
                <div class="d-flex">
                    <p><a class="text-secondary text-decoration-none h5" href="{{ url('/view-category/' . $ctr->id ) }}">{{ $ctr->course }}</a></p>
                </div>
                @endforeach
            </div>
            <div class="my-3">
                <p class="h3">Random Post</p>
                <hr>
                @foreach ($random as $rdm)
                <div class="card shadow my-2">	
                    <div class="row card-body">
                        <div class="col-6">
                            <img src="{{ asset('/storage/' . $rdm->image) }}" class="img-fluid">
                        </div>
                        <div class="col-6">
                            <p class="h4"><a class="text-decoration-none text-dark" href="{{ url('/show-post/' . $rdm->id) }}">{{ $rdm->title }}</a></p>
                            <a class="text-decoration-none text-muted" href="{{ url('/show-post/' . $rdm->id) }}">read more . . .</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
		</div>
	</div>
</section>
@include('frontend.layouts.footer')