@extends('layout')
<title>Dashboard</title>
@include('backend.layouts.nav')
<section class="container my-5">
    <div class="my-4">
        <h1>Dashboard</h1>
        <div class="py-3">
            <p>Lorem ipsum dolor sit amet consectetur,</p>
            <p> Id excepturi, velit in ratione magni, </p>
            <p> adipisicing elit.saepe recusandae ipsam quam non quas</p>
            <p>reiciendis cumque alias magnam asperiores ut amet vel neque nulla.</p>
        </div>
    </div>
    <div>
        <p class="h3">Total row :</p>
        <p class="text-muted">Total all of the row table . . .</p>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card shadow p-3">
                <div class="card-body">
                    <h4>Total Category : </h4>
                </div>
            </div>
        </div>
    </div>
</section>
@include('backend.layouts.footer')