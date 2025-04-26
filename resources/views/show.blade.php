@extends('layouts.master')

@section('content')
    <div class="main-container mt-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Show Post</h4>
                <div class="float-end">
                    <a class="btn btn-success px-3 mx-4" href="{{ route('posts.create') }}">Create</a>
                    <a class="btn btn-warning px-2 mx-4" href="">Trashed</a>
                    <a class="btn btn-primary" href="{{ route('posts.index') }}">Back To Home</a>
                </div>
            </div>
    
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm">
                    <tbody>

                      {{-- <tr>
                        <th scope="row" class="text-center">{{ $post->id }}</th>
                        <td class="text-center"><img src="{{ asset('storage/'.$post->image) }}" alt="Post Image" style="width: 80px; height: 60px; object-fit: cover; border-radius: 5px;"></td>
                        <td class="text-center">{{ $post->title }}</td>
                        <td class="text-center">{{ $post->description }}</td>
                        <td class="text-center">{{ $post->category_id }}</td>
                        <td class="text-center">{{ date('d-m-y', strtotime($post->created_at)) }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-success" href="">Show</a>
                            <a class="btn btn-sm btn-primary px-3" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Delete</a>
                        </td>
                      </tr> --}}


                      <tr>
                        <td>ID</td>
                        <td>{{ $post->id }}</td>
                      </tr>

                      <tr>
                        <td>IMAGE</td>
                        <td class="left"><img src="{{ asset($post->image) }}" alt="Post Image" style="width: 200px; height: 150px; object-fit: cover; border-radius: 5px;"></td>
                      </tr>

                      
                      <tr>
                        <td>TITLE</td>
                        <td>{{ $post->title }}</td>
                      </tr>


                      <tr>
                        <td>DESCRIPTION</td>
                        <td>{{ $post->description }}</td>
                      </tr>

                      <tr>
                        <td>CATEGORY</td>
                        <td>{{ $post->category_id }}</td>
                      </tr>

                    
                      <tr>
                        <td>CREATED AT</td>
                        <td>{{ date('d-m-y', strtotime($post->created_at)) }}</td>
                      </tr>

                    </tbody>


                  </table>
            </div>

        </div>
    </div>
@endsection
