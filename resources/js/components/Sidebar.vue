<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <img
             src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png"
              alt="Logo" class="brand-image elevation-3"
              style="opacity: .8"
              >
            <span class="brand-text font-weight-light">HIRADC</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul
                  class="nav nav-pills nav-sidebar flex-column"
                  data-widget="treeview" role="menu"
                  data-accordion="false"
                  >
                    <li class="nav-item">
                        <router-link  class="nav-link" exact :to="{name:'home'}" >
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </router-link>
                    </li>
                    <li class="nav-header">Master</li>
                     <li class="nav-item">
                        <router-link class="nav-link" :to="{name:'category'}" >
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Kategori</p>
                        </router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name:'vulnerability'}" >
                            <i class="nav-icon fas fa-exclamation-triangle"></i>
                            <p>vulnerability</p>
                        </router-link>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
</template>