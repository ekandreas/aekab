          <!--nav role="navigation" class="w-nav-menu navmenu">
            <a href="index.html" class="w-nav-link topnavlink activemenustate">Hem</a>
            <a href="erbjudande.html" class="w-nav-link topnavlink">Erbjudande</a>
            <a href="om-oss.html" class="w-nav-link topnavlink">Om oss</a>
            <a href="blogg.html" class="w-nav-link topnavlink">Blogg</a>
            <a href="kontakt.html" class="w-nav-link topnavlink">Kontakt</a>
          </nav-->

          <?php

              if( has_nav_menu('primary_navigation') ) {

                $cleanmenu = wp_nav_menu( [
                    'menu'              => 'primary_navigation',
                    'theme_location'    => 'primary_navigation',
                    'depth'             => 1,
                    'container'         => false,
                    'items_wrap' => '<nav role="navigation" class="w-nav-menu navmenu">%3$s</nav>',
                    'fallback_cb' => 'wp_page_menu',
                    'echo' => false,
                ]);

				echo preg_replace( '/<li class.*?>(.*)<\/li>/', '$1', $cleanmenu );

              }


          ?>