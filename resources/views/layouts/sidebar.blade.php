  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a  class="brand-link bg-primary">
      <img  src="{{ asset('dist/img/llave.png') }}" alt="Daylight" class=" brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Suspenciones BM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="{{ route('home') }}" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Tienda</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Ordenes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                {{-- <a href="{{route('workorder/index')}}" class="nav-link"> --}}
                  <i class="text-success far fa-circle nav-icon"></i>
                  <p>Abiertas</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                {{-- <a href="{{route('workorder/order_close')}}" class="nav-link"> --}}
                  <i class=" text-danger far fa-circle nav-icon"></i>
                  <p>Cerradas</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">ALMACEN</li>
          <li class="nav-item">
            {{-- <a href="{{route('shipping/shipping_active')}}" class="nav-link"> --}}
              <i class="nav-icon fas fa-truck"></i>
              <p class="text">Envios</p>
            </a>
          </li>


          <li class="nav-header">FACTURACION</li>
          <li class="nav-item">
            {{-- <a href="{{route('invoice/index')}}" class="nav-link"> --}}
              <i class=" nav-icon fas fa-file-invoice-dollar"></i>
              <p class="text">Facturas</p>
            </a>
          </li>

@php
    $id = Auth::id();
@endphp
        @if ($id ==1 )
          <li class="nav-header">Administracion</li>
          <li class="nav-item">
            {{-- <a href="{{route('admin/users')}}" class="nav-link"> --}}
              <i class=" nav-icon fas fa-users "></i>
              <p class="text">Usuarios</p>
            </a>
          </li>
          <li class="nav-item">
            {{-- <a href="{{route('register')}}" class="nav-link"> --}}
              <i class=" nav-icon fas fa-users "></i>
              <p class="text">registrar</p>
            </a>
          </li>
        @endif





        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>