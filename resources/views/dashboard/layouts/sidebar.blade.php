<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">SI-INFO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Berita
            </a>
          </li>
        </ul>
        {{-- <hr class="my-3"> --}}

        @can('admin')
        <h6 class ="sidebar-heading d-flex justify-content-between align-items-center 
        px-3 mt-4 mb-1 text-muted">
          <span>ADMINISTRATOR</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/categories*') ? 'active' : '' }}" 
            aria-current="page" href="/dashboard/categories">
              <svg class="bi"><use xlink:href="#puzzle"/></svg>
              Kategori Berita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 {{ Request::is('dashboard/bidangs*') ? 'active' : '' }}" 
            aria-current="page" href="/dashboard/bidangs">
              <svg class="bi"><use xlink:href="#puzzle"/></svg>
              Bidang
            </a>
          </li>
        </ul>
        @endcan
        
      </div>
    </div>
  </div>