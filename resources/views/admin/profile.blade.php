@extends('layouts.backend')
@section('title','控制台 - 个人信息')
@section('css')

@stop
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>个人信息<small>LABLOG</small></h1>
            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard_home') }}"><i class="fa fa-dashboard"></i> 首页</a></li>
                <li class="active">个人信息</li>
            </ol>
        </section>
        <!-- 主内容区 -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form role="form"  method="POST" action="{{route('profile_update')}}">
                    {{ csrf_field() }}
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">基本设置</h3>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name">用户名：</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{old('name')?old('name'):$admin->name}}">
                                    @if ($errors->has('name'))
                                        <span class="help-block text-red"><strong><i class="fa fa-times-circle-o"></i>{{ $errors->first('name') }}</strong></span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="email">邮箱：</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{old('email')?old('email'):$admin->email}}">
                                    <span class="help-block text-red">用于找回密码，请谨慎填写。</span>
                                    @if ($errors->has('email'))
                                        <span class="help-block text-red"><strong><i class="fa fa-times-circle-o"></i>{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-flat">提交</button>
                            </div>
                        </div>
                     </form>
                </div>
                <div class="col-md-6">
                    <form role="form"  method="POST" action="{{route('password_update')}}">
                        {{ csrf_field() }}
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">密码修改</h3>
                            </div>
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="old_password">原密码：</label>
                                    <input type="password" class="form-control" name="old_password" id="old_password" placeholder="请输入原密码">
                                    @if ($errors->has('old_password'))
                                        <span class="help-block text-red"><strong><i class="fa fa-times-circle-o"></i>{{ $errors->first('old_password') }}</strong></span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password">新密码：</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="请输入新密码">
                                    @if ($errors->has('password'))
                                        <span class="help-block text-red"><strong><i class="fa fa-times-circle-o"></i>{{ $errors->first('password') }}</strong></span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="password_confirmation">确认密码：</label>
                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="请再次输入新密码">
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block text-red"><strong><i class="fa fa-times-circle-o"></i>{{ $errors->first('password_confirmation') }}</strong></span>
                                    @endif
                                </div>

                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary btn-flat">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@stop
@section('js')

@stop
