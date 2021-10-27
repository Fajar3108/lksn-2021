<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="alert alert-danger" role="alert" v-if="isError">Invalid Login</div>

        <form class="card card-default" @submit.prevent="login">
          <div class="card-header">
            <h4 class="mb-0">Login</h4>
          </div>
          <div class="card-body">
            <div class="form-group row align-items-center">
              <div class="col-4 text-right">ID Card Number</div>
              <div class="col-8">
                <input type="text" class="form-control" v-model="id_card_number" />
              </div>
            </div>
            <div class="form-group row align-items-center">
              <div class="col-4 text-right">Password</div>
              <div class="col-8">
                <input type="password" class="form-control" v-model="password" />
              </div>
            </div>
            <div class="form-group row align-items-center mt-4">
              <div class="col-4"></div>
              <div class="col-8"><button class="btn btn-primary">Login</button></div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    id_card_number: '',
    password: '',
    isError: false,
  }),
  methods: {
    login() {
      this.$axios
        .post('/v1/auth/login', {
          id_card_number: this.id_card_number,
          password: this.password,
        })
        .then((res) => {
          localStorage.setItem('user', JSON.stringify(res.data));
          this.$router.push('/dashboard');
        })
        .catch(() => {
          this.isError = true;
        });
    },
  },
};
</script>
