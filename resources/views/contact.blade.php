<?php $pageTitle='contact';?>
@include('master.header')
  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Thank you for visiting my portfolio, please contact or leave me a message by filling the form below.</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Dar es salaam</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>kajilodaudi@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+255-768-423-564 | +255-716-219-069</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{ route('contactMe') }}" method="post" role="form" class="contact-form">
            @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"  placeholder="Message" required></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                @if ($errors->any())
                <div class="error-message">
                    @foreach ($errors->all() as $error)
                     {{ $error}}
                    @endforeach
                </div>
                @elseif(session('sent-message'))
                <div class="sent-message">
                  {{session('sent-message')}}
                </div>
                @endif
               
                {{-- <div class="loading">Loading</div>--}}
                
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
   
  </footer><!-- End  Footer -->
@include('master.footer')