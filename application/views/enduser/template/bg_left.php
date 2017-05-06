<?php
$uri = $this->uri->segment(1);
$bunder = $this->uri->segment(1);
echo"

<!-- Left side column. contains the logo and sidebar -->
      <!-- Left side column. contains the logo and sidebar -->
      <aside class='main-sidebar'>
        <!-- sidebar: style can be found in sidebar.less -->
        <section class='sidebar'>
          <!-- Sidebar user panel -->
          <div class='user-panel'>
            <div class='pull-left image'>
              <img src='".base_url("design/core/images/comp/user_default.png")."' class='img-circle' alt='User Image'>
            </div>
            <div class='pull-left info'>
              <p>".$_SESSION['spk_saw']['username']."</p>
              <a href='#'><i class='fa fa-circle text-success'></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class='sidebar-menu'>
            <li class='header'>MAIN NAVIGATION</li>
            <li>
              <a href='".base_url()."' class='treeview active'>
                <i class='fa fa-dashboard'></i> <span>Dashboard</span>
              </a>
            </li>
            <li>
              <a href='".base_url('siswa/index')."'>
                <i class='fa fa-database'></i> <span>Data Siswa</span> 
              </a>             
            </li>
            <li class='treeview'>
              <a href='#!'>
                <i class='fa fa-cogs'></i> <span>Hasil SAW</span>  <i class='fa fa-angle-left pull-right'></i>
              </a>             
              <ul class='treeview-menu'>
                <li><a href='".base_url('siswa/rk')."'><i class='fa fa-circle-o'></i> Rating Kecocokan</a></li>
                <li><a href='".base_url('bobot/index')."'><i class='fa fa-circle-o'></i> Bobot</a></li>
                <li><a href='".base_url('siswa/normalisasi')."'><i class='fa fa-circle-o'></i> Normalisasi</a></li>
                <li><a href='".base_url('spk/index')."'><i class='fa fa-circle-o'></i> Hasil Perangkingan</a></li>
              </ul>
            </li>            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->

";

?>