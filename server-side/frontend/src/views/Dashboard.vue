<template>
  <div class="container">
    <!-- S: Consultation Section -->
    <section class="consultation-section mb-5">
      <div class="section-header mb-3">
        <h4 class="section-title text-muted">My Consultation</h4>
      </div>
      <div class="row">
        <!-- S: Link to Request Consultation -->
        <div class="col-md-4" v-if="!consultation">
          <div class="card card-default">
            <div class="card-header">
              <h5 class="mb-0">Consultation</h5>
            </div>
            <div class="card-body">
              <router-link to="/consultations/create">+ Request consultation</router-link>
            </div>
          </div>
        </div>
        <!-- E: Link to Request Consultation -->

        <!-- S: Society Consultation Box -->
        <div class="col-md-4" v-if="consultation">
          <div class="card card-default">
            <div class="card-header border-0">
              <h5 class="mb-0">Consultation</h5>
            </div>
            <div class="card-body p-0">
              <table class="table table-striped mb-0">
                <tr>
                  <th>Status</th>
                  <td>
                    <span class="badge badge-info">{{ consultation.status }}</span>
                  </td>
                </tr>
                <tr>
                  <th>Disease History</th>
                  <td class="text-muted">{{ consultation.disease_history }}</td>
                </tr>
                <tr>
                  <th>Current Symptoms</th>
                  <td class="text-muted">{{ consultation.current_symptoms }}</td>
                </tr>
                <tr>
                  <th>Doctor Name</th>
                  <td class="text-muted">{{ consultation.doctor }}</td>
                </tr>
                <tr>
                  <th>Doctor Notes</th>
                  <td class="text-muted">{{ consultation.doctor_notes }}</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <!-- E: Society Consultation Box -->
      </div>
    </section>
    <!-- E: Consultation Section -->

    <!-- S: List Vaccination Section -->
    <section class="consultation-section mb-5">
      <div class="section-header mb-3">
        <h4 class="section-title text-muted">My Vaccinations</h4>
      </div>
      <div class="section-body">
        <div class="row mb-4">
          <!-- S: First Vaccination info -->
          <div class="col-md-12" v-if="consultations && consultation.status !== 'accepted'">
            <div class="alert alert-warning">
              Your consultation must be approved by doctor to get the vaccine.
            </div>
          </div>
          <!-- E: First Vaccination info -->

          <!-- S: Link to Register First Vaccination -->
          <div class="col-md-4">
            <div class="card card-default" v-if="!vaccination.first">
              <div class="card-header border-0">
                <h5 class="mb-0">First Vaccination</h5>
              </div>
              <div class="card-body">
                <router-link to="/vaccinations">+ Register vaccination </router-link>
              </div>
            </div>
          </div>
          <!-- E: Link to Register First Vaccination -->

          <!-- S: First Vaccination Box (Registered) -->
          <div class="col-md-4" v-if="vaccination && vaccination.first">
            <div class="card card-default">
              <div class="card-header border-0">
                <h5 class="mb-0">First Vaccination</h5>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped mb-0">
                  <tr>
                    <th>Status</th>
                    <td class="text-muted"><span class="badge badge-info">Registered</span></td>
                  </tr>
                  <tr>
                    <th>Date</th>
                    <td class="text-muted">October 27, 2021</td>
                  </tr>
                  <tr>
                    <th>Spot</th>
                    <td class="text-muted">Usamah Hospital</td>
                  </tr>
                  <tr>
                    <th>Vaccine</th>
                    <td class="text-muted">-</td>
                  </tr>
                  <tr>
                    <th>Vaccinator</th>
                    <td class="text-muted">-</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- S: First Vaccination Box (Registered) -->
        </div>

        <div class="row">
          <!-- S: Link to Register Second Vaccination -->
          <div class="col-md-4" v-if="!vaccination.second">
            <div class="card card-default">
              <div class="card-header border-0">
                <h5 class="mb-0">Second Vaccination</h5>
              </div>
              <div class="card-body">
                <router-link to="/vaccinations">+ Register vaccination</router-link>
              </div>
            </div>
          </div>
          <!-- E: Link to Register Second Vaccination -->

          <!-- S: Second Vaccination Box (Registered) -->
          <div class="col-md-4" v-if="vaccination && vaccination.second">
            <div class="card card-default">
              <div class="card-header border-0">
                <h5 class="mb-0">Second Vaccination</h5>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped mb-0">
                  <tr>
                    <th>Status</th>
                    <td class="text-muted"><span class="badge badge-info">Registered</span></td>
                  </tr>
                  <tr>
                    <th>Date</th>
                    <td class="text-muted">October 27, 2021</td>
                  </tr>
                  <tr>
                    <th>Spot</th>
                    <td class="text-muted">Usamah Hospital</td>
                  </tr>
                  <tr>
                    <th>Vaccine</th>
                    <td class="text-muted">-</td>
                  </tr>
                  <tr>
                    <th>Vaccinator</th>
                    <td class="text-muted">-</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <!-- S: Second Vaccination Box (Registered) -->
        </div>
      </div>
    </section>
    <!-- E: List Vaccination Section -->
  </div>
</template>

<script>
export default {
  data: () => ({
    user: JSON.parse(localStorage.getItem('user')),
    consultation: '',
    vaccination: {
      first: null,
      second: null,
    },
  }),
  methods: {
    getConsultations() {
      this.$axios
        .get(`/v1/consultations?token=${this.user.token}`)
        .then((res) => {
          this.consultation = res.data.consultation;
        })
        .catch((err) => console.log(err));
    },
    getVaccinationSpot() {
      this.$axios
        .get(`/v1/vaccinations?token=${this.user.token}`)
        .then((res) => {
          console.log(res.data);
          this.vaccination = res.data.vaccination;
        })
        .catch((err) => console.log(err));
    },
  },
  created() {
    this.getConsultations();
    this.getVaccinationSpot();
  },
};
</script>
