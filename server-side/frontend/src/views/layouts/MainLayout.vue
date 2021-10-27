<template>
  <NavBar :name="user.name" />
  <main>
    <!-- S: Header -->
    <header class="jumbotron">
      <div class="container">
        <h1 class="display-4">Dashboard</h1>
      </div>
    </header>
    <!-- E: Header -->
    <router-view />
  </main>
</template>

<script>
import NavBar from '@/components/NavBar.vue';

export default {
  components: { NavBar },
  data: () => ({
    user: JSON.parse(localStorage.getItem('user')),
  }),
  created() {
    if (!this.user) {
      this.$router.push('/login');
    }
  },
};
</script>
