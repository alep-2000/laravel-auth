@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Insert a new posts</h2>
                    <a href=" {{ route('admin.posts.index')}} " class="btn btn-secondary btn-sm">Posts</a>
                </div>
                <div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action=" {{ route('admin.posts.store') }} " method="POST">
                        @csrf
                        <div class="class-group">
                            <label class="control-label">Title</label>
                            <input type="text" id="title" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                        </div>
                        <div class="class-group">
                            <label class="control-label">Description</label>
                            <textarea id="content" name="content" class="form-control" placeholder="Content" value="{{ old('description') }}"></textarea>
                        </div>
                        <div class="class-group my-3">
                            <button type="submit" class="btn btn-primary btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection