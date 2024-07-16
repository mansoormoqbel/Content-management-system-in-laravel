@extends('layouts.app')
@section('title', "All Category")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{Route('tag.create')}}" class="btn btn-primary"> add Tag</a>
            <a href="{{Route('home')}}" class="btn btn-dark"> Back To Home</a>
           
            <div class="card">
                <div class="card-header">{{ __('All Tags') }}</div>

                <div class="card-body">
                    <table class="table ">
                        <thead class="table table-dark">  
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                           
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                            @isset($tags)
                            @foreach ($tags as $tag)
                            <tr>
                                <th scope="row">{{$tag->id}}</th>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->slug}}</td>
                                
                                <td>
                                    <a href="{{Route('tag.edit',['id' => $tag->id])}}" class="btn btn-success"> Edit Tag</a>
                                    <a href="{{Route('tag.show',['id' => $tag->id])}}" class="btn btn-secondary"> Details Tag</a>
                                    
                                    <a href="{{Route('tag.destroy',['id' => $tag->id])}}" class="btn btn-danger"> Delete Tag</a>
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