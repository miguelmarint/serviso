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
                Ubicada en la ciudad de Manizales, cubriendo eje cafetero con 23
                años en el mercado, nuestros clientes empresas privadas, sector
                publico, ARL y EPS, prestamos todos los servicios relacionados
                con seguridad y salud en el trabajo excepto higiene industrial.
              </p>

              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-user-md"></i></div>
                <h4 class="title"><a href="">Nuestra misión:</a></h4>
                <p class="description">
                  Serviso SAS IPS es una empresa privada especializada en la
                  prestación de servicios de salud ocupacional que diseña,
                  aplica y evalúa programas para el cuidado de los trabajadores
                  en su ambiente laboral , con el apoyo de profesionales
                  comprometidos, y una red de instituciones aliadas que
                  garantizan seguridad y satisfacción al empleador, empleado y
                  sociedad.
                </p>
              </div>

              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-notes-medical"></i></div>
                <h4 class="title"><a href="">Nuestra visión:</a></h4>
                <p class="description">
                  En el año 2022 continuaremos siendo una de las propuestas más
                  completas y confiables para la implementación del sistema de
                  gestión en seguridad y salud en el trabajo de empresas
                  públicas y privadas del eje cafetero desde todos sus aspectos
                  de salud y seguridad, y nos consolidaremos como la primera
                  alternativa para servicios de medicina laboral para empresas y
                  entidades de seguridad social; logrando satisfacer a nuestros
                  usuarios con los mayores estándares de calidad, garantizando
                  rentabilidad y sostenibilidad social y financiera.
                </p>
              </div>
            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow">
              <img
                :src="asset('images/about-img.svg')"
                class="img-fluid"
                alt=""
              />
            </div>
          </div>
        </div>


        <div data-aos="fade-up">
          <div class="row about-extra">
            <div class="col-lg-6 wow">
              <img
                :src="asset('images/about-extra-1.svg')"
                class="img-fluid"
                alt=""
              />
            </div>
            <div class="col-lg-6 wow pt-5 pt-lg-0">
              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-user-friendsr"></i></div>
                <h4 class="title"><a href="">Nuestros valores:</a></h4>
                <ul  class="description">
                  <li>Respeto.</li>
                  <li>Calidad.</li>
                  <li>Innovación.</li>
                  <li>Oportunidad.</li>
                  <li>Compromiso.</li>
                  <li>Imparcialidad.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <div data-aos="fade-up">
          <div class="row about-extra">
            <div class="col-lg-6 wow order-1 order-lg-2">
              <img
                :src="asset('images/about-extra-2.svg')"
                class="img-fluid"
                alt=""
              />
            </div>

            <div class="col-lg-6 wow pt-4 pt-lg-0 order-2 order-lg-1">
              <h4>
                Neque saepe temporibus repellat ea ipsum et. Id vel et quia
                tempora facere reprehenderit.
              </h4>
              <p>
                Delectus alias ut incidunt delectus nam placeat in consequatur.
                Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio.
                Cumque fugit earum est quam officiis numquam. Ducimus corporis
                autem at blanditiis beatae incidunt sunt.
              </p>
              <p>
                Voluptas saepe natus quidem blanditiis. Non sunt impedit
                voluptas mollitia beatae. Qui esse molestias. Laudantium libero
                nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
              </p>
              <p>
                Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore
                sint quia modi. Numquam est aut fuga mollitia exercitationem nam
                accusantium provident quia.
              </p>
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
  color: #556877;
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