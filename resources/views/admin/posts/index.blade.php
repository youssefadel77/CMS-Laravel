@extends('layouts.admin')
@section('content')

    <h1>All Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Category-id</th>
            <th>User-Name</th>
            <th>Photo-id</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created-At</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->category_id}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400' }}"
                             alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                </tr>

            @endforeach
        @endif
        </tbody>
    </table>



    {{--<div class="box">--}}
    {{--<article class="media">--}}
    {{--<div class="media-content">--}}
    {{--<div class="post-user">--}}
    {{--<div class="col-sm-1">--}}
    {{--<img src="http://bulma.io/images/placeholders/128x128.png" alt="Image"--}}
    {{--class=" img-responsive img-circle  " width="100px"  >--}}
    {{--</div>--}}

    {{--<p>--}}
    {{--<strong>John Smith</strong><br>--}}
    {{--<small>@johnsmith</small> <br>--}}
    {{--<small>31m</small><br>--}}
    {{--<br>--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div>--}}
    {{--<p>--}}
    {{--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div class="images">--}}
    {{--<figure class="image is-64x64">--}}
    {{--<img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">--}}
    {{--</figure>--}}
    {{--</div>--}}
    {{--<nav class="level is-mobile">--}}
    {{--<div class="level-left">--}}
    {{--<a class="level-item">--}}
    {{--<span class="icon is-small"><i class="fa fa-reply"></i></span>--}}
    {{--</a>--}}
    {{--<a class="level-item">--}}
    {{--<span class="icon is-small"><i class="fa fa-retweet"></i></span>--}}
    {{--</a>--}}
    {{--<a class="level-item">--}}
    {{--<span class="icon is-small"><i class="fa fa-heart"></i></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</nav>--}}
    {{--</div>--}}
    {{--</article>--}}
    {{--</div>--}}
@endsection
