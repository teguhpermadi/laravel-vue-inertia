<script>
import SidebarLinkVue from "./Sidebar-Link.vue";

export default {
  components: {
    SidebarLinkVue,
  }
}
</script>
<template>
    <!-- Sidebar outter -->
  <div class="main-sidebar"> 
    <!-- sidebar wrapper -->
    <aside id="sidebar-wrapper">
      <!-- sidebar brand -->
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
        <!-- menu header -->
        <li class="menu-header">Dashboard</li>
        <!-- menu item -->
        <SidebarLinkVue/>
      </ul>
    </aside>
  </div>
</template>