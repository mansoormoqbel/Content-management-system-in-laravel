@extends('layouts.app')

@section('title', "Show Category")




@section('content')
   {{--  <h1>{{ $category->name }}</h1> --}}
    

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <a href="{{Route('category.index')}}" class="btn btn-primary"> back to category</a>
                    <div class="card">
                        <div class="card-header">{{ $category->name }}</div>
        
                        <div class="card-body">
                        
        
                            {{ $category->slug }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection