  <div class="w-section heroservicespage" style="background-image: url('{{ wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' )[0] }}');">
    <div class="heroserviceswrapper">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-6"></div>
          <div class="w-col w-col-6 servicepageherocol2">
            <div class="servicepageswischdiv"><img alt="Swisch" width="803" src="{{ ekandreas\Assets\asset_path('images/swisch1.png') }}">
            </div>
            <h1 class="frameheadline">{{the_title()}}</h1>
            <div class="herotxt">{{ $module->herotext }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('views.parts.pointers.blue_left')
