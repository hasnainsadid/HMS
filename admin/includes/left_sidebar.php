<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="home.php" class="brand-link">
    <img src="dist/img/fevicon.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
    <span class="brand-text font-weight-light">TrueMedicare Haven</span>
  </a>
  <!-- /Brand Logo -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo $_SESSION['img'] ?>" height="150px" width="150px" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- DashBoard -->
        <li class="nav-item">
          <a href="home.php" class="nav-link">
            <i class="nav-icon fa fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- /DashBoard -->

        <!-- Profile -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Profile
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="profile.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Admin Profile</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="change_password.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Change Password</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="add_admin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Admin</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="view_admin.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Admin</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Profile -->

        <!-- Appointment -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Appointment
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <!-- <li class="nav-item">
              <a href="add_appointment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Appointment</p>
              </a>
            </li> -->
            <li class="nav-item">
              <a href="view_appointment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pending_appointment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pending Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="approve_appointment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Approve Appointment</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Appointment -->

        <!-- Doctors -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user-md"></i>
            <p>
              Doctors
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_doctor.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Doctor</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="view_doctors.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Doctors</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Doctors -->

        <!-- Patients -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-wheelchair"></i>
            <p>
              Patients
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_patient.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Patients</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="view_patients.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Patients</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- /Patients -->

        <!-- Services -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-hand-holding-medical"></i>
            <!-- <i class="fa-solid fa-hand-holding-medical"></i> -->
            <p>
              Service
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="add_dept.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Department</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="view_departments.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Departments</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="add_trtmnt.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Treatment Type</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="view_treatment.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Treatment Type</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Medicine</p>
              </a>
            </li> -->
            <!-- <li class="nav-item">
              <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View Medicine</p>
              </a>
            </li> -->
          </ul>
        </li>
        <!-- /Services -->

        <!-- logout -->
        <li class="nav-item">
          <a href="./includes/logout.php" class="nav-link">
            <i class=" nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
        <!-- /logout -->

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>