@if( $module->type == 2 )
	<div class="w-section sectiongreypayoff">
		<div class="w-container">
			<h2 class="startpagepayoff1 payoff2">{{$module->words}}</h2>
		</div>
	</div>
	@include('views.parts.pointers.gray_right')
@else
	<div class="w-section startpagesectionpayoff1">
		<div class="w-container">
			<h1 class="startpagepayoff1">{{$module->words}}</h1>
		</div>
	</div>
@endif

