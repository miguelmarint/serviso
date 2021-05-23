<template>
  <div>
    <section id="contact">
      <div class="container-fluid">
        <div class="section-header">
          <h3>Contáctanos</h3>
        </div>
  <div class="row">
        <div class="col-md-5 info">
          <i class="fas fa-map-marker-alt"></i>
          <p>
            Cra. 24 #51-45 Edifico Clarabet de Versalles - Manizales, Caldas
          </p>
        </div>
        <div class="col-md-4 info">
          <i class="fas fa-envelope"></i>
          <p>serviso@gmail.com - serviso.citasmedicas@gmail.com</p>
        </div>
        <div class="col-md-3 info">
          <i class="fas fa-mobile-alt"></i>
          <p>(+57)3162200078 – Fijo 8813741 - 8901133</p>
        </div>
      </div>
        <div
          class="row wow fadeInUp"
          style="visibility: visible; animation-name: fadeInUp"
        >
          <div class="col-lg-6">
            <div class="map mb-4 mb-lg-0">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d351.2771107481127!2d-75.49752815250766!3d5.063694101109761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e476f899e6a89d7%3A0x59d23954412887e3!2sCra.%2024%20%2351-45%2C%20Manizales%2C%20Caldas!5e0!3m2!1ses!2sco!4v1620592019003!5m2!1ses!2sco"
                frameborder="0"
                style="border: 0; width: 100%; height: 312px"
                allowfullscreen=""
              ></iframe>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      placeholder="Nombre"
                      data-rule="minlen:4"
                      data-msg="Please enter at least 4 chars"
                    />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      placeholder="Correo electrónico"
                      data-rule="email"
                      data-msg="Please enter a valid email"
                    />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    placeholder="Asunto"
                    data-rule="minlen:4"
                    data-msg="Please enter at least 8 chars of subject"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    rows="5"
                    data-rule="required"
                    data-msg="Please write something for us"
                    placeholder="Mensaje"
                  ></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center">
                  <button type="submit" title="Send Message">
                    Enviar mensaje
                  </button>
                </div>
              </form>
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
<style  scoped>
#contact {
  box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 10%);
  padding: 60px 0;
  overflow: hidden;
}
container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
#contact .section-header {
  padding-bottom: 30px;
}
.section-header h3 {
  font-size: 40px;
  color: #000000;
  text-align: center;
  font-weight: 500;
  position: relative;
}
.row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
#contact .info {
  color: #283d50;
}
#contact .info i {
  font-size: 32px;
  color: #007bff;
  float: left;
  line-height: 1;
}
#contact .info p {
  padding: 0 0 10px 36px;
  line-height: 28px;
  font-size: 17px;
  font-family: "Arial Narrow";
}
#contact .form #sendmessage {
  color: #007bff;
  border: 1px solid #007bff;
  display: none;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}
#contact .form #errormessage {
  color: red;
  display: none;
  border: 1px solid red;
  text-align: center;
  padding: 15px;
  font-weight: 600;
  margin-bottom: 15px;
}
.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}
.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}
#contact .form input,
#contact .form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}
#contact .form .validation {
  color: red;
  display: none;
  margin: 0 0 20px;
  font-weight: 400;
  font-size: 13px;
}
.form-group {
  margin-bottom: 1rem;
}
.text-center {
  text-align: center !important;
}
#contact .form button[type="submit"] {
  background: #007bff;
  border: 0;
  border-radius: 20px;
  padding: 8px 30px;
  color: #fff;
  transition: 0.3s;
}
</style>