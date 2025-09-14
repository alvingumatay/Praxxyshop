<div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-item menu-open">
                <a href="{{ url('/dashboard') }}" class="nav-link active">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  <p>
                     Products
                  </p>
                </a>
              </li>
               <li class="nav-item menu-open">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link active">
                  <i class="nav-icon fa fa-sign-out"></i>
                  <p>
                    Logout
                  </p>
                </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                      </form>
              </li>
             
           
           
                    
            <!--end::Sidebar Menu-->
          </nav>
        </div>