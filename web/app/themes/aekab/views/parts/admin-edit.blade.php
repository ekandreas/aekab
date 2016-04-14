@if(current_user_can('administrator'))
  <div class="w-container">
    <a target="_blank" class="footeremaillink w-inline-block" href="{{ admin_url('post.php?action=edit&post='.$module->id)}}"><i class="fa fa-edit"></i> Edit module '{{ get_the_title($module->id) }}'</a>
  </div>
@endif