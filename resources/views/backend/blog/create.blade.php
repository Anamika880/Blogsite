@extends('backend.layouts.master')
@section('title','Create Blog')
@section('body')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Create Blog</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Blog Form </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{route('blog.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputTit1e">{{ __('Category') }}</label>
                                <select name="category_id" class="form-control select2">
                                  @foreach($categories as $category)
                                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Blog Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="exampleInputName1" placeholder="Name" />
                                @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Blog Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputName1" accept=".png, .jpg, .jpeg" />
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> 
                         
                            <div class="form-group">
                                <label for="editor">Content<span class="text-danger">*</span></label>
                                <textarea class="form-control @error('content') is-invalid @enderror ckeditor" name="content" rows="4">{!! old('content') !!}</textarea>
                            </div>
                            
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="editor">Author<span class="text-danger">*</span></label>
                                <input type="text" value="{{ Auth::user()->name }}" class="form-control @error('author') is-invalid @enderror ckeditor" name="author" rows="4">{!! old('author') !!}</textarea>
                            </div>
                            @error('author')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="editor">Publication Date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('publication_date') is-invalid @enderror ckeditor" name="publication_date" rows="4">{!! old('publication_date') !!}</textarea>
                            </div>
                            @error('publication_date')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                            <a href="{{route('blog.index')}}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a> from Bootstrapdash.com</span>
        </div>
    </footer>
</div>
<!-- main-panel ends -->
@endsection