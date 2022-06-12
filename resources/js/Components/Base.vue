<template>
    <div class="main-wrapper">
    <Navbar/>
    <Sidebar/>
    <slot></slot>
    <Footer/>
    </div>
</template>
<script>
import Navbar from '../Components/Navbar.vue';
import Sidebar from '../Components/Sidebar.vue';
import Footer from '../Components/Footer.vue';
import BreadcrumbVue from '../Components/Breadcrumb.vue';
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Sidebar,
    Navbar,
    Footer,
    BreadcrumbVue,
    Link,
  },
  props: {
    header: String,
  }
}
</script>