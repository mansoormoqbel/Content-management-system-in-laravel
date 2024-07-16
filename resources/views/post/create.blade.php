@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <a href="{{Route('create.post')}}" class="btn btn-primary"> add post</a> --}}
           
            <div class="card">
                <div class="card-header">{{ __('All Post') }}</div>

                <div class="card-body">
                    <form   action="{{Route('post.store')}}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        {{-- 'title', 'content', 'meta_title', 'meta_description' --}}
                        <div class="mb-3">
                          <label for="content" class="form-label"><strong>Content</strong> </label>
                          <textarea  name="content" id="editor" ></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="title" class="form-label"><strong>Title</strong>  </label>
                          <input type="text" class="form-control" name="title"  id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="meta_title" class="form-label"> <strong>  Meta Title</strong></label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title">
                        </div>
                       
                        <div class="mb-3">
                            <label for="meta_description" class="form-label"> <strong>Meta Description</strong></label>
                            <input type="text" class="form-control" id="meta_description" name="meta_description">
                        </div>
                        {{-- 
                        'categories','tags'
                        --}}
                        <div class="form-group">
                            <label for="categories">Categories</label>
                            <select class="selectpicker form-control" multiple data-live-search="true" name="categories[]" id="categories">
                                @isset($categories)
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                @endisset
                               
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags</label>
                            <select class="selectpicker form-control" multiple data-live-search="true" name="tags[]" id="tags">
                                @isset($tags)
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                @endisset
                               
                            </select>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" id="is_draft" name="is_draft">
                            <label class="form-check-label" for="is_draft">
                                Draft
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="published_at">Publish Date and Time</label>
                            <input type="datetime-local" class="form-control" id="published_at" name="published_at">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Post</button>
                        
                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 
{{-- <textarea cols="12" rows="12" name="content" id="editor"></textarea>
 --}}
@endsection