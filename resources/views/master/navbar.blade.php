<nav class="nav-menu d-none d-lg-block">
    <ul>
    <li class="<?php if($pageTitle == 'welcome'){echo 'active';}?>"><a href="{{ url('/') }}">Home</a></li>
    <li class="<?php if($pageTitle == 'about'){echo 'active';}?>"><a href="{{ route("about") }}">About</a></li>
    <li class="<?php if($pageTitle == 'resume'){echo 'active';}?>"><a href="{{ route("resume") }}">Resume</a></li>
    <li class="<?php if($pageTitle == 'projects'){echo 'active';}?>"><a href="{{ route("services") }}">Projects</a></li>
    <li class="<?php if($pageTitle == 'portfolio'){echo 'active';}?>"><a href="{{ route("portfolio") }}">Portfolio</a></li>
    <li class="<?php if($pageTitle == 'contact'){echo 'active';}?>"><a href="{{ route("contact") }}">Contact</a></li>
    </ul>
  </nav><!-- .nav-menu -->

  <div class="header-social-links">
    <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
    <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
  </div>
