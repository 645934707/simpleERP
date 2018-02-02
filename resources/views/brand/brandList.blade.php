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
    <div class="row-fluid sortable">

        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white align-justify"></i><span class="break"></span>{{ $breadcrumb }}</h2>
                <div class="box-icon">
                    <a href="{{ route('addBrand') }}" class=""><i class="halflings-icon plus-sign"></i>添加</a>
                </div>
            </div>
            <div class="box-content">
                <div class="row-fluid">
                    <div class="span6">
                        <div class="dataTables_filter" id="DataTables_Table_0_filter">
                            <form action="{{ Request::getRequestUri() }}" method="get">
                                <label>Search: <input type="text" name="keyword" aria-controls="DataTables_Table_0" placeholder="请输入用户名">
                                    <input type="submit" id="usersearch" class="btn btn-primary" value="搜索">
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>分类名称</th>
                        <th>父ID</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($brandlist as $brand)
                    <tr>
                        <td>{{ $brand['brand_name'] }}</td>
                        <td class="center">{{ $brand['pid'] }}</td>
                        <td class="center">{{ $brand['created_at'] }}</td>
                        <td class="center ">
                            <a class="btn btn-success" href="#">
                                <i class="halflings-icon white zoom-in"></i>
                            </a>
                            <a class="btn btn-info" href="#">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination pagination-centered">
                    @if($keyword)
                        {!! $brandlist->links() !!}
                    @else
                        {!! $brandlist->appends(['keyword' => $keyword])->links() !!}
                    @endif
                </div>
            </div>
        </div><!--/span-->
    </div>


@endsection
