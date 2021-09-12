@extends('voyager::master')
@section('content')
    <div class="col-md-12">
        <div class="panel panel-bordered">
            <div class="panel-body">
                <form action="{{route('page.update',$item->id)}}" method="POST" enctype='multipart/form-data'>
                    @csrf 
                    <div class="form-group col-md-12 ">                                    
                        <label class="control-label" for="name">Meta Key</label>
                        <input type="text" class="form-control" name="meta_key" value="{{$item->meta_key}}">                        
                    </div>
                    <div class="form-group  col-md-12 ">                                    
                        <label class="control-label" for="name">Meta Description</label>
                        <textarea class="form-control" name="meta_description" rows="5">{{$item->meta_description}}</textarea>                        
                    </div>
                        <div class="form-group col-md-9" >
                            <label class="control-label" for="name">Banner Text</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$item->title}}">
                        </div>                                
                        <div class="form-group col-md-3">
                            <label class="control-label" for="name">Banner Image</label>
                            <img src="{{asset('storage/pages/September2021/' . $item->image)}}" style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                            <input type="file" name="image">
                        </div>  
                    <div class="form-group col-md-12 ">                                   
                        <label class="control-label" for="name">Content Title</label>
                        <input type="text" class="form-control" name="content_title" value="{{$item->content_title}}">                        
                    </div>
                    <div class="form-group  col-md-12 ">                                    
                        <label class="control-label" for="name">Content Heading</label>
                        <textarea class="form-control richTextBox" name="content_heading" id="richtextcontent_heading">
                            {{ old('content_heading', $item->content_heading ?? '') }}
                        </textarea>
                        @push('javascript')
                            <script>
                                $(document).ready(function() {
                                    var additionalConfig = {
                                        selector: 'textarea.richTextBox[name="content_heading"]',
                                    }
                                    $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})
                                    tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
                                });
                            </script>
                        @endpush                      
                    </div>
                    <div class="form-group  col-md-12 ">                                    
                        <label class="control-label" for="name">Content Description</label>
                        <textarea class="form-control richTextBox" name="content_description" id="richtextcontent_description">
                            {{ old('content_description', $item->content_description ?? '') }}
                        </textarea>
                        @push('javascript')
                            <script>
                                $(document).ready(function() {
                                    var additionalConfig = {
                                        selector: 'textarea.richTextBox[name="content_description"]',
                                    }
                                    $.extend(additionalConfig, {!! json_encode($options->tinymceOptions ?? '{}') !!})
                                    tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
                                });
                            </script>
                        @endpush                     
                    </div>
                    <input type="submit" value="save" class="btn btn-success btn-add-new">
                </form>
            </div>
        </div>
    </div>
@stop