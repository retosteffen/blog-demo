@extends('laravel-blog::layout')

@section('title')
{{ config('laravel-blog.blog_name') }}
@endsection
@section('meta')
  <meta name="description" content="{{ config('laravel-blog.blog_name') }}">
  <meta name="keywords" content="blog">
  <meta name="author" content="{{ config('laravel-blog.blog_name') }}">
  <link rel="canonical" href="{{URL::current()}}">
  <meta property="og:locale" content="{{config('laravel-blog.locale')}}">
  <meta property="og:title" content="{{ config('laravel-blog.blog_name') }}">
  <meta property="og:type" content="website">
<meta property="og:description" content="{{ config('laravel-blog.blog_description') }}">
  <meta property="og:url" content="{{URL::current()}}">
  <meta property="og:site_name" content="{{config('laravel-blog.blog_name')}}">
  <meta property="article:publisher" content="{{config('laravel-blog.facebook_name')}}">
  <meta property="article:author" content="{{config('laravel-blog.facebook_name')}}">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="">
  <meta name="twitter:title" content="{{ config('laravel-blog.blog_name') }}">
  <meta name="twitter:site" content="{{config('laravel-blog.twitter_handle')}}">
  <meta name="twitter:creator" content="{{config('laravel-blog.twitter_handle')}}">



@endsection


@section('content')
  <h1>{{ config('laravel-blog.blog_name') }}</h1>
  <hr>

  @include('laravel-blog::posts_loop')

@endsection
