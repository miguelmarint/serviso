<template>
  <div>
    <Navbar />
    <Intro />
    <AboutUs />
    <Services />
    <WhyUs />
    <Portfolio />
    <Team />
    <OurClients />
    <ContactUs />
    <Footer />
  </div>
</template>

<script>
import Navbar from "@/Layouts/Navbar";
import Footer from "@/Layouts/Footer";
import Intro from "./Intro";
import AboutUs from "./AboutUs";
import Services from "./Services";
import WhyUs from "./WhyUs";
import Portfolio from "./Portfolio";
import Team from "./Team";
import OurClients from "./OurClients";
import ContactUs from "./ContactUs";


export default {
  components: { Navbar, Intro, AboutUs, Services, WhyUs, Portfolio, Team, Footer, OurClients, ContactUs },
};
</script>

<style scoped>
body {
  padding-top: 3.5rem;
  background: #fff;
}
</style>