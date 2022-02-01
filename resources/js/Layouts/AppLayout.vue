<template>
  <div>
    <div class="d-flex" :class="{ toggled: toggled }" id="wrapper">
      <div class="border-right bg-white shadow-sm" id="sidebar-wrapper">
        <div class="sidebar-heading align-content-center text-center">
          <h4>{{ $page.props.user.name }}</h4>
          <inertia-link
            class="nav-link p-0 active exact-active"
            :href="route('profile.show')"
            >{{ __("sidebar.profile") }}</inertia-link
          >
        </div>

        <div class="list-group list-group-flush">
          <inertia-link
            class="list-group-item list-group-item-action"
            :class="{ active: isActive('dashboard') }"
            :href="route('dashboard')"
          >
            <div class="d-flex w-100 justify-content-start align-items-center">
              <i class="fas fa-home mr-2"></i>
              <span class="menu-collapsed font-weight-bold">{{
                __("sidebar.home")
              }}</span>
            </div>
          </inertia-link>
          <div class="accordion" id="sidebarAcordion">
            <!-- Personalization -->
            <a
              href="#submenu1"
              data-toggle="collapse"
              aria-expanded="false"
              class="bg-white list-group-item list-group-item-action flex-column align-items-start"
            >
              <div
                class="d-flex w-100 justify-content-start align-items-center"
              >
                <span class="fas fa-paint-brush fa-fw mr-2"></span>
                <span class="menu-collapsed font-weight-bold">{{
                  __("sidebar.personalization")
                }}</span>
              </div>
            </a>
            <div
              id="submenu1"
              class="collapse sidebar-submenu"
              data-parent="#sidebarAcordion"
            >
              <inertia-link
                :href="route('scoops.index')"
                class="list-group-item list-group-item-action"
                :class="{
                  active:
                    isActive('scoops.index') ||
                    isActive('scoops.create') ||
                    isActive('scoops.edit') ||
                    isActive('scoops.show'),
                }"
              >
                <div
                  class="ml-2 d-flex w-100 justify-content-start align-items-center"
                >
                  <i class="fas fa-house-user mr-2"></i>
                  <span class="menu-collapsed">{{ __("sidebar.scoops") }}</span>
                </div>
              </inertia-link>
            </div>
          </div>
        </div>
      </div>

      <div id="page-content-wrapper">
        <Navbar />
        <main class="container-fluid">
          <!-- Page Content -->
          <div class="my-3">
            <button
              class="btn btn-light bg-white shadow-sm px-3 d-inline align-middle mr-2"
              id="menu-toggle"
              @click="toggle"
            >
              <i class="fa fa-bars"></i>
            </button>
            <slot name="titleSection"></slot>
            <hr />
            <slot></slot>
          </div>
        </main>
      </div>
    </div>
  </div>
</template>

<script>
import Navbar from "@/Layouts/Navbar";
export default {
  components: {
    Navbar,
  },

  data() {
    return {
      toggled: false,
    };
  },

  methods: {
    toggle() {
      this.toggled = !this.toggled;
    },
    isActive(route) {
      return this.route().current() === route;
    },
  },

  computed: {
    path() {
      return window.location.pathname;
    },
  },
};
</script>

<style scoped>
.list-group-flush > .list-group-item {
  border-width: 1px !important;
}

.list-group-item.active {
  background-color: #3490dc !important;
}

#wrapper {
  overflow-x: hidden;
}

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin 0.25s ease-out;
  -moz-transition: margin 0.25s ease-out;
  -o-transition: margin 0.25s ease-out;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  /* font-size: 1.2rem; */
  height: 80.2188px;
  max-height: 80.2188px;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

@media (min-width: 500px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
</style>
