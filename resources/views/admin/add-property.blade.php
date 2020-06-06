<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add new Property | AssetsBD</title>
    <link href="{{asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet">

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
                        <span class="fa fa-arrow-right active">&nbsp;</span> Add New Properties
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
            <li class="active">Add Property</li>
        </ol>
    </div><!--/.row-->


    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    Add New Property
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin-add-prop-store')}}" method="post"
                          enctype="multipart/form-data">
                        <fieldset>
                        {{ @csrf_field() }}

                        <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Property Name</label>
                                <div class="col-md-9">
                                    <input id="name" name="prop_name" type="text" placeholder="Your Property Name"
                                           class="form-control" required>
                                </div>
                            </div>

                            <!--Property Type-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Type</label>
                                <div class="col-md-9">
                                    <select name="property_type" class="form-control" required>
                                        <option value="" hidden>select property Type</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                    </select>
                                </div>
                            </div>

                            {{--Property status--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                    <select id="email" name="property_status" class="form-control" required>
                                        <option value="" hidden>select property Status</option>
                                        <option value="For Sale">For Sale</option>
                                        <option value="For Rent">For Rent</option>
                                    </select>
                                </div>
                            </div>

                            {{--Area Lot--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Lot Area (sqft.)</label>
                                <div class="col-md-9">
                                    <input id="area" name="lot_area" type="number" title="exp: 1200"
                                           class="form-control" min="0" value="0" required>
                                </div>
                            </div>

                            {{--Bed--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Bed</label>
                                <div class="col-md-9">
                                    <input id="name" name="bed" type="number" title="exp: 3"
                                           class="form-control" min="0" value="0" required>
                                </div>
                            </div>

                            {{--Bath--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Bath</label>
                                <div class="col-md-9">
                                    <input id="name" name="bath" type="number" title="exp: 3"
                                           class="form-control" min="0" value="0" required>
                                </div>
                            </div>

                            {{--location--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Location</label>
                                <div class="col-md-9">
                                    <input id="name" name="location" type="text"
                                           placeholder="exp: Gulshan or Uttara or any"
                                           class="form-control" required>
                                </div>
                            </div>

                            {{--location--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Built Year</label>
                                <div class="col-md-9">
                                    <input id="name" name="year_built" type="text"
                                           placeholder="exp: 2008"
                                           class="form-control" required>
                                </div>
                            </div>

                            {{--price per sqft--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Price (per sqft)</label>
                                <div class="col-md-9">
                                    <input id="price_per_sqft" name="price_per_sqft" type="number"
                                           placeholder="50000 in BDT"
                                           class="form-control" min="0" onkeyup="totalPriceCalc()"
                                           onkeydown="totalPriceCalc()" required>
                                </div>
                            </div>

                            {{--total Price--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Total Price</label>
                                <div class="col-md-9">
                                    <input id="total_price" name="total_price" type="number" class="form-control"
                                           readonly required>
                                </div>
                            </div>

                            <!-- More details -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">More Details</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="more_info" name="more_info"
                                              placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>

                            {{--Phone no.--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone No.</label>
                                <div class="col-md-9">
                                    <input id="name" name="phone" type="number" placeholder="Exp: 017-XXXXXXXX"
                                           class="form-control" min="0" required>
                                </div>
                            </div>

                            {{--email--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                    <input id="name" name="email" type="email" placeholder="Exp: yourmail@mail.com"
                                           class="form-control" required>
                                </div>
                            </div>


                            {{--image gallery--}}
                            <div class="form-group">
                                <label class="col-md-3 control-label">Property Images (multiple)</label>
                                <div class="col-md-9">
                                    <input type="file" accept="image/*" name="photo[]"
                                           placeholder="Enter your Product title" class="form-control" required
                                           multiple>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <input type="submit" class="btn btn-default btn-md pull-right" value="Submit">
                                </div>
                            </div>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/.row-->

</div>    <!--/.main-->

<script src="{{asset('dashboard/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dashboard/js/custom.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('more_info');
</script>
</body>
</html>
