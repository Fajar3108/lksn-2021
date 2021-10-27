<template>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container">
      <router-link to="/dashboard" class="navbar-brand">Vaccination Platform</router-link>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto" v-if="name">
          <li class="nav-item">
            <a class="nav-link" href="#">{{ name }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" @click="logout">Logout</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto" v-if="!name">
          <li class="nav-item">
            <router-view class="nav-link" to="/login" />
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  props: {
    name: null,
  },
  methods: {
    logout() {
      this.$axios
        .post('/v1/auth/logout', {
          token: JSON.parse(localStorage.getItem('user')).token,
        })
        .then(() => {
          // alert('Logout Success');
          localStorage.removeItem('user');
          this.$router.push('/login');
        })
        .catch((err) => console.log(err));
    },
  },
};
</script>
