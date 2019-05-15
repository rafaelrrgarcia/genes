<ul class="navbar-nav bg-gradient-rb sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URL; ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-bus-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">GENES <sup>RB</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?php echo URL; ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>
    <link rel="stylesheet"
          href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Utilidades</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Testes:</h6>
                <a class="collapse-item" href="<?php echo URL; ?>code">Code Page</a>
                <a class="collapse-item" href="<?php echo URL; ?>404">404</a>
                <h6 class="collapse-header">Geradores:</h6>
                <a class="collapse-item" href="<?php echo URL; ?>geradores/mdc">MDC</a>
                <a class="collapse-item" href="<?php echo URL; ?>geradores/query">Query DAO</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true"
           aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Exemplos do Template</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>utilities-color.html">Colors</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>utilities-border.html">Borders</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>utilities-animation.html">Animations</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>utilities-other.html">Other</a>
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>login.html">Login</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>register.html">Register</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>404.html">404 Page</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>blank.html">Blank Page</a>
                <h6 class="collapse-header">Tabelas e Gráficos</h6>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>tables.html">Tables</a>
                <a class="collapse-item" target="_blank" href="<?php echo URL; ?>charts.html">Charts</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>