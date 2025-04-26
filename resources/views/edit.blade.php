@extends('layouts.master')

@section('content')
    <div class="main-contaner mt-5">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Edit Post</h4>
                <a class="btn btn-success" href="#">Back To Home</a>
            </div>
            
    
            <div class="card-body">
                <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                    
                    @csrf
                    @method('PUT')
                    
                    <img src="{{ asset($post->image) }}" alt="Post Image" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px;">
                    <!-- Image Field -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" >
                    </div>
            



                    <!-- Title Field -->
                    <div class="mb-3">
                        <label for="title" class="form-label"> Title </label>
                        <input type="text" class="form-control" value="{{ $post->title }}" id="title" placeholder="Enter Post Title" name="title">
                    </div>
            
                    <!-- Description Field -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" cols="30" rows="5" value="" class="form-control" placeholder="Write your post description..." name="description">{{ $post->description }}</textarea>
                    </div>
            
                    <!-- Category Select -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select id="category" class="form-select" name="category_id">
                            <option value="" selected disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option {{ $category->id==$post->category_id ?'selected':" " }} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <!-- Submit Button -->
                    <div class="text-end">
                        <button class="btn btn-primary mt-3">Submit</button>
                    </div>
                </form>
            </div>
            

        </div>
    </div>
@endsection