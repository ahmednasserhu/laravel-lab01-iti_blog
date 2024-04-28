@extends('layouts.app')

@section('body')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                {{ $post['title'] }}
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post['body'] }}</p>
                <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}" class="img-fluid">
            </div>
            <div class="card-footer">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to All Posts</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Delete Post
                  </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this post
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
