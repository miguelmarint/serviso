<template>
  <nav
    class="navbar navbar-expand-md navbar-light bg-white shadow-sm"
    :class="{ 'fixed-top': route().current() === 'landing' }"
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

          <li v-if="!$page.props.user" class="nav-item">
            <inertia-link class="nav-link" :href="route('login')"
              >Login</inertia-link
            >
          </li>

          <li v-if="$page.props.user" class="nav-item dropdown">
            <a
              id="navbarDropdown"
              class="nav-link dropdown-toggle"
              href="#"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              v-pre
            >
              <i class="fas fa-user"></i>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="navbarDropdown"
            >
              <h6 class="dropdown-header">{{ $page.props.user.name }}</h6>
              <div class="dropdown-divider"></div>
              <jet-dropdown-link
                class="dropdown-item"
                :href="route('dashboard')"
              >
                Dashboard
              </jet-dropdown-link>
              <jet-dropdown-link
                class="dropdown-item"
                :href="route('profile.show')"
              >
                Profile
              </jet-dropdown-link>
              <form @submit.prevent="logout">
                <jet-dropdown-link as="button"> Log out </jet-dropdown-link>
              </form>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import JetDropdownLink from "@/Jetstream/DropdownLink";
export default {
  components: {
    JetDropdownLink,
  },
  methods: {
    scrollMeTo(refName) {
      if (this.route().current() !== "landing") {
        this.$inertia.get(this.route("landing")).then(() => {
          this.doScroll(refName);
        });
      } else {
        this.doScroll(refName);
      }
    },
    doScroll(refName) {
      var element = document.getElementById(`${refName}`);
      var top = element.offsetTop;
      window.scrollTo({
        top: top,
        left: 0,
        behavior: "smooth",
      });
    },
    logout() {
      this.$inertia.post(route("logout"));
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