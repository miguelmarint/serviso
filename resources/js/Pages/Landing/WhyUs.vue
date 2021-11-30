<template>
  <div>
    <section id="why-us" class="wow">
      <div class="container">
        <header class="section-header">
          <h3>Noticias</h3>
          <p>
            Laudem latine persequeris id sed, ex fabulas delectus quo. No vel
            partiendo abhorreant vituperatoribus.
          </p>
        </header>

        <div class="row row-eq-height justify-content-center">
          <div v-for="scoop in scoops" :key="scoop.id" class="col-lg-4 mb-4">
            <div data-aos="zoom-in">
              <div class="card wow bounceInUp">
                <i class="fas fa-newspaper"></i>
                <div class="card-body">
                  <h5 class="card-title">{{ scoop.title }}</h5>
                  <p class="card-text">
                    {{ scoop.author }}
                  </p>
                  <a :href="route('scoops.show', scoop.id)" class="readmore">Read more</a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 mb-4">
            <div data-aos="zoom-in">
              <div class="card wow bounceInUp">
                <i class="fas fa-user"></i>
                <div class="card-body">
                  <h5 class="card-title">Voluptates dolores</h5>
                  <p class="card-text">
                    Voluptates nihil et quis omnis et eaque omnis sint aut.
                    Ducimus dolorum aspernatur.
                  </p>
                  <a href="#" class="readmore">Read more </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div data-aos="zoom-in">
              <div class="card wow bounceInUp">
                <i class="fas fa-user"></i>
                <div class="card-body">
                  <h5 class="card-title">Eum ut aspernatur</h5>
                  <p class="card-text">
                    Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis
                    porro in non nemo ex.
                  </p>
                  <a href="#" class="readmore">Read more </a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
  props: ["scoops"],
};
</script>
<style  scoped>
#why-us {
  padding: 60px 0;
  background: #004a99;
}
#why-us .section-header h3,
#why-us .section-header p {
  color: #fff;
}
.section-header h3 {
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative;
}
#Why-us h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Montserrat", sans-serif;
  margin: 0 0 20px 0;
  padding: 0;
}
.section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #556877;
  width: 50%;
}
#Why-us .row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.justify-content-center {
  justify-content: center !important;
}
.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}
#why-us .card {
  background: #00458f;
  border-color: #00458f;
  border-radius: 10px;
  margin: 0 15px;
  padding: 15px 0;
  text-align: center;
  color: #fff;
  transition: 0.3s ease-in-out;
  height: 100%;
}
#why-us .card i {
  font-size: 48px;
  padding-top: 15px;
  color: #bfddfe;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  text-rendering: auto;
}
.fa-diamond:before {
  content: "\f219";
}
.card-body {
  flex: 1 1 auto;
  padding: 1.25rem;
}
#why-us .card h5 {
  font-size: 22px;
  font-weight: 600;
}
.card-title {
  margin-bottom: 0.75rem;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Montserrat", sans-serif;
  margin: 0 0 20px 0;
  padding: 0;
}
#why-us .card p {
  font-size: 15px;
  color: #d8eafe;
}
.p {
  padding: 0;
  margin: 0 0 30px 0;
}
#why-us .card .readmore {
  color: #fff;
  font-weight: 600;
  display: inline-block;
  transition: 0.3s ease-in-out;
  border-bottom: #00458f solid 2px;
}
.fa-language:before {
  content: "\f1ab";
}
.fa-object-group:before {
  content: "\f247";
}
#why-us .counters {
  padding-top: 40px;
}
.text-center {
  text-align: center !important;
}
#why-us .counters span {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #fff;
}
#why-us .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  color: #cce5ff;
}
</style>