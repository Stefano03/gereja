 <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebars sidebar-dark" id="accordionSidebar">


      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
         <img src="<?= base_url('asset/img/profile/default.jpg'); ?>" class="rounded" width="70">
        </div>
        <div class="sidebar-brand-text mx-3">GBI DESTINY</div>
      </a>

       <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Query Menu -->
      <?php

      $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `jemaat_menu`.`id`, `menu`
                      FROM `jemaat_menu` JOIN `jemaat_access_menu`
                      ON `jemaat_menu`.`id` = `jemaat_access_menu`.`menu_id`
                      WHERE `jemaat_access_menu`.`role_id` = $role_id
                      ORDER BY `jemaat_access_menu`.`menu_id` ASC 
                      ";

        $menu = $this->db->query($queryMenu)->result_array();
      ?>

       <!-- Looping menu-->
       <?php foreach ($menu as $m) : ?>
      <div class="sidebar-heading">
      <?=$m['menu']; ?>
      </div>

      <!-- SIAPKAN SUB_MENU SESUAI  MENU -->
      <?php
      $menuId = $m['id'];
        $querySubMenu = " SELECT * 
                          FROM `jemaat_sub_menu` JOIN `jemaat_menu`
                          ON `jemaat_sub_menu`.`menu_id` = `jemaat_menu`.`id`
                          WHERE `jemaat_sub_menu`.`menu_id` = $menuId
                          AND `jemaat_sub_menu`.`is_active` = 1
                           ";

        $subMenu = $this->db->query($querySubMenu)->result_array();
       ?>

       <?php foreach ($subMenu as $sm) : ?>
        <!-- memberikan active pada menu yang sedang di buka -->
        <?php if($title == $sm['title']) : ?>
           <li class="nav-item active">
            <?php else : ?>
                <li class="nav-item">
            <?php endif; ?>
            <!-- end menu dibuka -->
        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
          <i class="<?= $sm['icon'];  ?>"></i>
          <span><?= $sm['title']; ?></span></a>
      </li>
       <?php endforeach ?>
  
      <hr class="sidebar-divider mt-3">
    <?php endforeach; ?>


     
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->