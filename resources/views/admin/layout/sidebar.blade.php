<!-- Sidebar scroll-->
<div class="scroll-sidebar">
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav">
        <ul id="sidebarnav">
            <li class="nav-devider"></li>
            <li class="nav-label">Home</li>
            <li @if(isset($menu) && $menu == '1') class="active" @endif> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gallery</a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('gallery.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                    <li><a href="{{ route('gallery.generateForm')}}"><i class="fa fa-eye text-success"></i> View </a></li>
                </ul>
            </li>
            <li @if(isset($menu) && $menu == '2') class="active" @endif> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-newspaper-o"></i><span class="hide-menu">News</a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{ route('news.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                    <li><a href="{{ route('news.view')}}"><i class="fa fa-eye text-success"></i> View </a></li>
                </ul>
            </li>
            <li @if(isset($menu) && $menu == '3') class="active" @endif > <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Vazhipadu </span></a>
              <ul aria-expanded="false" class="collapse">
                  <li><a href="{{ route('vazhipadu.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                  <li><a href="{{ route('vazhipadu.viewAll')}}"><i class="fa fa-eye text-success"></i> View </a></li>
              </ul>
            </li>
            <li @if(isset($menu) && $menu == '4') class="active" @endif > <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Poojaas </span></a>
              <ul aria-expanded="false" class="collapse">
                  <li><a href="{{ route('pooja.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                  <li><a href="{{ route('pooja.viewAll')}}"><i class="fa fa-eye text-success"></i> View </a></li>
              </ul>
            </li>
            <li @if(isset($menu) && $menu == '5') class="active" @endif > <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Festivals </span></a>
              <ul aria-expanded="false" class="collapse">
                  <li><a href="{{ route('festival.add') }}"><i class="fa fa-plus text-success"></i> Add </a></li>
                  <li><a href="{{ route('festival.viewAll')}}"><i class="fa fa-eye text-success"></i> View </a></li>
              </ul>
            </li>
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
<!-- End Sidebar scroll-->
