        <div class="w-col w-col-4">
          <div class="contactwrapper">
            <div class="w-clearfix puffheader">
              <div class="puffheaderleft">
                <div class="puffcontactheader">
                  <h3 class="puffcontactheaderh3">Kontakt</h3>
                </div>
              </div>
              <div><img alt="Andreas Ek" width="300" src="{{wp_get_attachment_image_src( get_post_thumbnail_id( $contact_id ), 'medium' )[0]}}" class="puffcontactpic">
              </div>
              <div class="puffcontentdiv">
                <div class="puffcontactname">{{ papi_get_field( $contact_id, 'name' ) }}</div>
                <div class="puffcontacttitle">{{ papi_get_field( $contact_id, 'title' ) }}</div>
                <a href="tel:{{ papi_get_field( $contact_id, 'phone_tel' ) }}" class="puffcontactphone">{{ papi_get_field( $contact_id, 'phone_text' ) }}</a>
                <a href="mailto:{{ papi_get_field( $contact_id, 'email' ) }}" class="puffcontactmail">{{ papi_get_field( $contact_id, 'email' ) }}</a>
              </div>
            </div>
          </div>
        </div>
