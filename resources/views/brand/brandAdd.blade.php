@extends('layouts.public')

@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ route('home') }}">首页</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">{{ $breadcrumb }}</a></li>
    </ul>
    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>{{ $breadcrumb }}</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="{{ route('doAddBrand') }}">
                    <fieldset>
                        {{ csrf_field() }}
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">分类名称</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="brand_name" value="">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">Plain Select</label>
                            <div class="controls">
                                <select id="selectError3" name="pid">
                                    <option value="0">顶级</option>
                                    @foreach($brands as $b)
                                        <option value="{{ $b['id'] }}">{{ $b['brand_name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">保存</button>
                            <button class="btn">取消</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection