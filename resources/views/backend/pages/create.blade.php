@extends('layouts.backend')
@section('page_header','Pages')
@section('style')
    <script type="text/javascript" src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
@endsection
@section('page_toolbar')

@endsection
@section('content')

    <div class="content flex-column-fluid" id="kt_content">
        <div class="card card-custom">
            <div class="card-header flex-wrap border-0 pt-6 pb-0">
                <div class="card-title">
                    <h3 class="card-label">Create New Page
                    </h3>
                </div>

            </div>
            <div class="card-body">
                <form action="{{route('admin.pages.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for=""> Page Title </label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="">Page Language</label>
                        <select class="form-control" name="locale" id="">
                            <option value="">Please Select Language</option>

                            @foreach($languages as $lang)
                                <option value="{{$lang->locale}}"> {{$lang->name}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Page Content</label>

                        <textarea name="content" class="form-control" id="editor" cols="30" rows="20" ></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary form-control"> Create </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection


@section('script')
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $("#kt_datatable").dataTable();
    </script>
    <script>

        /**
         * Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
         * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
         */



        function initSample(){

            var editor =  CKEDITOR.replace( 'editor' ,{
                // extraPlugins: 'print,format,font,colorbutton,justify,uploadimage,flash,html5video,html5audio',
                {{--uploadUrl:"{{route('provider.upload_live')}}?_token={{csrf_token()}}",--}}
                // filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
                {{--filebrowserUploadUrl: "{{route('provider.upload_live')}}?_token={{csrf_token()}}",--}}
                {{--filebrowserImageUploadUrl:"{{route('provider.upload_live')}}?_token={{csrf_token()}}",--}}
                allowedContent : true,
            });
            {{--CKEDITOR.plugins.addExternal( 'html5video', "{{asset('assets/plugins/ckeditor4/plugins/html5video/plugin.js')}}" );--}}
            {{--CKEDITOR.plugins.addExternal( 'html5audio', "{{asset('assets/plugins/ckeditor4/plugins/html5audio/plugin.js')}}" );--}}
            CKEDITOR.editorConfig = function( config ) {
                // Define changes to default configuration here. For example:

                config.toolbar=[
                    { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates' ] },
                    { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
                    { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
                    { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
                    '/',
                    { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
                    { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
                    { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
                    { name: 'insert', items: [ 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
                    '/',
                    { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
                    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
                    { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },

                ];

            };
        }



        initSample();
    </script>
@endsection
