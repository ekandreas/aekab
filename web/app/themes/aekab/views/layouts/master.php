<!DOCTYPE html>
<html>
@include('views.parts.head')
<body>
  @include('views.parts.header')

  @yield('main')

  @include('views.parts.footer')
  @include('views.parts.scripts')
</body>
</html>