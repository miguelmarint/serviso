<template>
  <nav
    class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm"
  >
    <div class="container">
      <inertia-link class="navbar-brand" :href="route('landing')">
        <img
          id="brand"
          :src="asset('images/logo.png')"
          class="img-fluid"
          alt="Serviso"
        />
      </inertia-link>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button
              type="button"
              @click="scrollMeTo('intro')"
              class="btn shadow-none nav-link"
            >
              Home
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              @click="scrollMeTo('about')"
              class="btn shadow-none nav-link"
            >
              About us
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              @click="scrollMeTo('services')"
              class="btn shadow-none nav-link"
            >
              Services
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              @click="scrollMeTo('why-us')"
              class="btn shadow-none nav-link"
            >
              Why us
            </button>
          </li>
          <li class="nav-item">
            <button
              type="button"
              @click="scrollMeTo('portfolio')"
              class="btn shadow-none nav-link"
            >
              Portfolio
            </button>
          </li>
          <li class="nav-item">
            <inertia-link class="nav-link" href="#">Contact us</inertia-link>
          </li>
          <li class="nav-item">
            <inertia-link class="nav-link" :href="route('login')"
              >Login</inertia-link
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  methods: {
    scrollMeTo(refName) {
      var element = document.getElementById(`${refName}`);
      var top = element.offsetTop;

      window.scrollTo({
        top: top,
        left: 0,
        behavior: "smooth",
      });
    },
  },
};
</script>

<style scoped>
#brand {
  padding: 0;
  margin: 7px 0;
  max-height: 26px;
}

.navbar-nav .nav-item a,
.navbar-nav .nav-item button {
  display: block;
  position: relative;
  color: #004289;
  padding: 10px 15px;
  transition: 0.3s;
  font-size: 14px;
  font-family: "Montserrat", sans-serif;
  font-weight: 500;
}
</style>