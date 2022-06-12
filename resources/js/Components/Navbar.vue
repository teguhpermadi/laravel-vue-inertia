<script>
import NavbarDropdown from "./Navbar-Dropdown.vue";
import Notification from "./Notification.vue";

export default {
  components: {
    NavbarDropdown,
    Notification,
  }
}
</script>
<template>
<!-- navbar background color -->
  <div class="navbar-bg"></div>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg main-navbar">
    <!-- navbar nav left -->
    <form class="form-inline mr-auto">
      <!-- navbar toggler -->
      <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>
      <!-- navbar search -->
      <div class="search-element">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </form>
    <!-- navbar right -->
    <ul class="navbar-nav navbar-right">
      <!-- navbar notification toggle -->
      <Notification/>
      <!-- navbar right item -->
      <NavbarDropdown/>
    </ul>
  </nav>

</template>