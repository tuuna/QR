@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel">
                    @foreach($uploads as $upload)
                        <div class="media">
                            <div class="media-left">
                                <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate(url('/download/' . $upload->id))) !!} ">
                            </div>
                            <div class="media-body">
                                <h2 class="media-heading text-center">
                                    &larr;扫描左方二维码
                                </h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection