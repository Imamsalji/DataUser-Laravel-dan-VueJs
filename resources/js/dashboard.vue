<template>
  <div class="page-wrapper">
    <div class="page-breadcrumb">
      <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
          <h3 class="page-title mb-0 p-0">Hallo,Gays Apa kabar?</h3>
          <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Dashboard
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container mt-3">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card text-center">
              <div class="card-header">Data User</div>
              <div class="card-body">
                <h5 class="card-title">Jumlah User</h5>
                <h1>{{ profiles }}</h1>
                <router-link class="btn btn-primary" :to="{ name: 'profile' }"
                  >user data</router-link
                >
              </div>
              <div class="card-footer text-muted">Mohamad Imam Salji</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
export default {
  props: ["name"],
  data() {
    return {
      profiles: [],
    };
  },
  created() {
    let uri = `http://localhost:8000/api/dashboard`;
    this.axios.get(uri).then((response) => {
      this.profiles = response.data;
    });
  },
};
</script>