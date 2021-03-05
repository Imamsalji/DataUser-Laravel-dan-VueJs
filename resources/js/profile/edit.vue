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
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
              <div class="card-header">EDIT POST</div>

              <div class="card-body">
                <form @submit.prevent="PostUpdate">
                  <div class="form-group">
                    <label>TITLE</label>
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
                    <label>KONTEN</label>
                    <input
                      class="form-control"
                      v-model="profile.namabelakang"
                      rows="5"
                      placeholder="Masukkan Konten"
                    />
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>KONTEN</label>
                    <input
                      class="form-control"
                      v-model="profile.jk"
                      rows="5"
                      placeholder="Masukkan Konten"
                    />
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>KONTEN</label>
                    <input
                      class="form-control"
                      v-model="profile.email"
                      rows="5"
                      placeholder="Masukkan Konten"
                    />
                    <div v-if="validation.content">
                      <div class="alert alert-danger mt-1" role="alert">
                        {{ validation.content[0] }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>KONTEN</label>
                    <input
                      class="form-control"
                      v-model="profile.ttl"
                      rows="5"
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
                      UPDATE
                    </button>
                    <button type="reset" class="btn btn-md btn-danger">
                      RESET
                    </button>
                  </div>
                </form>
              </div>
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
  created() {
    let uri = `http://localhost:8000/api/profile/${this.$route.params.id}`;
    this.axios.get(uri).then((response) => {
      this.profile = response.data.data;
    });
  },
  methods: {
    PostUpdate() {
      let uri = `/api/profile/update/${this.$route.params.id}`;
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