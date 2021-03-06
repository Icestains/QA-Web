@extends('layouts.admin')
@section('content')
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="{{url('admin/index')}}">首页</a> &raquo; 添加ASP_NET问答对
    </div>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    <div class="result_wrap">
            <div class="result_title">
                <h3>问答对管理</h3>
        </div>

        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/ASP_NET/create')}}"><i class="fa fa-plus"></i>添加ASP_NET问答对</a>
                <a href="{{url('admin/ASP_NET')}}"><i class="fa fa-recycle"></i>全部问答对</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="{{url('admin/ASP_NET')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>问题：</th>
                    <td>
                        <input type="text" class="lg" name="question">
                    </td>
                </tr>
                <tr>
                    <th>答案：</th>
                    <td>
                        <textarea name="answer"></textarea>
                    </td>
                </tr>
                <tr>
                    <th>链接：</th>
                    <td>
                        <input type="text" class="lg" name="link">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交添加项">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

    @endsection
