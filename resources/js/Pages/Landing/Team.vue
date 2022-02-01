<template>
  <div>
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Equipo de trabajo</h3>
          <p>
           Trabajamos para ustedes.
          </p>
        </div>

        <div class="row">
          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
          >
            <div class="member">
              <img :src="asset('images/berthaCEO.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">BERTHA FRANCO BEDOYA</h4>
                  <span>Médico especialista en Seguridad y Salud en el trabajo.</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="member">
              <img :src="asset('images/paulaadmin.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4  class="titleName">PAULA SÁNCHEZ GIRALDO</h4>
                  <span>Directora administrativa</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="member">
              <img :src="asset('images/auxiliaradmin.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">ANA MARÍA ZAPATA CASTAÑO</h4>
                  <span>Auxiliar administrativa</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="member">
              <img :src="asset('images/catalinadoc.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">CATALINA SALAZAR ARROYAVE</h4>
                  <span>Médico especialista en Seguridad y Salud en el trabajo.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="member">
              <img :src="asset('images/fonoaudiologa.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">FABIOLA GONZALEZ ROJAS</h4>
                  <span>Fonoaudióloga</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="member">
              <img :src="asset('images/asistente.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">GLORIA ARANGO RIVERA</h4>
                  <span>Auxiliar administrativa y asistencial</span>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="member">
              <img :src="asset('images/erica.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">ERICA CERÓN PATIÑO</h4>
                  <span>Auxiliar administrativa y asistencial</span>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="member">
              <img :src="asset('images/carolina.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4 class="titleName">CAROLINA ARÉVALO FERNÁNDEZ</h4>
                  <span>Psicóloga especialista en Seguridad y Salud en el trabajo y Recursos humanos</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
export default {
}
</script>
<style  scoped>
#team {
    background: #fff;
    padding: 60px 0;
    box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 10%);
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

#team .section-header h3 {
  font-size: 40px;
  color: #000000;
  text-align: center;
  font-weight: 500;
  position: relative;
  font-family: "Arial Narrow";
}

.titleName {
    padding-top: 20px;
    font-family: "Arial Narrow";
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
#team .member {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    border-radius: 10%;
    overflow: hidden;
}
.img-fluid {
    max-width: 100%;
    height: auto;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

#team .section-header p {
  text-align: center;
  margin: auto;
  font-size: 30px;
  padding-bottom: 60px;
  color: #242323;
  font-family: "Arial Narrow";
  width: 50%;
}

</style>

