@extends('layouts.app')
@section('content')

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default " style="border-radius: 22;">
            <div class="panel-heading text-center">
                <h2>您可以拖拽或者点击来上传文件</h2>
            </div>
            <div class="panel-body">
                <form action="/upload/completeUpload" class="dropzone" >
                    {!! csrf_field() !!}
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection