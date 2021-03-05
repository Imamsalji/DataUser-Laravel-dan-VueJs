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
                  Create User
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">TAMBAH USER</div>

              <div class="card-body">
                <form @submit.prevent="PostStore">
                  <div class="form-group">
                    <label>Masukan nama depan</label>
                    <input
                      type="text"
                      class="form-control"
                      v-model="profile.namadepan"
                      placeholder="Masukkan Title"
                    />
                    <div v-if="validation.title">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.title[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Masukan Nama Belakang</label>
                    <input
                      class="form-control"
                      v-model="profile.namabelakang"
                      placeholder="Masukkan Konten"
                    />
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Jenis Kelamin</label>

                    <select class="form-control" v-model="profile.jk" id="name">
                      <option value disabled>Jenis Kelamin</option>
                      <option value="laki-laki">Laki-Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input
                      class="form-control"
                      v-model="profile.email"
                      placeholder="Masukkan Konten"
                    />
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Tanggal lahir</label>
                    <input
                      type="date"
                      class="form-control"
                      v-model="profile.ttl"
                      placeholder="Masukkan Konten"
                    />
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-md btn-success">
                      SIMPAN
                    </button>
                    <button type="reset" class="btn btn-md btn-danger">
                      RESET
                    </button>
                  </div>
                </form>
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
      validation: [],
    };
  },
  methods: {
    PostStore() {
      let uri = "http://localhost:8000/api/profile/store";
      this.axios
        .post(uri, this.profile)
        .then((response) => {
          this.$router.push({
            name: "profile",
          });
        })
        .catch((error) => {
          this.validation = error.response.data.data;
        });
    },
  },
};
</script>