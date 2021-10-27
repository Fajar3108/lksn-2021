<template>
  <div>
    <main>
      <!-- S: Header -->
      <header class="jumbotron">
        <div class="container text-center">
          <h1 class="display-4">Vaccination Platform</h1>
        </div>
      </header>
      <!-- E: Header -->
      <router-view />
    </main>
  </div>
</template>

<style>
@import url('./assets/css/bootstrap.css');
@import url('./assets/css/custom.css');
</style>
