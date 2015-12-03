<div class="w-section heroaboutpage" style="background-image: url('{{ wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' )[0] }}');">
    <div class="heroaboutwrapper">
      <div class="w-container">
        <div class="w-row">
          <div class="w-col w-col-7 aboutpageherocol1">
            <h1 class="frameheadline">{{the_title()}}</h1>
            <div class="herotxt">
              {{ $module->herotext }}
            </div>
            <div class="aboutheroswisch"><img alt="Swisch" width="802" src="{{ ekandreas\Assets\asset_path('images/swisch2.png') }}">
            </div>
          </div>
          <div class="w-col w-col-5"></div>
        </div>
      </div>
    </div>
  </div>  
  @include('views.parts.pointers.blue_left')