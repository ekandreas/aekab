<head>
  <meta charset="utf-8">
  <title>Elseif</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="generator" content="Webflow">
  <link rel="stylesheet" type="text/css" href="{{ ekandreas\Assets\asset_path('styles/main.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700","Bitter:400,700,400italic","Domine:regular,700"]
      }
    });
  </script>
  <script type="text/javascript" src="{{ get_stylesheet_directory_uri() . '/assets/scripts/modernizr.js' }}"></script>

  <link rel="apple-touch-icon" sizes="57x57" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ ekandreas\Assets\asset_path('images/favicons/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ ekandreas\Assets\asset_path('images/favicons/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ ekandreas\Assets\asset_path('images/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ ekandreas\Assets\asset_path('images/favicons/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ ekandreas\Assets\asset_path('images/favicons/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ ekandreas\Assets\asset_path('images/favicons/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ ekandreas\Assets\asset_path('images/favicons/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">

  @if( has_post_thumbnail(get_the_ID()) )
    <meta property="og:image" content="{{ wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0] }}" /> 
  @else
    <meta property="og:image" content="{{ ekandreas\Assets\asset_path('assets/images/symbol.png')  }}" /> 
  @endif

  <meta name="google-site-verification" content="DQ4VLtFXFZhD0gvqtd79K89i8imKoFwGd_qSNSLcPkY" />

  {{ wp_head() }}

</head>
