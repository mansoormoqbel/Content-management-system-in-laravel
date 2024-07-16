@extends('layouts.app')
@section('title', "All Post")
@section('content')
<div class="container">

        
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{Route('post.create')}}" class="btn btn-primary"> add post</a>
            <a href="{{Route('home')}}" class="btn btn-dark"> Back To Home</a>
           
            <div class="card">
                <div class="card-header">{{ __('All Post') }}</div>

                <div class="card-body">
                    <table class="table ">
                        <thead class="table table-dark">  
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">title</th>
                            <th scope="col">contant</th>
                            <th scope="col">meta title</th>
                            <th scope="col">meta description</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                            @isset($posts)
                            @foreach ($posts as $post)
                            <tr>
                                <th scope="row">{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>{{$post->content}}</td>
                                <td>{{$post->meta_title}}</td>
                                <td>{{$post->meta_description}}</td>
                                <td>
                                    <a href="{{Route('post.edit',['id' => $post->id])}}" class="btn btn-success"> Edit Post</a>
                                    <a href="{{Route('post.show',['id' => $post->id])}}" class="btn btn-secondary"> Details Post</a>
                                    
                                    <a href="{{Route('post.destroy',['id' => $post->id])}}" class="btn btn-danger"> Delete post</a>
                                </td>
                              </tr>
                            @endforeach
                                
                            @endisset
                          
                         
                        </tbody>
                    </table>
                   
                </div>
                
            </div>
        </div>
        
    </div>
</div>
 
{{-- <textarea cols="12" rows="12" name="content" id="editor"></textarea>
 --}}
@endsection