@extends('frontend.layouts.master')
@section('title','Blog Details')
@section('body')
@php 
    $author = App\Models\User::where('id',$blog->author_id)->first();
@endphp
<section class="banner-another"></section>
<!-- About Section Start -->
<div id="blog_single">
    <div class="container">
        <h3 data-aos="fade-up" data-aos-delay="300">{{$blog->title}}</h3>
        <div class="inner-text" data-aos="fade-up" data-aos-delay="400">
            <h4>{{ $blog->created_at->format('M d Y') }}
                 Posted by <b>{{$author->name}}</b></h4>
        </div>
       
        <div class="row" data-aos="fade-up" data-aos-delay="600">
            <div>
                <img src="{{asset('Blogs/' . $blog->image )}}" alt="about-bg" class="thumbnail image">
                <p>{!! $blog->content !!}</p>
            </div>
            <div class="col-lg-5 col-md-12 col-12 columns-2" style="align-items: center;">
                  <h4>Leave your comment here</h4> <br>
                  <form action="{{route('Store-Comment')}}" method="post">
                    @csrf
                      <div class="col-md-12 form-group">
                          <textarea class="form-control" name="comments" placeholder="Your Comment" rows="5" cols="70" required></textarea>
                      </div>
                      <div class="col-md-12">
                        @if(Auth::check())
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <input type="hidden" name="blog_id" value="{{$blog->id}}">
                          <button type="submit" class="btn btn-primary">Submit Your Comment</button>
                        @else 
                        <a href="{{route('login')}}" class="btn btn-primary">Login to Comment</a>
                        @endif
                      </div>
                      </form>
            </div>
        </div>
        <div class="col-lg-5 col-md-12 col-12 columns-2">
 <br>
 <h6>Comments</h6> <br>
 @foreach($comments=App\Models\Comment::where('blog_id',$blog->id)->where('status','1')->get(); as $comment)
 <p>{{ $comment->created_at->format('M d Y') }} <br>  <b>{{$comment->user_name}}</b> <br> {{$comment->comments}} </p>
 </div>
 @endforeach
        </div>
    </div>
</div>
<!-- About Section End -->
<section class="blog-page-another">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 heading" data-aos="fade-up" data-aos-delay="300">
                <h2>Similar Articles</h2>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="400">
            <div class="col-md-12 col-12">
                <div class="row">
                    @foreach($blogs as $blogz)
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-4">
                                <figure>
                                    <a href="{{route('Blog-Details',$blogz->id)}}"><img src="{{asset('Blogs/' . $blogz->image )}}" width="304" height="228"></a>
                                </figure>
                            </div>
                            <div class="col-md-8 inner-content">
                                <h4><a href="{{route('Blog-Details',$blogz->id)}}">{{$blogz->title}}</a></h4>
                                <p><span>{{ $blogz->created_at->format('M d Y') }}</span>Posted by <b><a href="{{route('Blog-Details',$blogz->id)}}">Admin</a></b></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection