<?php $pageTitle = 'welcome';?>
@include('master.header')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
      <h1>HELLO, I'M DAUDI KAJILO</h1>
      <h2>I'm a full stack web developer</h2>
    <a href="{{route("about")}}" class="btn-about">About Me</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Footer ======= -->
 @include('master.footer')