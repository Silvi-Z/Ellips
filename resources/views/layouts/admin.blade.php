<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <title>Admin Panel - @yield('title')</title>

    <!-- Bootstrap core CSS-->

    <link href="{{asset('css/adminlibs.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    @yield('head')



</head>



<body class="fixed-nav sticky-footer bg-dark" id="page-top">







<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">

    <a class="navbar-brand" href="{{ route('admin.index') }}">Admin Panel | {{ Auth::user()->name }}</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item {{Request::is('admin') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Dashboard">

                <a class="nav-link" href="{{  route('admin.index') }}">

                    <i class="fa fa-fw fa-dashboard"></i>

                    <span class="nav-link-text">Dashboard</span>

                </a>

            </li>

            <li class="nav-item {{Request::is('admin/categories*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Categories">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCategories" data-parent="#exampleAccordion">

                    <i class="fa fa-list-alt"></i>

                    <span class="nav-link-text">Categories</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseCategories">

                    <li>

                        <a href="{{ route('admin.categories.create') }}">Create Category</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.categories.index') }}">Categories list</a>

                    </li>

                </ul>

            </li>

            <li class="nav-item {{Request::is('admin/clients*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Clients">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseClients" data-parent="#exampleAccordion">

                    <i class="fa fa-users"></i>

                    <span class="nav-link-text">Clients</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseClients">

                    <li>

                        <a href="{{ route('admin.clients.create') }}">Create Client</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.clients.index') }}">Clients list</a>

                    </li>

                </ul>

            </li>


            <li class="nav-item {{Request::is('admin/brands*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Brands">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBrands" data-parent="#exampleAccordion">

                    <i class="fa fa-bandcamp"></i>

                    <span class="nav-link-text">Brands</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseBrands">

                    <li>

                        <a href="{{ route('admin.brands.create') }}">Create Brand</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.brands.index') }}">Brands list</a>

                    </li>

                </ul>

            </li>

            <li class="nav-item {{Request::is('admin/systems*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Systems">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseUsers" data-parent="#exampleAccordion">

                    <i class="fa  fa-assistive-listening-systems"></i>

                    <span class="nav-link-text">Systems</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseUsers">

                    <li>

                        <a href="{{ route('admin.systems.create') }}">Create System</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.systems.index') }}">Systems list</a>

                    </li>

                </ul>

            </li>



            <li class="nav-item {{Request::is('admin/products*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Products">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseProducts" data-parent="#exampleAccordion">

                    <i class="fa fa-fw fa-television"></i>

                    <span class="nav-link-text">Products</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseProducts">

                    <li>

                        <a href="{{ route('admin.products.create') }}">Create Product</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.products.index') }}">Products list</a>

                    </li>

                </ul>

            </li>
            <li class="nav-item {{Request::is('admin/portfolios*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Portfolios">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsePortfolios" data-parent="#exampleAccordion">

                    <i class="fa fa-users"></i>

                    <span class="nav-link-text">Portfolios</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapsePortfolios">

                    <li>

                        <a href="{{ route('admin.portfolios.create') }}">Create Portfolio</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.portfolios.index') }}">Portfolios list</a>

                    </li>

                </ul>

            </li>



            <li class="nav-item {{Request::is('admin/services*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Services">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseFaq">

                    <i class="fa fa-fw fa-question"></i>

                    <span class="nav-link-text">Services</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseFaq">

                    <li>

                        <a href="{{ route('admin.services.create') }}">Create Service</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.services.index') }}">Services list</a>

                    </li>

                </ul>

            </li>

            <li class="nav-item {{Request::is('admin/blogs*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Blogs">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseBlogs">

                    <i class="fa fa-fw fa-rss"></i>

                    <span class="nav-link-text">Blogs</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseBlogs">

                    <li>

                        <a href="{{ route('admin.blogs.create') }}">Create Blog</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.blogs.index') }}">Blogs list</a>

                    </li>

                </ul>

            </li>
            <li class="nav-item {{Request::is('admin/cities*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Cities">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCities">

                    <i class="fa fa-fw fa-address-book"></i>

                    <span class="nav-link-text">Addresses</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseCities">

                    <li>

                        <a href="{{ route('admin.cities.create') }}">Create Address</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.cities.index') }}">Addresses list</a>

                    </li>

                </ul>

            </li>
            <li class="nav-item {{Request::is('admin/social_networks*') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Social Networks" style="display: none">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseNetworks">

                    <i class="fa fa-fw fa-address-book"></i>

                    <span class="nav-link-text">Social Networks</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseNetworks">

                    <li>

                        <a href="{{ route('admin.social_networks.create') }}">Create Social Networks</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.social_networks.index') }}">Cities Social Networks</a>

                    </li>

                </ul>

            </li>
            <li class="nav-item {{ (Request::is('admin/contacts') || Request::is('admin/contact_services*')) ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Cities">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseContactservices">

                    <i class="fa fa-id-card-o"></i>

                    <span class="nav-link-text">Contact services</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseContactservices">
                    <li>

                        <a href="{{ route('admin.contacts') }}">Contact messages</a>

                    </li>
                    <li>

                        <a href="{{ route('admin.contact_services.create') }}">Create Contact service</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.contact_services.index') }}">Contact services list</a>

                    </li>

                </ul>

            </li>


            <li class="nav-item {{(Request::is('admin/about') || Request::is('admin/certificates*') || Request::is('admin/histories*') ) ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Cities">

                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseAbout">

                    <i class="fa fa-info"></i>

                    <span class="nav-link-text">About</span>

                </a>

                <ul class="sidenav-second-level collapse" id="collapseAbout">

                    <li>

                        <a href="{{ route('admin.about') }}">About us</a>

                    </li>
                    <li>

                        <a href="{{ route('admin.certificates.create') }}">Create Certificate</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.certificates.index') }}">Certificates list</a>

                    </li>
                    <li>

                        <a href="{{ route('admin.histories.create') }}">Create History</a>

                    </li>

                    <li>

                        <a href="{{ route('admin.histories.index') }}">Histories list</a>

                    </li>

                </ul>

            </li>

            <li class="nav-item {{Request::is('admin/statistics') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Link">

                <a class="nav-link" href="{{ route('admin.statistics') }}">

                    <i class="fa fa-fw fa-th-list"></i>

                    <span class="nav-link-text">Statistics</span>

                </a>

            </li>
            <li class="nav-item {{Request::is('admin/slider') ? 'active' : ''}}" data-toggle="tooltip" data-placement="right" title="Link">

                <a class="nav-link" href="{{ route('admin.slider') }}">

                    <i class="fa fa-slideshare"></i>

                    <span class="nav-link-text">Slider</span>

                </a>

            </li>









            {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">--}}

                {{--<a class="nav-link" href="#">--}}

                    {{--<i class="fa fa-fw fa-link"></i>--}}

                    {{--<span class="nav-link-text">Link</span>--}}

                {{--</a>--}}

            {{--</li>--}}

        </ul>

        <ul class="navbar-nav sidenav-toggler">

            <li class="nav-item">

                <a class="nav-link text-center" id="sidenavToggler">

                    <i class="fa fa-fw fa-angle-left"></i>

                </a>

            </li>

        </ul>

        <ul class="navbar-nav ml-auto">

            {{--<li class="nav-item dropdown">--}}

                {{--<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

                    {{--<i class="fa fa-fw fa-envelope"></i>--}}

                    {{--<span class="d-lg-none">Messages--}}

              {{--<span class="badge badge-pill badge-primary">12 New</span>--}}

            {{--</span>--}}

                    {{--<span class="indicator text-primary d-none d-lg-block">--}}

              {{--<i class="fa fa-fw fa-circle"></i>--}}

            {{--</span>--}}

                {{--</a>--}}

                {{--<div class="dropdown-menu" aria-labelledby="messagesDropdown">--}}

                    {{--<h6 class="dropdown-header">New Messages:</h6>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

                        {{--<strong>David Miller</strong>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

                        {{--<strong>Jane Smith</strong>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

                        {{--<strong>John Doe</strong>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item small" href="#">View all messages</a>--}}

                {{--</div>--}}

            {{--</li>--}}

            {{--<li class="nav-item dropdown">--}}

                {{--<a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}

                    {{--<i class="fa fa-fw fa-bell"></i>--}}

                    {{--<span class="d-lg-none">Alerts--}}

              {{--<span class="badge badge-pill badge-warning">6 New</span>--}}

            {{--</span>--}}

                    {{--<span class="indicator text-warning d-none d-lg-block">--}}

              {{--<i class="fa fa-fw fa-circle"></i>--}}

            {{--</span>--}}

                {{--</a>--}}

                {{--<div class="dropdown-menu" aria-labelledby="alertsDropdown">--}}

                    {{--<h6 class="dropdown-header">New Alerts:</h6>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

              {{--<span class="text-success">--}}

                {{--<strong>--}}

                  {{--<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>--}}

              {{--</span>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

              {{--<span class="text-danger">--}}

                {{--<strong>--}}

                  {{--<i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>--}}

              {{--</span>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item" href="#">--}}

              {{--<span class="text-success">--}}

                {{--<strong>--}}

                  {{--<i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>--}}

              {{--</span>--}}

                        {{--<span class="small float-right text-muted">11:21 AM</span>--}}

                        {{--<div class="dropdown-message small">This is an automated server response message. All systems are online.</div>--}}

                    {{--</a>--}}

                    {{--<div class="dropdown-divider"></div>--}}

                    {{--<a class="dropdown-item small" href="#">View all alerts</a>--}}

                {{--</div>--}}

            {{--</li>--}}

            {{--<li class="nav-item">--}}

                {{--<form class="form-inline my-2 my-lg-0 mr-lg-2">--}}

                    {{--<div class="input-group">--}}

                        {{--<input class="form-control" type="text" placeholder="Search for...">--}}

                        {{--<span class="input-group-btn">--}}

                {{--<button class="btn btn-primary" type="button">--}}

                  {{--<i class="fa fa-search"></i>--}}

                {{--</button>--}}

              {{--</span>--}}

                    {{--</div>--}}

                {{--</form>--}}

            {{--</li>--}}

            <li class="nav-item">

                <a class="nav-link" href="{{ route('mainpage') }}">

                    <i class="fa fa-fw fa-sign-out"></i>Back to page

                </a>

            </li>

            <li class="nav-item">

                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">

                    <i class="fa fa-fw fa-power-off"></i>Logout

                </a>

            </li>

        </ul>

    </div>

</nav>

<!-- END Navigation-->













<div class="content-wrapper">

    <div class="container-fluid">



        @yield('breadcrumbs')



        @yield('content')



    </div>

    <!-- /.container-fluid-->

</div>

    <!-- /.content-wrapper-->







    <footer class="sticky-footer">

        <div class="container">

            <div class="text-center">

                <small>Copyright © Shop 2018</small>

            </div>

        </div>

    </footer>





    <!-- Scroll to Top Button-->

    <a class="scroll-to-top rounded" href="#page-top">

        <i class="fa fa-angle-up"></i>

    </a>





    <!-- Logout Modal-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

                <div class="modal-footer">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                        {{ csrf_field() }}

                    </form>

                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <button class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</button>

                </div>

            </div>

        </div>

    </div>

    <!-- END Logout Modal-->



    <!-- Bootstrap core JavaScript-->

    <script src="{{asset('js/adminlibs.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    <script src='{{ asset('js/tinymce/tinymce.min.js') }}'></script>

    <!-- Custom scripts for this page-->

    <script src="{{asset('js/consts/sb-admin-datatables.min.js')}}"></script>

    <script src="{{asset('js/consts/sb-admin-charts.js')}}"></script>

@yield('modal')

</body>



</html>

