<template>
  <div>
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm footer-info">
              <h4>Serviso</h4>
              <p>
              Servicios y asesorías integrales en salud ocupacional S.A.S
              </p>
            </div>

            <div class="col-sm  footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#intro">Home</a></li>
                <li><a href="#about">About us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#team">Team</a></li>
              </ul>
            </div>

            <div class="col-sm footer-contact">
              <h4>Contáctanos</h4>
              <p>
                Cra 24. #51-45 <br />
                Edificio Clarabet de Versalles<br />
                Manizales, Caldas, Colombia <br />
                <strong>Teléfono:</strong>   8813741 – 3162200078 - 8901133<br />
                <strong>Correo electrónico:</strong> serviso@gmail.com - serviso.citasmedicas@gmail.com<br />
              </p>

              <div class="social-links">
                <a href="https://www.facebook.com/servisosasips" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/servisosas" target="_blank" class="instagram"
                  ><i class="fab fa-instagram"></i
                ></a>
              </div>
            </div>
            <a href="https://api.whatsapp.com/send?phone=573162200078" class="whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                    <span class="msgstyle">¿En qué te podemos ayudar?</span>
            </a>

          </div>
        </div>
      </div>

    </footer>
  </div>
</template>
<script>
import Button from '../Jetstream/Button.vue';
export default {
  components: { Button },};
</script>
<style  scoped>
#footer {
    background:  #007bff;
    padding: 0 0 30px 0;
    color: #eee;
    font-size: 14px;
}
#footer .footer-top {
    background: #073d77;
    padding: 60px 0 30px 0;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
#footer .footer-top .footer-info {
    margin-bottom: 30px;
}
#footer .footer-top .footer-links {
    margin-bottom: 30px;
}
#footer .footer-top .footer-contact {
    margin-bottom: 30px;
}
#footer .footer-top .footer-info h3 {
    font-size: 34px;
    margin: 0 0 20px 0;
    padding: 2px 0 2px 0;
    line-height: 1;
    font-family: 'Arial Narrow';
    color: #fff;
    font-weight: 400;
    letter-spacing: 3px;
    text-transform: uppercase;
    font-family: "Arial Narrow";
}
#footer .footer-top .footer-info p {
    font-size: 13px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: 'Arial Narrow';
    color: #ecf5ff;
    font-size: 20px;
}
#footer .footer-top h4 {
    font-size: 20px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    position: relative;
    padding-bottom: 10px;
}
#footer .footer-top .footer-links ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
#footer .footer-top .footer-links ul li:first-child {
    padding-top: 0;
}
#footer .footer-top .footer-links ul li {
    padding: 8px 0;
}
#footer .footer-top .footer-links ul a {
    color: #ecf5ff;
}
#footer .footer-top .footer-contact p {
    line-height: 26px;
    font-size: 20px;
    font-family: "Arial Narrow";
}
#footer .footer-top .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #007bff;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
}
.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
b, strong {
    font-weight: bolder;
}
.social-links .whatsapp{
    position: fixed;
}

.whatsapp{
   position:fixed;
	width:320px;
	height:60px;
	bottom:50px;
	right:50px;
	background-color:#25d366;
	color:#FFF;
	border-radius:10px;
	text-align:center;
  font-size:30px;
  z-index:100;
  padding: 8px 0;
}
.msgstyle{
    font-size: 20px;
    padding-top: 10px;
    padding-left: 10px;
}
</style>

