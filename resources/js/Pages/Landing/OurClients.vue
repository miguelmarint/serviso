<template>
  <div>
    <section id="clients" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Our CLients</h3>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque dere santome nida.
          </p>
        </div>

        <div
          class="row no-gutters clients-wrap clearfix wow fadeInUp"
        >
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-1.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-2.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-3.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-4.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-5.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-6.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-7.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/client-8.png')" class="img-fluid" alt="" />
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
#clients {
    padding: 60px 0;
    box-shadow: inset 0px 0px 12px 0px rgb(0 0 0 / 10%);
}
.section-bg {
    background: #ecf5ff;
}
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.section-header h3 {
    font-size: 36px;
    color: #283d50;
    text-align: center;
    font-weight: 500;
    position: relative;
}
.section-header p {
    text-align: center;
    margin: auto;
    font-size: 15px;
    padding-bottom: 60px;
    color: #556877;
    width: 50%;
}
#clients .clients-wrap {
    border-top: 1px solid #d6eaff;
    border-left: 1px solid #d6eaff;
    margin-bottom: 30px;
}
#clients .client-logo {
    padding: 64px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-right: 1px solid #d6eaff;
    border-bottom: 1px solid #d6eaff;
    overflow: hidden;
    background: #fff;
    height: 160px;
}
</style>