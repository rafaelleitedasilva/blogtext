@extends('layouts.master')

@section('title')
    - Home
@endsection

@section('content')


<!-- Start posts-entry -->
<section class="section posts-entry">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12">
                <h2 class="posts-entry-title">Ultimas postagens</h2>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-12">
                <div class="row g-3">
                    <div class="col-md-12 content-postagens">
                        <div class="foto-usuario">
                            <img class="avatar" src="{{Vite::asset('resources/images/avatar/avatar.jpg')}}" alt="">
                        </div>
                        <div class="blog-entry">
                            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas. <a href="/post/1">Read More</a></p>
                            <p>
                                <span class="date">Apr. 14th, 2022</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 content-postagens">
                        <div class="foto-usuario">
                            <img class="avatar" src="{{Vite::asset('resources/images/avatar/avatar.jpg')}}" alt="">
                        </div>
                        <div class="blog-entry">
                            <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel voluptas. <a href="/post/1">Read More</a></p>
                            <p>
                                <span class="date">Apr. 14th, 2022</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12 text-center">
                <a href="#" class="read-more">Carregar mais</a>
            </div>
        </div>
    </div>
</section>
<!-- End posts-entry -->
@endsection
