<div class="w-section sectionarticlecontent">
  <div class="w-container">
    <div class="articlecontetnwrapper">

    <?php 

      $content = apply_filters( 'the_content', get_the_content() );
      $content = str_replace( ']]>', ']]&gt;', $content );

      $content = str_replace( '<h2>', '<h2 class="contenth2 articleh2">', $content );
      $content = str_replace( '<h3>', '<h3 class="contenth3">', $content );
      $content = str_replace( '<h4>', '<h4 class="contenth4">', $content );
      $content = str_replace( '<p>', '<p class="contentbodytext">', $content );
    ?>

      {{ $content }}

      <p>&nbsp;</p>
      @include('views.parts.swisch')

    </div>
  </div>
</div>

  