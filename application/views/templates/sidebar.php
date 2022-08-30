<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center my-3" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-2">PT. Prima Ratu Katering</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Query Menu -->
    <?php
    $id_role = $user['id_role'];
    $querymenu = "SELECT user_menu.id_menu, menu FROM user_menu JOIN user_access_menu ON user_menu.id_menu = user_access_menu.id_menu WHERE user_access_menu.id_role = $id_role ORDER BY user_access_menu.id_menu ASC";
    $menu = $this->db->query($querymenu)->result_array();
    ?>

    <!-- Looping Menu -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- Menu & Sub Menu -->
        <?php
        $idmenu = $m['id_menu'];
        $querysub = "SELECT * FROM user_sub_menu JOIN user_menu ON user_sub_menu.id_menu = user_menu.id_menu WHERE user_sub_menu.id_menu = $idmenu";
        $submenu = $this->db->query($querysub)->result_array();
        ?>

        <?php foreach ($submenu as $sm) : ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url($sm['url']) ?>">
                    <i class="<?= $sm['icon'] ?>"></i>
                    <span><?= $sm['judul'] ?></span></a>
            </li>
        <?php endforeach; ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

    <?php endforeach; ?>

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
        </div>
    </div>
</li> -->

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->