  <div class="w-section herostartpage">
    <div class="startpageherowrapper">
      <div class="startpageswisch">
        <div class="w-container startpageherocontainer">
          <div class="startpageheadline"><span class="startpageheadlinespan">{{ substr( $module->top_word, 0, 1 ) }}</span>{{ substr( $module->top_word, 1 ) }}</div>
          <div class="w-clearfix startpageherothreecols">
            <div class="startpageherocolone"></div>
            <div class="startpageherocoltwo">
              <div class="startpageherohardu">{{ $module->headliner }}</div>
            </div>
            <div class="startpageherocolthree"></div>
          </div>
          <div class="startpageheaderend">{{ $module->thirdliner }}</div>
          <p class="startpageherop">{{ $module->sellpoint }}</p>
          <div class="w-row startpageherorow">
            <div class="w-col w-col-6 w-col-small-6 w-clearfix">
              <?php $link = papi_get_field( $module->ID, 'link1' ) ?>
              @if( $link )
                <a href="{{ $link->url }}" class="w-inline-block startpageherobtn1">
                  <div class="startpageherobtn1text">{{ $link->title }}</div>
                </a>
              @endif
            </div>
            <div class="w-col w-col-6 w-col-small-6">
              <?php $link = papi_get_field( $module->ID, 'link2' ) ?>
              @if( $link )
                <a href="{{ $link->url }}" class="w-inline-block startpageherobtn2">
                  <div class="startpageherobtn1text startpageherobtn2text">{{ $link->title }}</div>
                </a>
              @endif
            </div>
          </div>
        </div>
        <div data-ix="scrollfingerback" class="startpageherofingerdiv"></div>
      </div>
    </div>
  </div>
  @include('views.parts.pointers.blue_right')
