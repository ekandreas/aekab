<div class="w-section sectionblog2cols">
    <div class="w-container">
      <div class="w-row">

        <div class="w-col w-col-12">
	        <p>&nbsp;</p>
			<h1 class="contenth2">{{ strtoupper( $category_name ) }}</h1>
		</div>
        
        <div class="w-col w-col-8">

			@if( have_posts() )

				@while( have_posts() )
					
					<?php the_post(); ?>

					@include('views.parts.post.pusher')

				@endwhile

			@else

			@endif

	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>

        </div>

        <div class="w-col w-col-4">

	        @include('views.parts.page.categories')

	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>

        </div>
      </div>
    </div>
  </div>
