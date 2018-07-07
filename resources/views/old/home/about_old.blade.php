@extends('layouts.home')
@section('title', '关于本站')
@section('keywords', $config['site_keywords'])
@section('description', $config['site_description'])
@section('content')
    <div class="col-sm-8">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center article-title">
                            <h1>
                                关于本站
                            </h1>
                            <hr/>
                        </div>
                        <div class="content" style="padding:0;">
                            {!! markdown_to_html($config['site_about']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $(function () {
            $(".content img").addClass('img-responsive');
        });
    </script>
@stop