<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-devider"></li>
            <li class="nav-label">Home</li>
            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="index.html">Ecommerce </a></li>
                    <li><a href="index1.html">Analytics </a></li>
                </ul>
            </li>
            <li @if(isset($menu) && $menu == '1') class="active" @endif> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallery</a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('gallery.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                    <li><a href="{{ route('gallery.generateForm')}}"><i class="fa fa-eye text-success"></i> View </a></li>
                </ul>
            </li>
            <li @if(isset($menu) && $menu == '2') class="active" @endif> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">News</a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('gallery.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                    <li><a href="{{ route('gallery.generateForm')}}"><i class="fa fa-eye text-success"></i> View </a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
