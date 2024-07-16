@extends('layouts.app')
@section('title', "All Category")
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{Route('category.create')}}" class="btn btn-primary"> add category</a>
            <a href="{{Route('home')}}" class="btn btn-dark"> Back To Home</a>
           
            <div class="card">
                <div class="card-header">{{ __('All Post') }}</div>

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
                            @isset($categories)
                            @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                
                                <td>
                                    <a href="{{Route('category.edit',['id' => $category->id])}}" class="btn btn-success"> Edit category</a>
                                    <a href="{{Route('category.show',['id' => $category->id])}}" class="btn btn-secondary"> Details category</a>
                                    
                                    <a href="{{Route('category.destroy',['id' => $category->id])}}" class="btn btn-danger"> Delete category</a>
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