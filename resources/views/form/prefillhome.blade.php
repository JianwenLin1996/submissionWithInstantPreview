@extends('layouts.app')

@section('content')

<div class="container-fluid padding ">
    <div class="d-flex justify-content-center padding mt-3">
        <div class="w-50 bg-dark text-light rounded p-5">
            <form action={{route('store')}} method="POST" id="af" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="unique-key" id="unique-key" value={{old('unique-key')}}>
                <div class="form-group form-section">
                  <label for="title"><h2>Title</h2></label>
                  <input type="text" class="form-control @error('title') border-warning @enderror" name="title" id="title" placeholder="Subject title" value={{old('title')}}>
                  @error('title')
                  <div class="text-sm text-warning">
                      <i>Title is required.</i>
                  </div>
                  @enderror
                </div>

                <div class="form-group form-section">
                  <label for="description"><h2>Description</h2></label>
                  <textarea form="af" class="form-control @error('description') border-warning @enderror" rows="5" name="description" id="description" placeholder="Subject description">{{old('description')}}</textarea>
                  @error('description')
                  <div class="text-sm text-warning">
                      <i>Description is required.</i>
                  </div>
                  @enderror
                </div>

                <div class="form-group form-section">
                    <label for="img"><h2>Attach Image</h2></label>
                    <input type="file" class="form-control-file @error('img') border-warning @enderror" name="img" id="img"  accept="image/*">
                    @error('img')
                  <div class="text-sm text-warning">
                      <i>Image is required.</i>
                  </div>
                  @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>

@endsection
