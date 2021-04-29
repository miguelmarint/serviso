<template>
  <div>
    <section id="team">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
          <p>
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque
          </p>
        </div>

        <div class="row">
          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
          >
            <div class="member">
              <img :src="asset('images/team-1.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="member">
              <img :src="asset('images/team-2.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.2s"
          >
            <div class="member">
              <img :src="asset('images/team-3.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-3 col-md-6 wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="member">
              <img :src="asset('images/team-4.jpg')" class="img-fluid" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
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
    border-radius: 50%;
    overflow: hidden;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}

</style>