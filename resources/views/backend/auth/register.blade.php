@extends('layout')
<title>Register</title>
<div class="bg-secondary">
    <div class="container justify-content-center d-flex align-items-center h-100">
        <div class="card">
            <div class="p-5 card-body shadow">
                <div class="text-center py-4">
                    <h1>Register</h1>
                </div>
                <form>
                  <div class="form-outline mb-4">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Email address . . ." />
                  </div>
                  <div class="form-outline mb-4">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Password . . ." />
                  </div>
                  <div class="text-center">
                        <button type="button" class="btn btn-dark mb-4">Register</button>
                  </div>
                  <div class="text-center">
                    <p>Already have an account? <a href="#!">Login</a></p>
                  </div>
                </form>
            </div>
        </div>  
    </div>
</div>