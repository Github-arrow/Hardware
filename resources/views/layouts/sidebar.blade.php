<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
 
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3 mt-3">
      <i class="fa fa-home" aria-hidden="true"></i>
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">
   
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt" aria-hidden="true"></i>
        <span>Dashboard</span></a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="{{ route('products') }}">
        <i class="fa fa-cube" aria-hidden="true"></i>
        <span>Product</span></a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        <span>Sales</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/pos">
        <i class="fa fa-desktop" aria-hidden="true"></i>
        <span>POS</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fa fa-trophy" aria-hidden="true"></i>
        <span>Report</span></a>
    </li>
   
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block mt-4">

  </ul>
  
  