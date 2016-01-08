  <div class="w-section sectioncontentandpuff">
    <div class="w-container">
      <div class="w-row">
        <div class="w-col w-col-8 contentcol2">
          <h2 class="contenth2">{{$module->headline}}</h2>
          <p class="contentintro">{{$module->intro}}</p>
          <h3 class="contenth3">{{$module->headline2}}</h3>

          @if( $module->blocks )
            <?php $blocks = papi_get_field( $module->ID, 'blocks' ); ?>
            @foreach( $blocks as $block ) 
              <h4 class="contenth4">{{ $block['headline'] }}</h4>
              <p class="contentbodytext">{{ $block['text'] }}</p>
            @endforeach
          @endif

        </div>
        @include('views.modules.contact', ['contact_id'=>$module->contact])
      </div>
    </div>
  </div>
  @include('views.parts.swisch')