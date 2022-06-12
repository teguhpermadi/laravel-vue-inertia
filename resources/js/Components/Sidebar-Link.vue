<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
  }
}
</script>

<template>
<li class="active">
  <a href="index.html"><i class="fas fa-fire"></i><span>Dashboard</span></a>
</li>
<li>
<Link href="/tes1">Tes 1</Link>
</li>
<li>
<Link href="/tes2">Tes 2</Link>
</li>
<li>
<Link href="/tes3">Tes 3</Link>
</li>
</template>