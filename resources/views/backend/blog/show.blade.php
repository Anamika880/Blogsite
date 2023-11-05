@extends('backend.layouts.master')
@section('title', 'Blog Detail')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Blog Detail</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Blog Detail </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputTit1e">{{ __('Category') }}</label>
                                    <select name="category" class="form-control select2">

                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{$category->id == $blog->category_id ? 'selected' : ''}}>{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Blog Title<span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}"
                                        id="exampleInputName1" placeholder="Title" readonly />
                                </div>
                               

                                <div class="form-group">
                                    <label>Upload Blog Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" class="file-upload-default" />
                                    <div class="input-group col-xs-12">
                                        <img src="{{asset('Blogs/' . $blog->image )}}" alt="" height="100px" width="100px">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="editor">Content<span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('content') is-invalid @enderror ckeditor" name="content" rows="4">{!! $blog->content !!}</textarea>
                                </div>


                                <div class="form-group">
                                    <label for="editor">Author<span class="text-danger">*</span></label>
                                    <input type="text" value="{{ $blog->author }}" class="form-control @error('author') is-invalid @enderror ckeditor" name="author" rows="4">
                                </div>

                                <div class="form-group">
                                    <label for="editor">Publication Date<span class="text-danger">*</span></label>
                                    <input type="text" value="{{ $blog->publication_date }}" class="form-control @error('publication_date') is-invalid @enderror ckeditor" name="publication_date"
                                        rows="4">
                                </div>
                                <a href="{{ route('blog.index') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
                    2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from
                    Bootstrapdash.com</span>
            </div>
        </footer>
    </div>
    <!-- main-panel ends -->
@endsection
