<div class="w-section sectionblog2cols">
    <div class="w-container">
      <div class="w-clearfix blogtogglenewsdiv">
        <div class="w-clearfix blogtog1">
          <a href="?filter-posts=news-post" class="w-inline-block blogtogglebtn tbtn1">
            <div class="blogtoggletxt">{{ __('Nyheter AEKAB','aekab') }}</div>
          </a>
        </div>
        <div class="blogtog1">
          <a href="?filter-posts=portfolio-post" class="w-inline-block blogtogglebtn tbtn2">
            <div class="blogtoggletxt">{{ __('UPPDRAG&nbsp;AEKAB','aekab') }}</div>
          </a>
        </div>
        <div class="blogtog1">
          <a href="?filter-posts=blog-post" class="w-inline-block blogtogglebtn">
            <div class="blogtoggletxt">{{ __('BLOGGPOSTER','aekab') }}</div>
          </a>
        </div>
      </div>
      <div class="w-row">

        <div class="w-col w-col-8">

          <?php

            $args = [
              'post_type' => 'post'
            ];

            if( isset($_REQUEST['filter-posts']) ) {

                $args['meta_key'] = PAPI_PAGE_TYPE_KEY;
                $args['meta_value'] = esc_attr($_REQUEST['filter-posts'] );

            }

            $bladequery = new WP_Query($args);
            if ( $bladequery->have_posts() ) {
              while ( $bladequery->have_posts() )  {
                $bladequery->the_post();
                ?>
                @include('views.parts.post.pusher')
                <?php
              }
            }
            wp_reset_postdata();
          ?>

          <!--a href="#" class="w-inline-block blogmorearticlesbtn">
            <div class="blogmorearticlesbtntxt">Visa fler</div>
          </a-->
          <p>&nbsp:</p>

        </div>

        <div class="w-col w-col-4">

          @include('views.parts.page.categories')

        </div>
      </div>
    </div>
  </div>
  @include('views.parts.pointers.gray_right')
  @include('views.parts.swisch')

