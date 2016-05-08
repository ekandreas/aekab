  <div class="w-section sectionfooter">
    <div class="w-container">
      <div class="w-row footerrow">
        <div class="w-col w-col-6"><img alt="Logo AEKAB" width="174" src="{{ ekandreas\Assets\asset_path('images/elseif.png') }}" class="footerlogo">
          <p class="footerp">
            {{ papi_get_option('footer_summary') }}
          </p>
          <div class="w-clearfix footersharediv">
            <div class="footerheartbox">
              <div class="footerheartnumber">Code</div>
            </div>
          </div>
        </div>
        <div class="w-col w-col-3 colfooter">
          <div class="w-hidden-small w-hidden-tiny footerrightbox">
            <h3 class="footerh3">{{ papi_get_option('footer_link1_text') }}</h3>
            <ul class="w-list-unstyled footerlinklist">
              @if( $links = papi_get_option('footer_link1_links') )
                @foreach( $links as $link )
                  <li>
                    <a target="{{ $link['link']->target }}" href="{{ $link['link']->url }}" class="footerlistlink">{{ $link['link']->title }}</a>
                  </li>
                @endforeach
              @endif
            </ul>
          </div>
          <div class="w-hidden-small w-hidden-tiny footerrightbox">
            <h3 class="footerh3">{{ papi_get_option('footer_contact_headline') }}</h3>
            <p class="footerdata">
              {!! str_replace("\n","<br/>", papi_get_option('footer_contact_text1') ) !!}
            </p>
          </div>
        </div>
        <div class="w-col w-col-3 colfooter3">
          <div class="w-hidden-small w-hidden-tiny footerrightbox">
            <h3 class="footerh3">{{ papi_get_option('footer_link2_text') }}</h3>
            <ul class="w-list-unstyled footerlinklist">
              @if( $links = papi_get_option('footer_link2_links') )
                @foreach( $links as $link )
                  <li>
                    <a target="{{ $link['link']->target }}" href="{{ $link['link']->url }}" class="footerlistlink">{{ $link['link']->title }}</a>
                  </li>
                @endforeach
              @endif
            </ul>
          </div>
          <div class="w-hidden-small w-hidden-tiny footerrightbox">
            <h3 class="footerh3 footerh3hide">&nbsp;</h3>
            <p class="w-hidden-small w-hidden-tiny footerdata">
              {!! str_replace("\n","<br/>", papi_get_option('footer_contact_text2') ) !!}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="w-section sectiondarkfooter"></div>
