<template>
  <div>
    <section id="clients" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Nuestros clientes</h3>
        </div>

        <div
          class="row no-gutters clients-wrap clearfix wow fadeInUp"
        >
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/casaluker.png')" class="img-fluid3" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/hospitalcaldas.png')" class="img-fluid1" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/concesionp3.jpg')" class="img-fluid2" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/ara.png')" class="img-fluid3" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/bellota.jpg')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/colplast.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/cendiatra.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/infantil2.jpg')" class="img-fluid1" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/efigas.png')" class="img-fluid1" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/frisby.jpg')" class="img-fluid3" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/mabe.png')" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="client-logo">
              <img :src="asset('images/envia.png')" class="img-fluid" alt="" />
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
   font-size: 40px;
  color: #000000;
  text-align: center;
  font-weight: 500;
  position: relative;
  font-family: "Arial Narrow";
}
.section-header p {
    text-align: center;
  margin: auto;
  font-size: 30px;
  padding-bottom: 60px;
  color: #242323;
  font-family: "Arial Narrow";
  width: 50%;
}
#clients .clients-wrap {
    border-top: 1px solid #d6eaff;
    border-left: 1px solid #d6eaff;
    margin-bottom: 30px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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

#clients .client-logo .img-fluid1{
    width: 300px;
    height: 100px;
}
#clients .client-logo .img-fluid2{
    width: 300px;
    height: 200px;
}
#clients .client-logo .img-fluid3{
    width: 300px;
    height: 150px;
}
</style>
