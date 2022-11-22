<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

     
    <li class="nav-item">
      <a href="http://127.0.0.1:8000/admin/category" class="nav-link">
        <i class="fas fa-archive"></i>
        <p>
          Category
          <span class="right badge badge-danger">New</span>
        </p>
      </a>
    </li>
    <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/user-role" class="nav-link">
          <i class="fas fa-chalkboard"></i>
          <p>
            User Role
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/reservation-status" class="nav-link">
          <i class="fas fa-dolly"></i>
          
          <p>
            Reservation Status
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/missing-item-status" class="nav-link">
          <i class="fas fa-binoculars"></i>
          <p>
            Missing Item Status
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/schedule" class="nav-link">
          <i class="fas fa-check"></i>
          <p>
            Schedule
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/reservation" class="nav-link">
          <i class="fas fa-inbox"></i>
          <p>
            Reservation
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/attendance" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-fill" viewBox="0 0 16 16">
            <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M3.5 1h.585A1.498 1.498 0 0 0 4 1.5V2a1.5 1.5 0 0 0 1.5 1.5h5A1.5 1.5 0 0 0 12 2v-.5c0-.175-.03-.344-.085-.5h.585A1.5 1.5 0 0 1 14 2.5v12a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-12A1.5 1.5 0 0 1 3.5 1Z"/>
          </svg>
          <p>
            Attendance
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="http://127.0.0.1:8000/admin/replacement" class="nav-link">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check-fill" viewBox="0 0 16 16">
            <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z"/>
            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm6.854 7.354-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
          </svg>
          <p>
            Pengajuan Replacement Class
           </p>
        </a>
      </li>

      Route::resource('admin/attendance', 'App\Http\Controllers\Admin\attendanceController');
      Route::resource('admin/reservation', 'App\Http\Controllers\Admin\reservationController');
      Route::resource('admin/schedule', 'App\Http\Controllers\Admin\scheduleController');
      Route::resource('admin/replacement', 'App\Http\Controllers\Admin\replacementController');
</ul>