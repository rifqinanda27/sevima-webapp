@extends('layout')
<title>Homepage</title>
@include('frontend.layouts.nav')
<section class="my-3 container">
	<div class="row">
		<div class="">
			<div class="card shadow p-3 my-2">	
				<div class="row card-body">
					<p class="h1 text-center fw-bold my-3">Tujuan website ini dibuat</p><hr>
                    <div class="my-4 h5">
                        <p>Website ini dibuat untuk mengedukasi orang</p>
                        <p>tentu saja ini website diperuntukan</p>
                        <p>untuk semua orang dong</p>
                        <p>atau mungkin untuk orang yang lagi nyati bacaan aja</p>
                    </div>
					<p class="h1 text-center fw-bold my-3">Apa saja yang ada di dalam website ini</p><hr>
                    <div class="my-4 h5">
                        <p>disini disediakan berbagai</p>
                        <p>macam bahasa pemrogaman untuk dipelajari</p>
                        <p>disini juga ada berbagai macam berita menarik</p>
                        <p>dan juga info info mengenai pelajaran,</p>
                        <p>lomba, dan lain lain</p>
                    </div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('frontend.layouts.footer')