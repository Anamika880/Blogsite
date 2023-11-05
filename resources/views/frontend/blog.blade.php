@extends('frontend.layouts.master')
@section('title','Blog')
@section('body')
<section class="banner-another ">
    <!-- Banner section Start-->
</section>
<section class="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12 heading" data-aos="fade-up" data-aos-delay="300">
                <h2>Some useful Articles for you!</h2>
                <h3>Good for all men, women and childrens</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-12" data-aos="fade-up" data-aos-delay="400">
                <div class="row">
                    @foreach($blogs as $blog)
                    @php 
                    $author = App\Models\User::where('id',$blog->author_id)->first();
                    @endphp
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-4">
                                <figure>
                                    <a href="{{route('Blog-Details',$blog->id)}}"><img src="{{asset('Blogs/' . $blog->image )}}" width="304" height="228"></a>
                                </figure>
                            </div>
                            <div class="col-md-8 inner-content">
                                <h4><a href="{{route('Blog-Details',$blog->id)}}">{{$blog->title}}</a></h4>
                                <p><span>{{ $blog->created_at->format('M d Y') }}</span>Posted by <b><a href="{{route('Blog-Details',$blog->id)}}">{{$author->name}}</a></b></p>
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