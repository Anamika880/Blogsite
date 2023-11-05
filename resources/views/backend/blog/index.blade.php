@extends('backend.layouts.master')
@section('title','All Blogs')
@section('body')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Blogs</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Blogs </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Blogs</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Publication Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $key=>$blog)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$blog->category_name}}</td>
                                        <td>{!! Illuminate\Support\Str::limit($blog->title, 15) !!}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>{{ $blog->publication_date }}</td>
                                        <td>
                                            <a href="{{route('blog.show',$blog->id)}}" class="text-danger"><i class="fa fa-eye"></i></a> &nbsp;
                                            <a href="{{route('blog.edit',$blog->id)}}" class="text-danger"><i class="fa fa-pencil"></i></a> &nbsp;
                                            @can('delete-posts')
                                            <a href="{{route('Blog-Delete',$blog->id)}}" class="text-danger"><i class="fa fa-trash"></i></a> &nbsp;
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
@section('javascript')
<script>
    $(document).ready(function() {
        if ("{{ !empty(session('success')) }}") {
            successMsg("{{ session('success') }}")
        }
        if ("{{ !empty(session('error')) }}") {
            errorMsg("{{ session('error') }}")
        }
    })
</script>
@endsection