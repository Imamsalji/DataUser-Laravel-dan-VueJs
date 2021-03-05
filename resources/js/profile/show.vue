<template>
  <div class="page-wrapper">
    <div class="page-breadcrumb">
      <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
          <h3 class="page-title mb-0 p-0">Hallo, Gays Apa kabar?</h3>
          <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  {{ profile.namadepan }}{{ profile.namabelakang }}
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
            <div class="card card-default">
              <div class="card-header">
                Profile dari {{ profile.namadepan }}
              </div>

              <div class="card-body">
                <table>
                  <tr>
                    <td>Nama Depan</td>
                    <td>:</td>
                    <td>{{ profile.namadepan }}</td>
                  </tr>
                  <tr>
                    <td>Nama Belakang</td>
                    <td>:</td>
                    <td>{{ profile.namabelakang }}</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ profile.jk }}</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{ profile.email }}</td>
                  </tr>
                  <tr>
                    <td>Tempat tinggal</td>
                    <td>:</td>
                    <td>{{ profile.ttl }}</td>
                  </tr>
                </table>
              </div>
              <router-link class="btn btn-success" to="/profile"
                >Back</router-link
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      profile: {},
    };
  },
  created() {
    let uri = `http://localhost:8000/api/profile/${this.$route.params.id}`;
    this.axios.get(uri).then((response) => {
      this.profile = response.data.data;
    });
  },
};
</script>