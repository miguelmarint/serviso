<template>
  <div>
    <section id="services" class="section-bg">
      <div class="container">
        <header class="section-header">
          <h3>Services</h3>
          <p>
            Laudem latine persequeris id sed, ex fabulas delectus quo. No vel
            partiendo abhorreant vituperatoribus.
          </p>
        </header>

        <div data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp">
              <div class="box">
                <div class="icon">
                  <i class="ion-ios-analytics-outline"></i>
                </div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">
                  Voluptatum deleniti atque corrupti quos dolores et quas
                  molestias excepturi sint occaecati cupiditate non provident
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 wow bounceInUp">
              <div class="box">
                <div class="icon">
                  <i class="ion-ios-bookmarks-outline"></i>
                </div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">
                  Minim veniam, quis nostrud exercitation ullamco laboris nisi
                  ut aliquip ex ea commodo consequat tarad limino ata
                </p>
              </div>
            </div>
          </div>
        </div>

        <div data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp">
              <div class="box">
                <div class="icon">
                  <i class="ion-ios-paper-outline"></i>
                </div>
                <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                <p class="description">
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 wow bounceInUp">
              <div class="box">
                <div class="icon">
                  <i class="ion-ios-speedometer-outline"></i>
                </div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia deserunt mollit anim id est laborum
                </p>
              </div>
            </div>
          </div>
        </div>

        <div data-aos="fade-up">
          <div class="row">
            <div class="col-md-6 col-lg-5 offset-lg-1 wow bounceInUp">
              <div class="box">
                <div class="icon">
                  <i class="ion-ios-world-outline"></i>
                </div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui
                  blanditiis praesentium voluptatum deleniti atque
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 wow bounceInUp">
              <div class="box">
                <div class="icon">
                  <i class="ion-ios-clock-outline"></i>
                </div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">
                  Et harum quidem rerum facilis est et expedita distinctio. Nam
                  libero tempore, cum soluta nobis est eligendi
                </p>
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
#services {
  padding: 60px 0 40px 0;
  box-shadow: inset 0px 0px 12px 0px rgb(0 0 0 / 10%);
}

#services .section-header h3 {
  font-size: 36px;
  color: #283d50;
  text-align: center;
  font-weight: 500;
  position: relative;
}
#services .section-header p {
  text-align: center;
  margin: auto;
  font-size: 15px;
  padding-bottom: 60px;
  color: #556877;
  width: 50%;
}

#services .row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
#services .box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  margin: 0 10px 40px 10px;
  background: #fff;
  box-shadow: 0 10px 29px 0 rgb(68 88 144 / 10%);
  transition: all 0.3s ease-in-out;
}
#services .icon {
  position: absolute;
  left: -10px;
  top: calc(50% - 32px);
}
#services .icon i {
  font-size: 64px;
  line-height: 1;
  transition: 0.5s;
}
#services .title {
  margin-left: 40px;
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}
#services .title a {
  color: #111;
}
#services .description {
  font-size: 14px;
  margin-left: 40px;
  line-height: 24px;
  margin-bottom: 0;
}
.section-bg {
  background: #ecf5ff;
}
</style>