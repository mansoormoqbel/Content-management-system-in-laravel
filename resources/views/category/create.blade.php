@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{Route('category.index')}}" class="btn btn-primary"> back to category</a>
            {{-- <a href="{{Route('create.post')}}" class="btn btn-primary"> add post</a> --}}
           
            <div class="card">
                <div class="card-header">{{ __('Add category') }}</div>

                <div class="card-body">
                    <form   action="{{Route('category.store')}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                       
                        <div class="mb-3">
                          <label for="name" class="form-label"><strong>Name</strong>  </label>
                          <input type="text" class="form-control" name="name"  id="name">
                        </div>
                        
                       
                        <div class="mb-3">
                            <label for="slug" class="form-label"> <strong>slug</strong></label>
                            <input type="text" class="form-control" id="slug" name="slug">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
{{-- <textarea cols="12" rows="12" name="content" id="editor"></textarea>
 --}}
@endsection