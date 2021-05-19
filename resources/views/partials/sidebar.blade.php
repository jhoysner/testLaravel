<aside class="main-sidebar" style="margin-top:24px">
    <section class="sidebar">    
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU DE NAVEGACION</li>
            <li class="treeview" style="margin-top: 10px;">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Menu</span>
                    {{-- <span class="pull-right-container"> --}}
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: block;">
                    <li><a href="{{route('home')}}"> <i class="fa fa-home"></i>Home</a></li>
                    <li><a href="{{route('reproductores')}}"> <i class="fa fa-plus"></i>Reproductores</a></li>
                    <li><a href="{{route('animales')}}"> <i class="fa fa-plus"></i>Animales</a></li>
                    <li><a href="{{route('servicios')}}"> <i class="fa fa-plus"></i>Servicios</a></li>
                   
                </ul>
            </li> 
        </ul>
    </section>
</aside>