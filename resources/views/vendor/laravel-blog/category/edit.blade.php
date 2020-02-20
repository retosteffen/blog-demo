@extends('laravel-blog::layout')

@section('title')
  {{__('laravel-blog::laravel-blog.edit_category')}} - {{ config('laravel-blog.blog_name') }}
@endsection

@section('content')
  <h1>{{__('laravel-blog::laravel-blog.edit_category')}}</h1>
  <form method="POST" action="{{ config('laravel-blog.adminroute') }}/categories/{{$category->slug}}">
    @csrf
    @method('PATCH')
    <div class='form-group'>
      <label for="name">{{__('laravel-blog::laravel-blog.name')}}</label>
      <input type="text" name="name" value="{{$category->name}}">
    </div>
    <div class='form-group'>
      <button class='btn btn-primary btn-sm' type="submit">{{__('laravel-blog::laravel-blog.edit_category')}}</button>
    </div>
    <div class='form-group'>
      <a class='btn btn-secondary btn-sm' href="{{url()->previous()}}">{{__('laravel-blog::laravel-blog.cancel')}}</a>
    </div>
    @include('laravel-blog::errors')
  </form>
@endsection
