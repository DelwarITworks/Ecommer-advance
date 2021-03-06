<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <link href="{{ asset('public/back/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/back/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('public/back/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('public/back/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('public/back/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/back/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/back/css/tagsinput.css')}}">

    <!-- iCheck  -->
    <link href="{{ asset('public/back/css/plugins/iCheck/custom.css') }}" rel="stylesheet">

    {{-- database table --}}
    <link href="{{ asset('public/back/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="{{ asset('public/back/css/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet">



</head>

<body>
    <div id="wrapper">

        {{-- Left Sidebar Start --}}

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="{{ asset('public/back/img/profile_small.jpg') }}"/>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">{{ Str::words(Auth()->user()->name,1,'') }}</span>
                                <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="{{ URL::to('/admin/adminprofile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                                <li class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            ES+
                        </div>
                    </li>
                    <li>
                        <a href="{{ URL::to('/admin') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                    </li>
                    <li>
                        <a href="{{ route('admin.stock.manage') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Store Manage</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i><span class="nav-label">Product</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ URL::to('/admin/product/addproduct') }}">Add Product</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-first-order"></i><span class="nav-label">Order</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ route('admin.pending.orders') }}">Pending Orders</a></li>
                            <li><a href="{{ route('admin.approved.orders') }}">Approved Orders</a></li>
                            <li><a href="{{ route('admin.processed.orders') }}">Processed Orders</a></li>
                            <li><a href="{{ route('admin.shipped.orders') }}">Shipped Orders</a></li>
                            <li><a href="{{ route('admin.cancelled.orders') }}">Cancelled Orders</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Report</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ route('admin.search.report') }}">Search Report</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Categories</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ URL::to('/admin/category/add_category') }}">Manage Category</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Sub-Category</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ URL::to('/admin/category/add_subcate') }}">Manage SubCategory</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bandcamp"></i> <span class="nav-label">Brands</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ URL::to('/admin/brand/add_brand') }}">Add new Brand</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-ticket"></i> <span class="nav-label">Coupon</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ URL::to('/admin/coupon/add_coupon') }}">Add Coupon</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-th"></i> <span class="nav-label">Post</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ URL::to('admin/post/post') }}">Manage Post</a></li>
                            <li><a href="{{ URL::to('admin/post/postcategory/create') }}">Manage Post-Category</a></li>
                        </ul>
                    </li>

                
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning float-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-database"></i> <span class="nav-label">Package</span></a>
                    </li>
                </ul>

            </div>
        </nav>
        {{--// Left Side Navbar End Here--}}

        {{-- Top Navbar Start --}}

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li style="padding: 20px">
                    <span class="m-r-sm text-muted welcome-message">Welcome to Electro Store+ Admin Dashboard</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages dropdown-menu-right">
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="float-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a class="dropdown-item float-left" href="profile.html">
                                    <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="float-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html" class="dropdown-item">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="profile.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="float-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="grid_options.html" class="dropdown-item">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="float-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html" class="dropdown-item">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ URL::to('/') }}">
                        <i class="fa fa-sign-out"></i> Back to Home
                    </a>
                </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        {{-- // Top Navbar End here--}}

        {{-- Content Section here --}}
        @yield('content')

        {{-- //end contend section --}}


        <div class="footer">
            <div class="float-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2018
            </div>
        </div>
        </div>
        <div class="small-chat-box fadeInRight animated">

            <div class="heading" draggable="true">
                <small class="chat-date float-right">
                    02.19.2015
                </small>
                Small chat
            </div>

            <div class="content">

                <div class="left">
                    <div class="author-name">
                        Monica Jackson <small class="chat-date">
                        10:02 am
                    </small>
                    </div>
                    <div class="chat-message active">
                        Lorem Ipsum is simply dummy text input.
                    </div>

                </div>
                <div class="right">
                    <div class="author-name">
                        Mick Smith
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        Lorem Ipsum is simpl.
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Alice Novak
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        Check this stock char.
                    </div>
                </div>
                <div class="right">
                    <div class="author-name">
                        Anna Lamson
                        <small class="chat-date">
                            11:24 am
                        </small>
                    </div>
                    <div class="chat-message">
                        The standard chunk of Lorem Ipsum
                    </div>
                </div>
                <div class="left">
                    <div class="author-name">
                        Mick Lane
                        <small class="chat-date">
                            08:45 pm
                        </small>
                    </div>
                    <div class="chat-message active">
                        I belive that. Lorem Ipsum is simply dummy text.
                    </div>
                </div>


            </div>
            <div class="form-chat">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control">
                    <span class="input-group-btn"> <button
                        class="btn btn-primary" type="button">Send
                </button> </span></div>
            </div>

        </div>
        <div id="small-chat">

            <span class="badge badge-warning float-right">5</span>
            <a class="open-small-chat" href="">
                <i class="fa fa-comments"></i>

            </a>
        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('public/back/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('public/back/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/back/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('public/back/js/tagsinput.js')}}"></script>

    <!-- Flot -->
    <script src="{{ asset('public/back/js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('public/back/js/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('public/back/js/demo/peity-demo.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('public/back/js/inspinia.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('public/back/js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src="{{ asset('public/back/js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('public/back/js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{ asset('public/back/js/demo/sparkline-demo.js') }}"></script>

    <!-- iCheck  -->
    <link href="{{ asset('public/back/css/plugins/iCheck/custom.css') }}" rel="stylesheet">

    <!-- ChartJS-->
    <script src="{{ asset('public/back/js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('public/back/js/plugins/toastr/toastr.min.js') }}"></script>

    {{-- database table --}}
    <script src="{{ asset('public/back/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('public/back/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>
        <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>

{{-- toastr js --}}
    <script>
        @if(Session::has('messege'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                     toastr.info("{{ Session::get('messege') }}");
                     break;
                case 'success':
                    toastr.success("{{ Session::get('messege') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('messege') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('messege') }}");
                    break;
            }
          @endif
    </script>

    {{-- ckeditor --}}
    <script src="{{ asset('public/back/ckeditor/ckeditor.js') }}"></script>

<script> 
    CKEDITOR.replace('summary-ckeditor');
    CKEDITOR.replace('summary-ckeditor1');
</script>
<!-- Sweet alert -->
<script src="{{ asset('public/back/js/sweetalert.min.js') }}"></script>

<script>
    //Delete Alert
    $(document).on("click","#delete", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
        swal({
          title: "Are you sure?",
          text: "Delete for everytime!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = link;
          } else {
            swal("Your file is safe!");
          }
        });
    });
</script>


<!-- iCheck -->
<script src="{{ asset('public/back/js/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
    
</body>
</html>
