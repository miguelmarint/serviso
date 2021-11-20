<template>
  <div>
    <Navbar />

    <div class="container my-5">
        <div v-html="scoop.content"></div>
    </div>

    <Footer />
  </div>
</template>

<script>
import Navbar from "@/Layouts/Navbar";
import Footer from "@/Layouts/Footer";

export default {
  props: ["scoop"],
  components: { Navbar, Footer },
};
</script>

<style scoped>
body {
  padding-top: 3.5rem;
  background: #fff;
}
</style>