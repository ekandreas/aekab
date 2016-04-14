@if( is_user_logged_in() )
	@if( current_user_can( 'edit_post', $module->ID ) )
		<div style="position:absolute;top:0;text-align:right;width:92%">
			<a target="_blank" href="{{ admin_url('edit.php') }}?post={{ $module->ID }}&action=edit" ><i class="fa fa-pencil"></i> Edit module</a>
		</div>
	@endif
@endif

