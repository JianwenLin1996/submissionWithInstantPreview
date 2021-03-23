@extends('layouts.app')

@section('content')

<div class="container-fluid padding ">
    <div class="d-flex justify-content-center padding mt-5 row">
        <div class="col-12 h3 text-center">Instant Preview</div>

        <div class="col-10 col-md-6 bg-dark text-light rounded p-5 mb-3 mx-3 mx-md-0" >
                <div class="form-group d-flex justify-content-center mb-0">
                  <h1>{{$title}}</h1>
                </div>
                <hr class="mb-4 border-light">

                <div class="form-group form-section d-flex justify-content-center">
                    <img src="{{asset('tempimages/'.$image_path)}}" alt="attached image" class="w-75">
                  </div>

                <div class="form-group form-section">
                <p class="text-justify">Created at : {{$created_at}}</p>
                </div>

                <div class="form-group form-section">
                  <p class="text-justify">{{$description}}</p>
                </div>

                <a href={{route('prefilledhome',['id'=>$id])}} class="btn btn-primary mb-3 mb-md-0">Back</a>
                <a href={{route('finalsubmit',['id'=>$id])}} class="btn btn-primary mb-3 mb-md-0">Submit</a>

        </div>
    </div>
</div>

@endsection
