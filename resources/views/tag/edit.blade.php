@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="{{Route('tag.index')}}" class="btn btn-primary"> back to tag</a>
           
            <div class="card">
                <div class="card-header">{{ __('Add tag') }}</div>

                <div class="card-body">
                    <form   action="{{Route('tag.update',['id'=>$tag->id])}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                       
                        <div class="mb-3">
                          <label for="name" class="form-label"><strong>Name</strong>  </label>
                          <input type="text" class="form-control" value="{{$tag->name}}" name="name"  id="name">
                        </div>
                        
                       
                        <div class="mb-3">
                            <label for="slug" class="form-label"> <strong>slug</strong></label>
                            <input type="text" class="form-control" value="{{$tag->slug}}" id="slug" name="slug">
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