<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Data Perusahaan</a>
          </div>
           <br>
              <br>
              <br>
              <br>
              <br>
              <br>
          <ul class="sidebar-menu">
                <li class="">
                  <a class="nav-link" href="{{ route('sektor.index') }}"><i class="far fa-square"></i> <span>Sektor</span></a>
                </li>
                <li class="">
                  <a class="nav-link" href="{{ route('perusahaan.index') }}"><i class="far fa-square"></i> <span>Perusahaan</span></a>
                </li>
          </ul>
          <br><br><br>
           <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ URL::action('UserController@logout') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Keluar
              </a>
            </div>
        </aside>
      </div>