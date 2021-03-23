@extends('layouts.app')

@section('content')

<div class="container-fluid padding ">
    <div class="d-flex justify-content-center padding mt-5 row">
        <div class="col-12 h3 text-center mt-5">Thanks for your submission</div>

                <a href={{route('home')}} class="btn btn-primary mb-3 mb-md-0">Submit another Form</a>


    </div>
</div>

@endsection
