<?php

echo"
 <body class='hold-transition skin-blue sidebar-mini'>
    <div class='wrapper'>

      <header class='main-header'>
        <!-- Logo -->
        <a href='' class='logo'>
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class='logo-mini'><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class='logo-lg'><b>SPK SAW</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class='navbar navbar-static-top' role='navigation'>
          <!-- Sidebar toggle button-->
          <a href='#' class='sidebar-toggle' data-toggle='offcanvas' role='button'>
            <span class='sr-only'>Toggle navigation</span>
          </a>
          <div class='navbar-custom-menu'>
            <ul class='nav navbar-nav'>
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class='dropdown user user-menu'>
                <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                  <img src='".base_url("design/core/images/comp/user_default.png")."' class='user-image' alt='User Image'>
                  <span class='hidden-xs'>".$_SESSION['spk_saw']['username']."</span>
                </a>
                <ul class='dropdown-menu'>
                  <!-- User image -->
                  <li class='user-header'>
                    <img src='".base_url("design/core/images/comp/user_default.png")."' class='img-circle' alt='User Image'>
                    <p>";                    
                    echo"
                      
                      <!-- <small>Member since Nov. 2012</small> -->
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class='user-footer'>
                    <div class='pull-left'>
                      <a href='".base_url('ms_user/view_profile/'.base64_encode($_SESSION['spk_saw']['id']))."' class='btn btn-primary btn-flat'>Profile</a>
                    </div>
                    <div class='pull-right'>
                      <a href='".base_url("index/logout")."' class='btn btn-default btn-flat'>Sign out</a>
                    </div>
                  </li>                  
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
             <!-- <li>
                <a href='#' data-toggle='control-sidebar'><i class='fa fa-gears'></i></a>
              </li> -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      

";
?>