@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{($route=='dashboard')? 'active':''}}">
                    <a href="{{url('admin/dashboard')}}"><i class="menu-icon fa  fa-home"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown  {{($prefix=='/slider')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Slider</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='manage-slider')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('manage-slider')}}">Gérer les Sliders</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown  {{($prefix=='/about')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>A propos</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='manage-about')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('manage-about')}}">Gérer a apropos</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown  {{($prefix=='/about')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Pourquoi nous</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='manage-whyus')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('manage-whyus')}}">Gérer Pourquoi nous</a></li>
                    </ul>
                </li>

            </ul>


            {{-- <ul class="nav navbar-nav">
                <li class="{{($route=='dashboard')? 'active':''}}">
                    <a href="{{url('admin/dashboard')}}"><i class="menu-icon fa  fa-home"></i>Dashboard </a>
                </li>
                <li class="menu-item-has-children dropdown  {{($prefix=='/brand')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Marques</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='all.brand')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('all.brand')}}">Toutes les Marques</a></li>
                    </ul>
                </li>


                <li class="menu-item-has-children dropdown  {{($prefix=='/category')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-archive"></i>Categries</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='all.category')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('all.category')}}">Les Categries</a></li>
                        <li class="{{($route=='all.subcategory')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('all.subcategory')}}">Les sous Categries</a></li>
                        <li class="{{($route=='all.subcategory')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('all.subsubcategory')}}">Les sous sous Categries</a></li>
                    </ul>
                </li>


                <li class="menu-item-has-children dropdown  {{($prefix=='/product')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa  fa-barcode"></i>Produits</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='add-product')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('add-product')}}">Ajouter un produit</a></li>
                        <li class="{{($route=='manage-product')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('manage-product')}}">Gérer les produits</a></li>
                    </ul>
                </li>


                <li class="menu-item-has-children dropdown  {{($prefix=='/slider')? 'active':''}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-truck"></i>Slider</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li class="{{($route=='manage-slider')? 'active':''}}"><i class="fa fa-table"></i><a href="{{route('manage-slider')}}">Gérer les Sliders</a></li>
                    </ul>
                </li>
            </ul> --}}
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
