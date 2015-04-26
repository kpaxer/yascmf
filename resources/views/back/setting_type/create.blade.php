@extends('layout._back')

@section('content-header')
@parent
          <h1>
            系统管理
            <small>动态设置分组</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="{{ route('admin.page.index') }}">系统管理 - 动态设置分组</a></li>
            <li class="active">新增动态设置分组</li>
          </ol>
@stop

@section('content')

          @if(Session::has('fail'))
            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4>  <i class="icon icon fa fa-warning"></i> 提示！</h4>
              {{ Session::get('fail') }}
            </div>
          @endif

          @if($errors->any())
            <div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-ban"></i> 警告！</h4>
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
            </div>
          @endif

              <h2 class="page-header">新增动态设置分组</h2>
              {!! Form::open( array('url' => route('admin.setting_type.store'), 'method' => 'post', 'id' => 'addSettingTypeForm') ) !!}
              <div class="nav-tabs-custom">
                  
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">主要内容</a></li>
                  </ul>

                  <div class="tab-content">
                    
                    <div class="tab-pane active" id="tab_1">
                      <div class="form-group">
                        <label>动态设置分组名 <small class="text-red">*</small> <span class="text-green small">只能全小写的英文字母与下划线（a-z_）组合</span></label>
                        <input type="text" class="form-control" name="name" autocomplete="off" value="{{ Input::old('name') }}" placeholder="动态设置分组名">
                      </div>
                      <div class="form-group">
                        <label>动态设置分组值 <small class="text-red">*</small> <span class="text-green small">建议中文</span></label>
                        <input type="text" class="form-control" name="value" value="{{ Input::old('value') }}" placeholder="动态设置分组值">
                      </div>
                    </div><!-- /.tab-pane -->

                    <button type="submit" class="btn btn-primary">新增动态设置分组</button>

                  </div><!-- /.tab-content -->
                  
              </div>
              {!! Form::close() !!}

@stop
