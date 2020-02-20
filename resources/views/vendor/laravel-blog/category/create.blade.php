@extends('laravel-blog::layout')

@section('title')
  {{__('laravel-blog::laravel-blog.create_category')}} - {{ config('laravel-blog.blog_name') }}
@endsection

@section('content')
  <h1>{{__('laravel-blog::laravel-blog.create_category')}}</h1>

  <form method="POST" action="{{ config('laravel-blog.adminroute') }}/categories/">
    @csrf
    <div class='form-group'>
      <label for="name">{{__('laravel-blog::laravel-blog.name')}}</label>
      <input type="text" name="name" value="{{old('name')}}">
    </div>
    <div class='form-group'>
      <button type="submit" class='btn btn-primary btn-sm'>{{__('laravel-blog::laravel-blog.save_category')}}</button>
    </div>
    <div class='form-group'>
      <a href="{{url()->previous()}}" class='btn btn-secondary btn-sm'>{{__('laravel-blog::laravel-blog.cancel')}}</a>
    </div>

      @include('laravel-blog::errors')
    </form>
  @endsection
