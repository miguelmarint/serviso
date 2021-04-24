<template>
  <div>
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>About Us</h3>
          <p>
            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </header>
        <div data-aos="fade-up">
          <div class="row about-container">
            <div class="col-lg-6 content order-lg-1 order-2">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat.
              </p>

              <div class="icon-box wow">
                <div class="icon"><i class="fas fa-shopping-bag"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">
                  Et harum quidem rerum facilis est et expedita distinctio. Nam
                  libero tempore, cum soluta nobis est eligendi
                </p>
              </div>

              <div class="icon-box wow">
                <div class="icon"><i class="far fa-image"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia deserunt mollit anim id est laborum
                </p>
              </div>

              <div class="icon-box wow">
                <div class="icon"><i class="far fa-chart-bar"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">
                  Minim veniam, quis nostrud exercitation ullamco laboris nisi
                  ut aliquip ex ea commodo consequat tarad limino ata
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
              <h4>
                Voluptatem dignissimos provident quasi corporis voluptates sit
                assumenda.
              </h4>
              <p>
                Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati
                possimus ea. Quas molestiae perspiciatis occaecati qui rerum.
                Deleniti quod porro sed quisquam saepe. Numquam mollitia
                recusandae non ad at et a.
              </p>
              <p>
                Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti.
                Odit qui asperiores ea corporis deserunt veritatis quidem
                expedita perferendis. Qui rerum eligendi ex doloribus quia sit.
                Porro rerum eum eum.
              </p>
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
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative;
}
#about .section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #556877;
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
  border: 2px solid #007bff;
  transition: all 0.3s ease-in-out;
}
#about .about-container .icon-box .icon i {
  color: #007bff;
  font-size: 24px;
}
#about .fa-shopping-bag:before {
  content: "\f290";
}
#about .about-container .icon-box .title {
  margin-left: 80px;
  font-weight: 600;
  margin-bottom: 5px;
  font-size: 18px;
}
#about .about-container .icon-box .title a {
  color: #283d50;
}
#about .about-container .icon-box .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
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