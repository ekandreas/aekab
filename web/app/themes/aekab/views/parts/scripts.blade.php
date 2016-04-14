  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

{{ wp_footer() }}

<script>
	jQuery(document).ready(function($){
		$('img.articlebigpic').each(function(){
			$(this).removeAttr('width');
			$(this).removeAttr('height');
		});
		$('figure').each(function(){
			$(this).removeAttr('style');
		});
	});
</script>