<!-- Main Sidebar Container -->
<!-- http://fordev22.com/ -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link bg-primary">
      <img src="assets/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">fordev22.com | admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="f.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="http://fordev22.com/" target="_bank" class="d-block">fordev22.com</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <!-- nav-compact -->
        <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">MENU</li>
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assets/starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="covid_all.php" class="nav-link <?php if($menu=="covid_all"){echo "active";} ?> ">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Covid-19 Report World </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="covid19.php" class="nav-link <?php if($menu=="covid19"){echo "active";} ?> ">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>Covid-19 Report Thai</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="covid19_jp.php" class="nav-link <?php if($menu=="covid19_jp"){echo "active";} ?> ">
              <i class="fas fa-chart-bar"></i>
              <p>Covid-19 Report (Japan)</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="from.php" class="nav-link <?php if($menu=="from"){echo "active";} ?> ">
              <i class="nav-icon fab fa-wpforms"></i>
              <p>page 1 (form)</p>
            </a>
          </li>

      
          <li class="nav-item">
            <a href="login.php" class="nav-link <?php if($menu == "login"){echo "active";} ?>">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>page 2 (login)</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="table.php" class="nav-link <?php if ($menu == "table"){echo "active";} ?>">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>page 3 (tebles)</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="button.php" class="nav-link <?php if ($menu == "button"){echo "active";} ?>">
              <i class="nav-icon fas fa-check-square"></i>
              <p>page 4 (buttons)</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="icon.php" class="nav-link <?php if ($menu == "icon"){echo "active";} ?>">
              <i class="nav-icon fas fa-icons"></i>
              <p>page 5 (icon)</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="charts.php" class="nav-link <?php if ($menu == "charts"){echo "active";} ?>">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>page 6 (charts)</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="pdf.php" class="nav-link <?php if ($menu == "pdf"){echo "active";} ?>">
              <i class="nav-icon fas fa-file-pdf"></i>
              <p>page 7 (report_pdf)</p>
            </a>
          </li>

          <li class="nav-header"></li>


          <li class="nav-item">
            <a href="http://fordev22.com/" class="nav-link text-danger">
              <i class="nav-icon fas fa-power-off"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      <!-- http://fordev22.com/ -->
    </div>
    <!-- /.sidebar -->
  </aside>