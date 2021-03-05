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
                <li class="breadcrumb-item active" aria-current="page">User</li>
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
              <div class="card-header">USER</div>
              <section v-if="name">
                <h1>Hallo {{ name }}</h1>
                <router-link to="/user">Back</router-link>
              </section>
              <section v-else>
                <div class="card-body">
                  <router-link
                    :to="{ name: 'create' }"
                    class="btn btn-md btn-success"
                    >TAMBAH USER</router-link
                  >

                  <div class="table-responsive mt-2">
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th>Nama Depan</th>
                          <th>Nama Belakang</th>
                          <th>Jenis Kelamin</th>
                          <th>email</th>
                          <th>ttl</th>
                          <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr
                          v-for="(profile, index) in profiles"
                          :key="profile.id"
                        >
                          <td>{{ profile.namadepan }}</td>
                          <td>{{ profile.namabelakang }}</td>
                          <td>{{ profile.jk }}</td>
                          <td>{{ profile.email }}</td>
                          <td>{{ profile.ttl }}</td>
                          <td class="text-center">
                            <router-link
                              :to="{ name: 'edit', params: { id: profile.id } }"
                              class="btn btn-sm btn-primary"
                              >EDIT</router-link
                            >
                            <button
                              @click.prevent="PostDelete(profile.id, index)"
                              class="btn btn-sm btn-danger"
                            >
                              HAPUS
                            </button>
                            <router-link
                              :to="{
                                name: 'show',
                                params: { id: profile.id },
                              }"
                              class="btn btn-sm btn-success"
                              >Tampilkan</router-link
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </section>
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
    let uri = `http://localhost:8000/api/profile`;
    this.axios.get(uri).then((response) => {
      this.profiles = response.data.data;
    });
  },
  methods: {
    PostDelete(id, index) {
      this.axios
        .delete(`http://localhost:8000/api/profile/${id}`)
        .then((response) => {
          this.profiles.splice(index, 1);
        })
        .catch((error) => {
          alert("system error!");
        });
    },
    lihatuser(name) {
      this.$router.push("/profile/" + name);
    },
  },
};
</script>