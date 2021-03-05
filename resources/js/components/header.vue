<template>
  <aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav">
          <!-- User Profile-->
          <li class="sidebar-item">
            <router-link
              class="sidebar-link waves-effect waves-dark sidebar-link"
              :to="{ name: 'dashboard' }"
              ><i class="mdi mr-2 mdi-gauge"></i>Dashboard</router-link
            >
          </li>
          <li class="sidebar-item">
            <router-link
              class="sidebar-link waves-effect waves-dark sidebar-link"
              :to="{ name: 'profile' }"
              ><i class="mdi mr-2 mdi-account-multiple"></i>users</router-link
            >
          </li>
          <li class="sidebar-item">
            <router-link
              class="sidebar-link waves-effect waves-dark sidebar-link"
              :to="{ name: 'create' }"
              ><i class="mdi mr-2 mdi-account-multiple"></i
              >CreateUser</router-link
            >
          </li>
        </ul>
      </nav>
    </div>
    <div class="sidebar-footer">
      <div class="row">
        <div class="col-4 link-wrap">
          <a
            href=""
            class="link"
            data-toggle="tooltip"
            title=""
            data-original-title="Settings"
          >
            <i class="ti-settings"></i>
          </a>
        </div>
        <div class="col-4 link-wrap">
          <a
            href=""
            class="link"
            data-toggle="tooltip"
            title=""
            data-original-title="Email"
          >
            <i class="mdi mdi-gmail"></i>
          </a>
        </div>
        <div class="col-4 link-wrap">
          <a
            href=""
            class="link"
            data-toggle="tooltip"
            title=""
            data-original-title="Logout"
          >
            <i class="mdi mdi-power"></i>
          </a>
        </div>
      </div>
    </div>
  </aside>
</template>