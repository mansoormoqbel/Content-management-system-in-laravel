@extends('layouts.app')

@section('title', "Show Category")




@section('content')
   {{--  <h1>{{ $category->name }}</h1> --}}
    

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <a href="{{Route('tag.index')}}" class="btn btn-primary"> back to tag</a>
                    <div class="card">
                        <div class="card-header">{{ $tag->name }}</div>
        
                        <div class="card-body">
                        
        
                            {{ $tag->slug }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection