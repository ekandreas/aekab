<div class="w-section heroblogpage" style="background-image: url('{{ wp_get_attachment_image_src( get_post_thumbnail_id( $module->id ), 'full' )[0] }}');">
  <div class="heroblogwrapper">
    <div class="w-container">
      <div class="blogheroframeheadlinediv">
        <h1 class="frameheadline frameheadlineblog">{{the_title()}}</h1>
      </div>
      <div class="herotxt herotxtblog">{{ $module->herotext }}</div>
      <div class="swischdivblog"><img alt="Swisch" width="803" src="{{ ekandreas\Assets\asset_path('images/swisch1.png') }}">
      </div>
    </div>
  </div>
</div>
@include('views.parts.share')
