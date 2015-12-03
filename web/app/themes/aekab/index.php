@layout('views.layouts.master')

@section('main')

<?php 

	if( is_front_page() ) {

		var_dump( papi_get_field( 'page_modules') );
  //include('views.parts.homepage.hero')
  //include('views.parts.homepage.pusher')
  //include('views.parts.homepage.bigcat')

	}

?>

@endsection