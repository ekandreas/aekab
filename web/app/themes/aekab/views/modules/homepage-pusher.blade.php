  <div class="w-section">
    <div class="w-container startpageh2container">
      <div class="startpageselectorleft">
        <h2 class="startpageh2">{{$module->headline}}</h2>
      </div>
    </div>
  </div>
  <div class="w-section startpageselectionpuffs">
    <div class="w-container">
      <div class="w-row">

      @if( $module->posts )
        @foreach( $module->posts as $post )

          <div class="w-col w-col-4">
            <div class="puffwrapper">
              @if( papi_get_page_type_id( $post->ID ) == 'blog-post' )
              <div class="w-clearfix puffheader puffheaderbrown">
              @elseif( papi_get_page_type_id($post->ID ) == 'portfolio-post' )
              <div class="w-clearfix puffheader puffheaderpurple">
              @else
              <div class="w-clearfix puffheader">
              @endif
                <div class="w-clearfix puffheaderleft">
                  <div class="puffheaderleftinsideleft">
              
                  @if( papi_get_page_type_id( $post->ID ) == 'blog-post' )
                        <div class="puffheadernumbers">{{ __('BLOGGPOST','AEKAB' ) }}</div>
                  @elseif( papi_get_page_type_id( $post->ID ) == 'portfolio-post' )
                        <div class="puffheadernumbers">{{ __('UPPDRAG','AEKAB' ) }}</div>
                  @else
                        <div class="puffheadernumbers">{{ __('NYHET','AEKAB' ) }}</div>
                  @endif

                  </div>
                  <div class="puffheaderleftinsideright">
                    <div class="puffheadernumbers"></div>
                  </div>
                </div>
                <div class="w-clearfix puffheaderright">
                  <div class="w-clearfix puffheaderrightinside">
                    <div class="puffheaderdate">{{ get_the_date( 'j' ) }} {{ strtolower( get_the_date( 'F' ) ) }} {{ get_the_date( 'Y' ) }}</div>
                  </div>
                </div>
                <div class="puffbggradient">
                  @if( has_post_thumbnail($post->ID) )
                    <img src="{{ wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' )[0] }}" class="puff-pic" width="300" height="154" />
                  @endif
                  <a href="{{ the_permalink($post->ID) }}" class="w-inline-block puffbtn">
                    <div class="puffbtntext">Läs mer</div>
                  </a>
                </div>
                <div class="puffcontentdiv"><a href="{{ the_permalink($post->ID) }}" class="w-inline-block startpagepuffclickarea"><h3 class="puffheadline">{{ get_the_title( $post->ID ) }}</h3><p class="puffbread">{!! get_post_excerpt( $post->ID ) !!}</p></a>
                </div>
              </div>
            </div>
          </div>


            @endforeach
          @endif

          <?php wp_reset_postdata(); ?>
            

        </div>
      </div>
    </div>
  </div>
  <div class="w-section sectionpuffsmorenews">
    <div class="w-container">
      <?php $more = papi_get_field( $module->ID, 'more' ); ?>
      @if( $more )
      <a href="{{ $more->url }}" class="w-inline-block startpagelinkblockmorenews">
        <div>{{ $more->title }}</div>
      </a>
      @endif
    </div>
  </div>
  @include('views.parts.swisch')
