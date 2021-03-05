<template>
  <div>
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand ml-4" href="index.html">
              <h3 style="color: white">Laravel VueJs</h3>
            </a>
            <a
              class="nav-toggler waves-effect waves-light text-white d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <ul class="navbar-nav d-lg-none d-md-block">
              <li class="nav-item">
                <a
                  class="nav-toggler nav-link waves-effect waves-light text-white"
                  href="javascript:void(0)"
                  ><i class="ti-menu ti-close"></i
                ></a>
              </li>
            </ul>
            <ul class="navbar-nav mr-auto mt-md-0">
              <li class="nav-item search-box">
                <a class="nav-link text-muted" href="javascript:void(0)"
                  ><i class="ti-search"></i
                ></a>
                <form class="app-search" style="display: none">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search &amp; enter"
                  />
                  <a class="srh-btn"><i class="ti-close"></i></a>
                </form>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <header-component></header-component>

      <router-view></router-view>
      <footer-component></footer-component>
    </div>
  </div>
</template>

<script>
export default {};
</script>