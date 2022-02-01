<template>
  <div>
    <section id="intro" class="clearfix">
      <div class="container">
        <div class="intro-img">
          <img :src="asset('images/teamcomplete.jpg')" alt="" class="img-fluid" />
        </div>
        <div class="intro-info">
          <h2>
            Servicios Integrales de Salud y<br /><span>Seguridad para el Trabajador</span
            ><br />y la Empresa S.A.S
          </h2>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
#intro {
  width: 100%;
  position: relative;
  background: url("/images/intro-bg.png") center bottom no-repeat;
  background-size: cover;
  padding: 200px 0 120px 0;
}

.img-fluid {
    border-radius: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    width: 100%;
}

#intro .intro-img {
  width: 50%;
  float: right;
}

#intro .intro-info {
  width: 50%;
  float: left;
}

#intro .intro-info h2 {
  color: #fff;
  margin-bottom: 40px;
  font-size: 48px;
  font-weight: 700;
  font-family: "Arial Narrow";
  padding-top: 15%;
}
#intro .intro-info button {
  font-family: "Arial Narrow";
  font-weight: 10px;
  font-size: 20px;
}
</style>
