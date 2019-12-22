@extends('layouts.master')

@section('content')
    @include('includes.message-block')
    <section class = "row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header>
                <h3>Post something</h3>
            </header>
            <form action="{{route('post.create')}}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post"rows="5" placeholder="What's on your mind ?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Post it</button>
                <input type="hidden" value="{{Session::token()}}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Stories from the world.....</h3></header>
            <article class="post">
                <p>I ain't got cash, i ain't got cash, but i got you baby</p>
                <div class="info">
                    Posted by Giwantha on 12 December 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a> |
                </div>
            </article>
            <article class="post">
                <p>I ain't got cash, i ain't got cash, but i got you baby</p>
                <div class="info">
                    Posted by Giwantha on 12 December 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Deleted</a> |
                </div>
            </article>
        </div>
    </section>
@endsection
