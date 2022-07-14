<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
          content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/images/icons/favicon.png">
    <!-- Custom CSS -->
    <link href="/admin/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="/admin/css/style.min.css" rel="stylesheet">
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                <ul class="navbar-nav ms-auto d-flex align-items-center">
                    <li class=" in">
                        <form role="search" action="{{route('searchbooks')}}" method="get" class="app-search d-none d-md-block me-3">
                            <input type="search" placeholder="Search..." name="search" class="form-control mt-0">
                            <a href="" class="active">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="{{route('dashboard')}}">
                            <span class="text-white font-medium">{{Auth::user()->name}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li class="sidebar-item pt-2">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}"
                           aria-expanded="false">
                            <i class="far fa-clock" aria-hidden="true"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('profile')}}"
                           aria-expanded="false">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('bookadmin')}}"
                           aria-expanded="false">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <span class="hide-menu">Books</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('iletisim')}}"
                           aria-expanded="false">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="hide-menu">Contact</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('exit')}}"
                           aria-expanded="false">
                            <i class="fa fa-info-circle" aria-hidden="true"></i>
                            <span class="hide-menu">Çıkış</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div align="right"><a href="{{route('bookinsert')}}"><button type="submit" class="btn btn-primary">Kitap Ekle</button></a></div>
                        <h3 class="box-title">Kitap Tablosu</h3>
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="border-top-0">C.İD</th>
                                    <th class="border-top-0">İD</th>
                                    <th class="border-top-0">Slug</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Writer</th>
                                    <th class="border-top-0">Number</th>
                                    <th class="border-top-0">Dimensions</th>
                                    <th class="border-top-0">Publisher</th>
                                    <th class="border-top-0">Paste</th>
                                    <th class="border-top-0">Print</th>
                                    <th class="border-top-0">Language</th>
                                    <th class="border-top-0">Price</th>
                                    <th class="border-top-0">Stock</th>
                                    <th class="border-top-0">Flip Book</th>
                                    <th class="border-top-0">Transactions</th>
                                </tr>
                                </thead>
                                @foreach($books as $key)
                                <tbody>
                                <tr>
                                    <td>{{$key->category_id}}</td>
                                    <td>{{$key->id}}</td>
                                    <td>{{$key->book_slug}}</td>
                                    <td>{{$key->book_name}}</td>
                                    <td>{{$key->book_writer}}</td>
                                    <td>{{$key->book_number}}</td>
                                    <td>{{$key->book_dimensions}}</td>
                                    <td>{{$key->book_publisher}}</td>
                                    <td>{{$key->book_paste}}</td>
                                    <td>{{$key->book_print}}</td>
                                    <td>{{$key->book_language}}</td>
                                    <td>{{$key->book_price}}</td>
                                    <td>{{$key->book_stock}}</td>
                                    <td>{{$key->book_flipbook}}</td>
                                    <td><a href="{{route('bookadminedit',['id'=>$key->id])}}"><button type="submit" class="btn btn-dark">Edit</button></a>
                                    <a href="{{route('remove',['id'=>$key->id])}}"><button type="submit" class="btn btn-danger">Delete</button></a></td>
                                </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/admin/js/app-style-switcher.js"></script>
<script src="/admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="/admin/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/admin/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/admin/js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="/admin/plugins/bower_components/chartist/dist/chartist.min.js"></script>
<script src="/admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="/admin/js/pages/dashboards/dashboard1.js"></script>
@include('sweetalert::alert')
</body>
</html>

