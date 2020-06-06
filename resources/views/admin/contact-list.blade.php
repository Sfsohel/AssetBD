<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Properties List | AssetsBD</title>
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet">
    {{--DATATABLE CSS--}}
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.jqueryui.min.css">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('dashboard/js/html5shiv.js')}}"></script>
    <script src="{{asset('dashboard/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="">
                <img class="header-logo" style="margin-top: -8px;" src="{{asset('images/logo-2.png')}}" alt="AssetsBD">
            </a>

        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{asset('favicon.ico')}}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Admin</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav menu">

        <li class="parent active"><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-bar-chart">&nbsp;</em> Properties <span data-toggle="collapse" href="#sub-item-1"
                                                                         class="icon pull-right"><em
                        class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="{{ route('admin-prop-list') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> All Properties
                    </a></li>
                <li><a class="" href="{{route('admin-add-prop')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add New Properties
                    </a></li>
            </ul>
        </li>

        <li class="parent"><a data-toggle="collapse" href="#sub-item-2">
                <em class="fa fa-clone">&nbsp;</em> Blog <span data-toggle="collapse" href="#sub-item-2"
                                                               class="icon pull-right"><em
                        class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-2">
                <li><a class="" href="{{ route('admin-blog-list') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> All Blogs
                    </a></li>
                <li><a class="" href="{{ route('admin-add-blog') }}">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add New Blogs
                    </a></li>
            </ul>
        </li>

        <li class="parent"><a data-toggle="collapse" href="#sub-item-3">
                <em class="fa fa-navicon">&nbsp;</em> Clients Review <span data-toggle="collapse" href="#sub-item-3"
                                                                           class="icon pull-right"><em
                        class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-3">
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> All Reviews
                    </a></li>
                <li><a class="" href="#">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add new Reviews
                    </a></li>
            </ul>
        </li>
        <li><a href="{{route('admin-contact-list')}}"><em class="fa fa-cogs">&nbsp;</em>Messages</a></li>
        <li><a href=""><em class="fa fa-cogs">&nbsp;</em> settings</a></li>

        <li><a href="{{route('logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
    </ul>
</div><!--/.sidebar--> 

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{route('admin-dash')}}">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Blog List</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">All Blog List</h2>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    All Blogs
                    {{--<span class="pull-right clickable panel-toggle panel-button-tab-left">
                        <em class="fa fa-toggle-up"></em>
                    </span>--}}
                </div>
                <div class="panel-body">

                    <table id="prop_table" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>sl no.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1
                        @endphp

                        @foreach($messages as $property)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$property->name}}</td>
                                <td>{{$property->email}}</td>
                                <td>{{$property->subject}}</td>
                                <td>{{$property->message}}</td>
                               

                                  
                            </tr>
                            @php
                                $i++
                            @endphp
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div><!--/.row-->


</div>    <!--/.main-->

<script src="{{asset('dashboard/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#prop_table').DataTable();
    });
</script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.jqueryui.min.js"></script>

</body>
</html>
