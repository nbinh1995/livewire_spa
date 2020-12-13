<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin-lte/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                            class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!--  php -->
        @php
        $ecommerce = ['category','bill','customer','incompletebill','product','attribute'];
        @endphp
        <!-- /.php -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="@if ($current === 'dashboard') active @endif">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>{{__('Dashboard')}}</span>
                </a>
            </li>
            <li class="@if (in_array($current,$ecommerce,true)) active menu-open @endif treeview">
                <a href="#">
                    <i class="fa fa-opencart"></i> <span>Ecommerce</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="@if ($current === 'category') active @endif"><a href="{{route('admin.categories')}}"><i
                                class="fa fa-archive text-aqua"></i>{{__('Product
                        Categories')}}</a>
                    </li>
                    <li class="@if ($current === 'attribute') active @endif"><a href="{{route('admin.attributes')}}"><i
                                class="fa fa-tag text-aqua"></i>{{__('Product Attributes')}} </a></li>
                    <li class="@if ($current === 'product') active @endif"><a href="{{route('admin.products')}}"><i
                                class="fa fa-camera text-aqua"></i>{{__('Products')}} </a></li>
                    <li class="@if ($current === 'attribute') customer @endif"><a href="{{route('admin.customers')}}"><i
                                class="fa fa-users text-yellow"></i>{{__('Customers')}} </a></li>
                    <li class="@if ($current === 'bill') active @endif"><a href="{{route('admin.bills')}}"><i
                                class="fa fa-shopping-bag text-red"></i>{{__('Bills')}} </a></li>
                    <li class="@if ($current === 'incompletebill') active @endif"><a
                            href="{{route('admin.incomplete-bills')}}"><i
                                class="fa fa-shopping-basket text-red"></i>{{__('Incomplete Bills')}} </a></li>
                </ul>
            </li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>