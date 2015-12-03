@layout('views.layouts.master')

@section('main')

	<?php 
		$modules = papi_get_field( get_the_ID(), 'page_modules');
	?>
	
	@if( $modules )
		@foreach( $modules as $module )
			@include( rtrim( papi_get_page_type_template($module->ID), '.php' ), [ 'module' => papi_get_page($module->ID) ] )
		@endforeach
	@endif

@endsection