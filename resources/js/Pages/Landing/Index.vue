<template>
  <div>
    <Navbar />
    <Intro />
  </div>
</template>

<script>
import Navbar from "@/Layouts/Navbar";
import Intro from "./Intro";
export default {
  components: { Navbar, Intro },
};
</script>