<script>
import BreadcrumbVue from '../Components/Breadcrumb.vue';
import { Link } from '@inertiajs/inertia-vue3'
import Base from '../Components/Base.vue';

export default {
  components: {
    BreadcrumbVue,
    Link,
    Base
},
  props: {
    header: String,
  }
}
</script>

<template>
<Base>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>{{ header }}</h1>
      <BreadcrumbVue/>
    </div>

    <div class="section-body">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic accusantium mollitia, facilis animi asperiores autem, nobis consequuntur natus voluptatem ut amet totam vitae adipisci at quasi corrupti deleniti quibusdam harum.
    </div>
  </section>
</div>
</Base>

</template>

