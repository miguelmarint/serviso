<template>
  <li class="nav-item dropdown">
    <a
      id="navbarDropdown2"
      class="nav-link dropdown-toggle"
      href="#"
      role="button"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false"
    >
      {{ __("nav.lang") }}
    </a>
    <div
      class="dropdown-menu dropdown-menu-right p-0"
      aria-labelledby="navbarDropdown2"
    >
      <jet-dropdown-link
        class="dropdown-item"
        :class="{ active: isActive('es') }"
        :href="route('language', 'es')"
      >
        <icon class="w-5 h-5" :name="'es'" /> {{ __("lang.spanish") }}
      </jet-dropdown-link>
      <jet-dropdown-link
        class="dropdown-item"
        :class="{ active: isActive('en') }"
        :href="route('language', 'en')"
      >
        <icon class="w-5 h-5" :name="'en'" /> {{ __("lang.english") }}
      </jet-dropdown-link>
    </div>
  </li>
</template>
 
<script>
import Icon from "@/Shared/Icon";
import JetDropdownLink from "@/Jetstream/DropdownLink";

export default {
  components: {
    Icon,
    JetDropdownLink,
  },
  methods: {
    isActive(locale) {
      return this.$page.props.locale === locale;
    },
  },
};
</script>

<style scoped>
.navbar-nav .nav-item a {
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