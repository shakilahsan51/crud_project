@extends('layouts.master')

@section('content')
<div class="main-content mt-5">
    <div class="card border border-2 shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center bg-light">
            <h5 class="mb-0">All Posts</h5>
            <div>
                <a class="btn btn-success btn-sm me-2" href="{{ route('posts.create') }}">Create</a>
                <a class="btn btn-warning btn-sm" href="{{ route('posts.trashed') }}">Trashed</a>
            </div>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 10%">Image</th>
                        <th scope="col" style="width: 20%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td><img src="{{ asset($post->image) }}" alt="" width="80px" class="img-thumbnail"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{$post->description}}</td>
                        <td>{{ $post->category->name}}</td>
                        <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                        <td>
                            <div class="d-flex flex-wrap justify-content-center">
                                <a class="btn btn-success btn-sm me-1 mb-1" href="{{ route('posts.show',$post->id) }}">Show</a>
                                <a class="btn btn-primary btn-sm me-1 mb-1" href="{{ route('posts.edit', $post->id) }}">Edit</a>
                            
                                <form action="{{ route('posts.destroy',$post->id) }}" method="POST" class="mb-1 me-1">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
