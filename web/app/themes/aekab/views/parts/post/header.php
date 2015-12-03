
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60162402-1', 'auto');
  ga('send', 'pageview');

</script>

<div class="w-section articlepageherobg" style="background-image: url('{{ wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' )[0] }}');">
  <div class="articleherowrapper">
    <div class="w-container">
      <div class="articlebreadcrumbdiv"><a href="/" class="breadcrumblink">Startsida</a>
        <div class="breadcrumblink">/</div><a href="/blogg" class="breadcrumblink">blogg</a>
        <div class="breadcrumblink">/</div>
        <div class="breadcrumblink">{{ the_title() }}</div>
      </div>
      <div class="framedivarticle">

          @if( papi_get_page_type_id() == 'blog-post' )
                <h1 class="frameheadline frameheadlineblog frameheadlinearticle">{{ __('BLOGGPOST','AEKAB' ) }}</h1>
          @elseif( papi_get_page_type_id() == 'portfolio-post' )
                <h1 class="frameheadline frameheadlineblog frameheadlinearticle">{{ __('UPPDRAG','AEKAB' ) }}</h1>
          @else
                <h1 class="frameheadline frameheadlineblog frameheadlinearticle">{{ __('NYHET','AEKAB' ) }}</h1>
          @endif

      </div>
      <h1 class="articleheroh1">{{ the_title() }}</h1>
      <div class="articleswischdiv"><img alt="Swisch" width="802" src="{{ ekandreas\Assets\asset_path('images/swisch2.png') }}">
      </div>
    </div>
  </div>
</div>
