<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>BZ</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bizzer</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{url('public/images/5.jpg')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">Bizzer</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{url('public/images/5.jpg')}}" class="img-circle" alt="User Image">

                            <p>
                            
                               Name
                                <small>Role</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            
                            <div class="pull-right">
                                <a href="{{route('logout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="{{url('public/images/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Creatu Developers</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{url('/cpanel')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    {{-- <li class="active"><a href="{{url('/add-new-admin')}}"><i class="fa fa-circle-o"></i>Add New Admin</a></li> --}}
                    <li><a href="{{url('/view-all-admin')}}"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>

            
            <li class="header">About</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                   <!--  <li class="active"><a href="{{url('/abouts-add')}}"><i class="fa fa-circle-o"></i>Add About</a></li> -->
                    <li><a href="{{url('/abouts-view')}}"><i class="fa fa-circle-o"></i>View About </a></li>
                </ul>
            </li>

            <li class="header">Banner Image</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Banner Image</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/carousel-add')}}"><i class="fa fa-circle-o"></i>Add Banner Image</a></li>
                    <li><a href="{{url('/carousel-view')}}"><i class="fa fa-circle-o"></i>View Banner Image </a></li>
                </ul>
            </li>

            <li class="header">Portfolio</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-briefcase "></i> <span>Portfolio</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/portfolio-add')}}"><i class="fa fa-circle-o"></i>Add New Portfolio</a></li>
                    <li><a href="{{url('/portfolio-view')}}"><i class="fa fa-circle-o"></i>View All Portfolio</a></li>
                </ul>
            </li>


            <li class="header">Service</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-industry"></i> <span>Service</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/service-add')}}"><i class="fa fa-circle-o"></i>Add New Service</a></li>
                    <li><a href="{{url('/service-view')}}"><i class="fa fa-circle-o"></i>View All Services </a></li>
                </ul>
            </li>

            <li class="header">Features</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Features</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/feature-add')}}"><i class="fa fa-circle-o"></i>Add New Feature</a></li>
                    <li><a href="{{url('/feature-view')}}"><i class="fa fa-circle-o"></i>View All Feature</a></li>
                </ul>
            </li>

                <li class="header">Package</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Packages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/package-add')}}"><i class="fa fa-circle-o"></i>Add New Package</a></li>
                    <li><a href="{{url('/Package-view')}}"><i class="fa fa-circle-o"></i>View All Package</a></li>
                </ul>
            </li>

               <li class="header">Summary</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt "></i> <span>Summary</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/summary-add')}}"><i class="fa fa-circle-o"></i>Add Summary</a></li>
                    <li><a href="{{url('/summary-view')}}"><i class="fa fa-circle-o"></i>View Summary</a></li>
                </ul>
            </li>


            <li class="header">Testimonials</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Testimonials</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/testimonial-add')}}"><i class="fa fa-circle-o"></i>Add New Testimonial</a></li>
                    <li><a href="{{url('/testimonial-view')}}"><i class="fa fa-circle-o"></i>View All Testimonial</a></li>
                </ul>
            </li>

            <li class="header">Why Us</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Why us</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/whyus-add')}}"><i class="fa fa-circle-o"></i>Add Why us</a></li>
                    <li><a href="{{url('/whyus-view')}}"><i class="fa fa-circle-o"></i>View Why ud</a></li>
                </ul>
            </li>
            

            <li class="header">Contact</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Message</span>

                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    
                    <small class="label pull-right bg-yellow">{{$countmail}}</small>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{url('/viewcontact')}}"><i class="fa fa-circle-o"></i>View Inbox</a></li>
                    <li><a href="{{url('/replies')}}"><i class="fa fa-circle-o"></i>View Reply</a></li>
                </ul>
            </li>

            <li class="header">SEO</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-circle"></i> <span>SEO</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <!-- <li class="active"><a href="{{url('/seo-add')}}"><i class="fa fa-circle-o"></i>Add SEO</a></li> -->
                    <li><a href="{{url('/seo-view')}}"><i class="fa fa-circle-o"></i>View SEO</a></li>
                </ul>
            </li>
             
                 

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>