@extends('layout')
<title>Register</title>
<div class="bg-secondary">
    <div class="container justify-content-center d-flex align-items-center h-100">
        <div class="card" data-aos="fade-up">
            <div class="p-5 card-body shadow">
                <div class="text-center py-4">
                    <h1>Register</h1>
                </div>
                @if($errors->any())
			    <div class="alert alert-danger">
				    <ul>
				    @foreach($errors->all() as $error)
					    <li>{{ $error }}</li>
				    @endforeach
				    </ul>
			    </div>
			    @endif
                <form action="{{ url('/admin/saveregister') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name . . ." />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Email address . . ." />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password . . ." />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mb-4">Register</button>
                    </div>
                    <div class="text-center">
                        <p>Already have an account? <a href="{{ url('/admin/login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</div>
<script>
  AOS.init();
</script>