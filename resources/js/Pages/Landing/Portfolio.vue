<template>
  <div>
    <section id="portfolio" class="clearfix">
      <div class="container">
        <header class="section-header">
          <h3 class="section-title">Our Portfolio</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
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
#portfolio {
  padding: 60px 0;
  box-shadow: 0px 0px 12px 0px rgb(0 0 0 / 10%);
}
.section-header h3 {
  font-size: 36px;
  color: #283d50;
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
#portfolio #portfolio-flters {
  padding: 0;
  margin: 5px 0 35px 0;
  list-style: none;
  text-align: center;
}
#portfolio #portfolio-flters li:hover,
#portfolio #portfolio-flters li.filter-active {
  background: #007bff;
  color: #fff;
}
#portfolio #portfolio-flters li {
  cursor: pointer;
  margin: 15px 15px 15px 0;
  display: inline-block;
  padding: 6px 20px;
  font-size: 12px;
  line-height: 20px;
  border-radius: 50px;
  text-transform: uppercase;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}
</style>