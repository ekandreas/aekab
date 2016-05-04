<head>
  <meta charset="utf-8">
  <title>AEKAB</title>
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
  <link rel="shortcut icon" type="image/x-icon" href="{{ ekandreas\Assets\asset_path('images/logo32.png') }}">
  <link rel="apple-touch-icon" href="{{ ekandreas\Assets\asset_path('images/logo256.png') }}">

  @if( has_post_thumbnail(get_the_ID()) )
    <meta property="og:image" content="{{ wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium' )[0] }}" /> 
  @else
    <meta property="og:image" content="{{ ekandreas\Assets\asset_path('assets/images/aekab-symbol.png')  }}" /> 
  @endif

  <meta name="google-site-verification" content="DQ4VLtFXFZhD0gvqtd79K89i8imKoFwGd_qSNSLcPkY" />

  {{ wp_head() }}

</head>
