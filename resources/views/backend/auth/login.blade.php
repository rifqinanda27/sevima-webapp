@extends('layout')
<title>Login</title>
<div class="bg-secondary">
    <div class="container justify-content-center d-flex align-items-center h-100">
        <div class="card">
            <div class="p-5 card-body shadow">
                <div class="text-center py-4">
                    <h1>Login</h1>
                </div>
                <form>
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example1">Email address</label>
                    <input type="email" id="form2Example1" class="form-control" placeholder="Email address . . ." />
                  </div>
                
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control" placeholder="Password . . ." />
                  </div>
                  <!-- Submit button -->
                  <div class="text-center">
                      <button type="button" class="btn btn-dark mb-4">Sign in</button>
                  </div>
                
                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>Not a member? <a href="#!">Register</a></p>
                  </div>
                </form>
            </div>
        </div>  
    </div>
</div>