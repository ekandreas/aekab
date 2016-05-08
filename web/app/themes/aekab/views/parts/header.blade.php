<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60162402-1', 'auto');
  ga('send', 'pageview');

</script>

  <div class="w-section w-clearfix header">
    <div class="w-hidden-small w-hidden-tiny headersocialright">
      <a href="http://www.linkedin.com/aekab" class="w-hidden-medium w-hidden-small w-hidden-tiny w-inline-block btnsocialheader"><img alt="LinkedIn" width="36" src="{{ ekandreas\Assets\asset_path('images/icon-in-header.png') }}">
      </a>
      <a href="http://www.twitter.com/aekab" class="w-hidden-medium w-hidden-small w-hidden-tiny w-inline-block btnsocialheader"><img alt="Twitter" width="36" src="{{ ekandreas\Assets\asset_path('images/icon-tw-header.png') }}">
      </a>
      <a href="http://www.facebook/aekab" class="w-hidden-medium w-hidden-small w-hidden-tiny w-inline-block btnsocialheader lastsocial"><img alt="Facebook" width="36" src="{{ ekandreas\Assets\asset_path('images/icon-fb-header.png') }}">
      </a>
    </div>
    <div class="w-container headercontainer">
      <div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navbarheader">
        <div class="w-container navcontainer">
          
          <a href="/" class="w-nav-brand"><img alt="AEKAB Logo" width="191" src="{{ ekandreas\Assets\asset_path('images/elseif-mixed-white.png') }}" class="logo-header">
          </a>
          
          @include('views.parts.nav')

          <div class="w-nav-button menubtn">
            <div class="w-icon-nav-menu mobile-hamburger"></div>
          </div>

        </div>
      </div>
    </div>
  </div>
