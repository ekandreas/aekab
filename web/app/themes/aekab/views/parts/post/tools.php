<div class="w-section sectiontoolsgeneral articletools">
  <div class="w-container">
  <?php 
    $prev = get_previous_post(); 
    $next = get_next_post();
  ?>

    @if( $next )
    <a href="{{ get_permalink( $next->ID ) }}" class="w-inline-block blognext">
      <div class="blogprevioustxt blognexttxt">{{ __('Nästa','aekab') }}</div>
    </a>
    @endif

    @if( $prev )
    <a href="{{ get_permalink( $prev->ID ) }}" class="w-inline-block blog-previous">
      <div class="blogprevioustxt">{{ __('Föregående','aekab') }}</div>
    </a>
    @endif

    <div class="w-clearfix toolssharediv toolsarticle">
      <div class="articletoolbardate">{{ get_the_date( 'j' ) }} {{ strtolower( get_the_date( 'F' ) ) }} {{ get_the_date( 'Y' ) }}</div>
        <a target="_blank" href="https://twitter.com/share" class="w-inline-block toolssharebtn"{count} data-size="large">{{ __('Twitter','aekab') }}</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
  </div>
</div>
<div class="w-section">
    <div class="sectionbluepointerleft _30margin"></div>
</div>