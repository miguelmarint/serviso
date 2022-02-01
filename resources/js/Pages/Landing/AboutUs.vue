<template>
  <div>
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Sobre nosotros</h3>
          <p>
            Ips especializada en servicios de seguridad y salud en el trabajo.
          </p>
        </header>
        <div data-aos="fade-up">
          <div class="row about-container">
            <div class="col-lg-6 content order-lg-1 order-2">
              <p>
                Somos una IPS especializada en las áreas de medicina del trabajo, medicina laboral y de seguridad
                y salud en el trabajo que brinda sus servicios en todo el territorio nacional, con mas de 20 años de experiencia
                y con amplio recorrido en el apoyo de servicios profesionales para el sector público
                y privado. Dicha cualificación nos convierte en un aliado estratégico para la gestión del talento
                 humano de todos nuestros clientes.
                <br>
                Estamos ubicados en la ciudad de Manizales desde donde ofrecemos diversos servicios
                y alternativas tendientes a coadyuvar la gestión del talento humano en las empresas
                y las condiciones de salud de las personas en su condición de trabajadores y empleados en todas las áreas
                de Medicina del trabajo, Medicina Laboral y de seguridad y salud en el trabajo donde durante
                por más de dos décadas las empresas y los trabajadores de todo el eje cafetero han confiado en nosotros
                 y con los cuales hemos aportado nuestras capacidades y experiencia para su crecimiento.
              </p>

              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4 class="title"><a>Nuestra misión:</a></h4>
                <p class="description">
                  Ofrecer y apoyar mediante una amplia gama de servicios profesionales en medicina del trabajo, medicina
                  laboral y de seguridad y salud en el trabajo a todas las empresas del orden nacional
                  con oportunidad, cordialidad y excelente calidad en el servicio, lo cual nos
                  convierte en un aliado estratégico y esencial para nuestros clientes.
                </p>
              </div>

              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-notes-medical"></i></div>
                <h4 class="title"><a>Nuestra visión:</a></h4>
                <p class="description">
                 Ser la líder y más reconocida empresa del eje cafetero que presta servicios en medicina del trabajo, medicina laboral y de seguridad y salud en el trabajo con altos estándares de calidad e integridad en cada una de las actuaciones que desarrollemos, con pasión y responsabilidad para entregar lo mejor de si a nuestros clientes.
                </p>
              </div>
            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow">
              <img
                :src="asset('images/berthaCEO.jpg')"
                class="img-fluid"
                alt=""
              />
            </div>
          </div>
        </div>


        <div data-aos="fade-up">
          <div class="row about-container">
            <div class="col-lg-6 wow">
              <img
                :src="asset('images/doctors.jpg')"
                class="img-fluid"
                alt=""
              />
            </div>
            <div class="col-lg-6 wow pt-5 pt-lg-0">
               <div class="icon-box wow">
                <div class="icon"><i class="fas fa-star-of-life"></i></div>
                <h4 class="title"><a>Propuesta de valor:</a></h4>
                <p class="description">
                 Ofrecer servicios de medicina del trabajo, medicina laboral y de seguridad y salud en el trabajo con
                 altos estándares de calidad, con los mejores profesionales del mercado en la
                 oportunidad que nuestros clientes requieran.
                </p>
              </div>
              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-heart"></i></div>
                <h4 class="title"><a>Nuestros valores:</a></h4>
                <ul  class="description">
                  <li>Pasión.</li>
                  <li>Responsabilidad.</li>
                  <li>Integridad.</li>
                  <li>Respeto.</li>
                  <li>Adaptación al cambio.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {};
</script>
<style scoped>
#about {
  background: #fff;
  padding: 60px 0;
}
#about .section-header h3 {
  font-size: 40px;
  color: #000000;
  text-align: center;
  font-weight: 500;
  position: relative;
  font-family: "Arial Narrow";
}
#about .section-header p {
  text-align: center;
  margin: auto;
  font-size: 30px;
  padding-bottom: 60px;
  color: #242323;
  font-family: "Arial Narrow";
  width: 50%;
}
#about .row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
#about .about-container .content {
  background: #fff;
}
#about .about-container p {
  line-height: 26px;
  font-size: 19px;
  font-family: "Arial Narrow";
  text-align: justify;
}
#about .about-container .icon-box {
  background: #fff;
  background-size: cover;
  padding: 0 0 30px 0;
}
#about .about-container .icon-box .icon {
  float: left;
  background: #fff;
  width: 64px;
  height: 64px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  border-radius: 50%;
  border: 2px solid #073d77;
  transition: all 0.3s ease-in-out;
}
#about .about-container .icon-box .icon i {
  color: #073d77;
  font-size: 24px;
}
#about .fa-shopping-bag:before {
  content: "\f290";
}
#about .about-container .icon-box .title {
  margin-left: 80px;
  font-weight: 600;
  margin-bottom: 5px;
  font-size: 21px;
  font-family: "Arial Narrow";
}
#about .about-container .icon-box .title a {
  color: #073d77;
}
#about .about-container .icon-box .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 19px;
  font-family: "Arial Narrow";
  text-align: justify;
}
#about .about-container .background {
  margin: 20px 0;
}
#about .img-fluid {
  max-width: 100%;
  height: auto;
  border-radius: 15%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#about .img {
  vertical-align: middle;
  border-style: none;
}
#about .about-extra {
  padding-top: 60px;
}
#about .about-extra h4 {
  font-weight: 600;
  font-size: 24px;
}
#about .p {
  padding: 0;
  margin: 0 0 30px 0;
}
#about .about-extra h4 {
  font-weight: 600;
  font-size: 24px;
}
</style>
