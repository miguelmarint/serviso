<template>
  <div>
    <section id="news" class="wow">
      <div class="container">
        <header class="section-header">
          <h3>Noticias</h3>
          <p>
            Aquí podrás enterarte de datos, noticias o avisos.
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
#news{
  padding: 60px 0;
  background: #004a99;
}
#news .section-header h3,
#news .section-header p {
  color: #fff;
}
.section-header h3 {
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative;
}
#news h1,
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
  font-size: 20px;
  padding-bottom: 60px;
  color: #000000;
  width: 50%;
  font-family: "Arial Narrow";
}
#news .row {
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
#news .card {
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
#news .card i {
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
#news .card h5 {
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
#news .card p {
  font-size: 15px;
  color: #d8eafe;
}
.p {
  padding: 0;
  margin: 0 0 30px 0;
}
#news .card .readmore {
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
#news .counters {
  padding-top: 40px;
}
.text-center {
  text-align: center !important;
}
#news .counters span {
  font-family: "Montserrat", sans-serif;
  font-weight: bold;
  font-size: 48px;
  display: block;
  color: #fff;
}
#news .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Montserrat", sans-serif;
  font-size: 14px;
  color: #cce5ff;
}
</style>
