<template>
  <nav
    class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm"
  >
    <div class="container">
      <inertia-link class="navbar-brand mt-2 mb-3" :href="route('landing')">
        <img
          :src="asset('images/logo.png')"
          class="d-block"
          height="30"
          alt="Reactivacción"
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
            <inertia-link class="nav-link" :href="route('login')"
              >Login</inertia-link
            >
          </li>
          <li class="nav-item">
            <inertia-link class="nav-link" :href="route('register')"
              >Register</inertia-link
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {};
</script>