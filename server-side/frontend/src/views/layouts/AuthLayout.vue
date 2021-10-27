<template>
  <AuthNavBar />
  <router-view />
</template>

<script>
import AuthNavBar from '@/components/AuthNavBar.vue';

export default {
  components: { AuthNavBar },
};
</script>
