<template>
  <div>
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm footer-info">
              <h3>Serviso</h3>
              <p>
                Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
                nada terra videa magna derita valies darta donna mare fermentum
                iaculis eu non diam phasellus. Scelerisque felis imperdiet proin
                fermentum leo. Amet volutpat consequat mauris nunc congue.
              </p>
            </div>

            <div class="col-sm  footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About us</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Terms of service</a></li>
                <li><a href="">Privacy policy</a></li>
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
                <a href="" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="" class="instagram"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a href="" class="google-plus"
                  ><i class="fab fa-google-plus-g"></i
                ></a>
                <a href="" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>

          </div>
        </div>
      </div>

    </footer>
  </div>
</template>
<script>
export default {};
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
}
#footer .footer-top .footer-info p {
    font-size: 13px;
    line-height: 24px;
    margin-bottom: 0;
    font-family: 'Arial Narrow';
    color: #ecf5ff;
}
#footer .footer-top h4 {
    font-size: 14px;
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
</style>

