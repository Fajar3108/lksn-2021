<template>
  <MainNavbar />
  <router-view />
</template>

<script>
import MainNavbar from '@/components/MainNavbar.vue';

export default {
  components: { MainNavbar },
  data: () => ({
    user: JSON.parse(localStorage.getItem('user')),
  }),
};
</script>
