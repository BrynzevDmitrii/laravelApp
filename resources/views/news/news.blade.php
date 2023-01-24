@extends('layouts.main');
@section('main')
<div class="col-md-8 blog-main">
          <div class="blog-post">
            <h2 class="blog-post-title"> {{ $news['title'] }}</h2>
             <a href="#">{{ $news['author']}}</a>
             <br>
            <hr>
            <br>

            <span>{{ $news['description'] }}</span>
          </div><!-- /.blog-post -->
@endsection
