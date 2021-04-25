<template>
  <div class="icon-lang">
    <inertia-link :href="route('language', [selectable_locale])">
      <icon class="w-5 h-5" :name="selectable_locale" />
    </inertia-link>
  </div>
</template>
 
<script>
import Icon from "@/Shared/Icon";

export default {
  components: {
    Icon,
  },

  computed: {
    selectable_locale() {
      if (this.$page.props.locale === "en") {
        return "es";
      }
      return "en";
    },
  },
};
</script>

<style scoped>
.icon-lang {
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