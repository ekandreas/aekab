          <div class="blogcatwrapper">
            <div class="w-clearfix puffheader">
              <div class="w-clearfix puffheaderleft">
                <div class="w-clearfix puffcatdiv">
                  <h3 class="puffcatheader">{{ __('Kategorier','aekab') }}</h3>
                </div>
              </div>
            </div>
            <div class="blogcatcontent">

              @foreach( get_categories([]) as $category )
                <a href="{{ get_category_link( $category->term_id ) }}" class="w-inline-block blogcatbtn">
                  <div class="blogcatbtntxt">{{ $category->name }}</div>
                </a>
              @endforeach

            </div>
          </div>
