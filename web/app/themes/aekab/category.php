@layout('views.layouts.master')

@section('main')


<div class="w-section sectionblog2cols">
    <div class="w-container">
      <div class="w-row">

        <div class="w-col w-col-12">
			<h1>{{ get_the_category( get_the_ID() )[0]->name }}</h1>
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
  @include('views.parts.pointers.gray_right')
  @include('views.parts.swisch')


@endsection



