
<?php
	
	$type = 1;
	$payoff = 'Ledord för oss är respons, nyfikenhet, affärsförståelse och kvalitetsinsatser.';

	if( isset( $module ) ) {
		$type = $module->type;
		$payoff = $module->words;
	}
	else {
		$post_payoff = papi_get_field( 'payoff' );
		if( $post_payoff ) $payoff = $post_payoff;
		$type=2;
	}

?>


@if( $type == 2 )
	<div class="w-section sectiongreypayoff">
		<div class="w-container">
			<h2 class="startpagepayoff1 payoff2">{{ $payoff }}</h2>
		</div>
	</div>
	@include('views.parts.pointers.gray_right')
@else
	<div class="w-section startpagesectionpayoff1">
		<div class="w-container">
			<h1 class="startpagepayoff1">{{ $payoff }}</h1>
		</div>
	</div>
@endif

