

          <div class="w-clearfix blogpuffdiv">
            <div class="blogpufffleft">

              @if( has_post_thumbnail() )
                <img height="200" alt="BloggPuffPic" src="{{ wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' )[0] }}" class="bloggpuffpic" />
              @endif

              <div class="blogpufftooldiv">
                <div class="w-clearfix blogtoolinner">
                  <div class="blogtoolleft">
                    <div class="blogtoolnumber"></div>
                  </div>
                  <div class="blogtoolright">
                    <div class="blogtoolnumber"></div>
                  </div>
                </div>
                <div class="blogpuffbtndiv">
                  <a href="{{ get_the_permalink() }}" class="w-inline-block blogbtnblock">
                    <div class="blogpuffbtntxt">{{ __('Läs mer','aekab') }}</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="blogpuffright">
              <div class="w-clearfix blogpuffheaderdiv">
                <div class="blogpuffheaderleft">

                  @if( papi_get_page_type_id() == 'blog-post' )
                        <div class="blogpuffdate">{{ __('BLOGGPOST','AEKAB' ) }}</div>
                  @elseif( papi_get_page_type_id() == 'portfolio-post' )
                        <div class="blogpuffdate">{{ __('UPPDRAG','AEKAB' ) }}</div>
                  @else
                        <div class="blogpuffdate">{{ __('NYHET','AEKAB' ) }}</div>
                  @endif

                </div>
                <div class="blogpuffheaderright">
                  <?php $main_cat = papi_get_field( 'main_category' ); ?>
                  @if( $main_cat && property_exists( $main_cat, 'name' ) )
                    <div class="blogpuffheadertxt">{{ $main_cat->name }}</div>
                  @endif
                </div>
              </div><a href="{{ get_the_permalink() }}" class="w-inline-block blogpuffclickarea"><h3 class="blogpuffheadline">AEKAB bygger socialt intranät</h3><p class="blogpuffbody">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornar...</p></a>
            </div>
          </div> 

