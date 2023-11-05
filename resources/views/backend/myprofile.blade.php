@extends('backend.layouts.master')
@section('title','My Profile')
@section('body')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">My Profile</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('Dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> My Profile </li>
                </ol>
            </nav>
        </div>

        <div class="container center" style="width: 400px;">
            <div class="row">
                <div class="col-md-3">
                    <label for="exampleInputName1">Name :-</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" readonly/>
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="exampleInputName1">Email :-</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control" value="{{ Auth::user()->email }}" readonly/>
                </div> 
            </div><br>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">My Authered Posts</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Blog Title</th>
                                        <th>Content</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($myblogs as $key=>$item)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$item->category_name}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{!! Illuminate\Support\Str::limit($item->content, 80) !!}</td>
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
@endsection