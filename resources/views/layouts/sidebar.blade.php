<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: black " id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <img src="https://i.pinimg.com/564x/17/c7/ad/17c7ad083a906c8dc70e66c8cbd7e33f.jpg" alt="">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        </div>
      <div class="sidebar-brand-text mx-3"
      
      >Topsis</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-th-large"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('alternatif') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Alternatif</span></a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="{{ route('kriteria') }}">
        <i class="fas fa-mask"></i>
        <span>Kriteria</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('penilaian.index') }}">
        <i class="fas fa-pills"></i>
        <span>penilaian</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('calculate.topsis')}}">
        <i class="fas fa-pills"></i>
        <span>Calculate</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/profile">
        <i class="fas fa-baby"></i>
        <span>Profile</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>