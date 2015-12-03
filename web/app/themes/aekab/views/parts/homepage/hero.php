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
              <a href="{{ get_permalink($module->buttonpost1) }}" class="w-inline-block startpageherobtn1">
                <div class="startpageherobtn1text">{{ $module->buttontitle1 }}</div>
              </a>
            </div>
            <div class="w-col w-col-6 w-col-small-6">
              <a href="{{ get_permalink($module->buttonpost2) }}" class="w-inline-block startpageherobtn2">
                <div class="startpageherobtn1text startpageherobtn2text">{{ $module->buttontitle1 }}</div>
              </a>
            </div>
          </div>
        </div>
        <div data-ix="scrollfingerback" class="startpageherofingerdiv"></div>
      </div>
    </div>
  </div>
  @include('views.parts.pointers.blue_right')
