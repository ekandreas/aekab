  <div class="w-section sectiontoolsgeneral">
    <div class="w-container">
      <div class="w-clearfix toolssharediv">
        <a href="https://twitter.com/share" class="w-inline-block toolssharebtn"{count} data-size="large">{{ __('Twitter','aekab') }}</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </div>
    </div>
  </div>
  
  @if( papi_get_field( 'paper_start' ) )
    @include('views.parts.pointers.paper_blue_left')
  @else
    @include('views.parts.pointers.blue_left')
  @endif

