<nav class="navbar navbar-dark bg-dark navbar-expand-lg shadow p-3">
	<div class="container">
		<!-- <div class="navbar-brand">
			<a class="navbar-brand" href="#">Navbar</a>
		</div> -->
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
	      <span class="navbar-toggler-icon"></span>
	    </button>
		<div class="collapse navbar-collapse" id="navbarNav">	
			<ul class="navbar-nav me-auto">
				<li class="nav-item"><a class="nav-link h5 fw-bold text-light" href="{{ url('/admin/') }}">Dashboard</a></li>
				<li class="nav-item"><a class="nav-link h5 fw-bold text-light" href="{{ url('/admin/posts') }}">Posts</a></li>
				<li class="nav-item"><a class="nav-link h5 fw-bold text-light" href="{{ url('/admin/category') }}">Category</a></li>
			</ul>
			<form action="{{ url('/admin/logout') }}" method="post" class="mt-3">
				@csrf
				<button type="submit" class="btn btn-danger">Logout</button>
			</form>
		</div>
	</div>
</nav>