<template>
  <div>
    <section id="intro" class="clearfix">
      <div class="container">
        <div class="intro-img">
          <img :src="asset('images/intro-img.svg')" alt="" class="img-fluid" />
        </div>
        <div class="intro-info">
          <h2>
            We provide<br /><span>solutions</span><br />for your business!
          </h2>
          <div>
            <button type="button" class="btn btn-primary mr-4">
              Get Started
            </button>
            <button type="button" class="btn btn-outline-primary mr-4">
              Our Services
            </button>
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
#intro {
  width: 100%;
  position: relative;
  background: url("/images/intro-bg.png") center bottom no-repeat;
  background-size: cover;
  padding: 200px 0 120px 0;
}

#intro .intro-img {
  width: 50%;
  float: right;
}

#intro .intro-info {
  width: 50%;
  float: left;
}

#intro .intro-info h2 {
  color: #fff;
  margin-bottom: 40px;
  font-size: 48px;
  font-weight: 700;
}
</style>