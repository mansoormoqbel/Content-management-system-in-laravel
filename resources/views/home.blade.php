@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
           
            <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <a href="{{Route('tag.index')}}  " class=" card-link">{{ __('Tag') }}</a>
                  </div>
                  <div class="col">
                    <a href="{{Route('category.index')}}  " class=" card-link">{{ __('Category') }}</a>
                  </div>
                  <div class="col">
                    <a href="{{Route('post.index')}}  " class=" card-link">{{ __('Post') }}</a>
                  </div>
                </div>
              </div>
            
            
            
        </div>
    </div>
</div>
@endsection
