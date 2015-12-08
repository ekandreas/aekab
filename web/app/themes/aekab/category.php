@layout('views.layouts.master')

@section('main')

	@include('views.parts.post.category-list', ['category_name'=> get_the_category( get_the_ID() )[0]->name ] )

	@include('views.parts.pointers.gray_right')
	@include('views.parts.swisch')


@endsection



