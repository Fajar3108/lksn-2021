<template>
  <NavBar />
  <main>
    <!-- S: Header -->
    <header class="jumbotron">
      <div class="container text-center">
        <h1 class="display-4">Vaccination Platform</h1>
      </div>
    </header>
    <!-- E: Header -->
    <Login />
  </main>
</template>

<script>
import NavBar from '@/components/NavBar.vue';
import Login from '@/views/Login.vue';

export default {
  components: { NavBar, Login },
};
</script>
