@layout('views.layouts.master')

@section('main')

	@if( have_posts() )

		@while( have_posts() )
			
			<?php the_post(); ?>

			@include('views.parts.post.header')
			@include('views.parts.post.tools')
			@include('views.parts.post.content')

		@endwhile

	@else

	@endif

	@include('views.modules.payoff')

@endsection