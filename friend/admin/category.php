<?php
    /*
     *       Classic Responsive Osclass Themes
     *       
     *       Copyright by Osclass.me
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please contact cs@osclass.me
     *
     *       Special thanks and credit for all source can see in /includes/credit/credit.txt
     */
     ?>
<?php
function classic_images($category_classic, $deep = 0) {
  foreach($category_classic as $c) { 
  echo '<div' . ($deep == 0 ? ' class="satu-area col-md-7"' : '') . '>';
  echo '<div' . ($deep == 1 ? ' class="none"' : '') . '>';
  echo '<div' . ($deep == 2 ? ' class="none2"' : '') . '>';
  echo '<div' . ($deep == 3 ? ' class="none3"' : '') . '>';
       echo '<div class="sub' . $deep . ' name">' . $c['s_name'] .'</div>';
    if (file_exists(osc_themes_path() . 'classic/images/category/' . $c['pk_i_id'] . '.png')) {
    echo '<div class="image_show"><img style="height:150px; width:200px;" src="' . osc_base_url() . 'oc-content/themes/classic/images/category/' . $c['pk_i_id'] . '.png" /></div>';

    ?>
   <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-3'); ?>" method="post" enctype="multipart/form-data">
     <input type="hidden" name="action_specific" value="remove_category" />
     <input type="hidden" value="<?php echo $c['pk_i_id']; ?>" name="id_remove"/>
     <div class="uploader">
      <button type="submit" id="delete_image_bt" class="btn btn-red"><?php echo osc_esc_html(__('Remove','classic')); ?></button> 
      </div>
    </form>
   <?php   
    } else { 
   ?>
   <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-3'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="action_specific" value="up_category" />
      <input class="add_image" type="file" name="set_image" id="package" />
     <input type="hidden" value="<?php echo $c['pk_i_id']; ?>" name="id_category"/>    
     <div class="uploader">
      <div class="save"><input id="button_save" type="submit" value="<?php echo osc_esc_html(__('Upload','classic')); ?>" class="btn btn-submit"></div>  
      </div>
      <p><?php echo osc_esc_html(__('Recommended size','classic')); ?> <?php echo osc_esc_html(__('200 x 150','classic')); ?></p>
    </form>
   <?php
    } 
  echo '</div>';
  echo '</div>';
  echo '</div>';
  echo '</div>';  
    if(isset($c['categories']) && is_array($c['categories']) && !empty($c['categories'])) {
      classic_images($c['categories'], $deep+1);
    }
  }
}

?>
<h2 class="render-title"><?php _e("Category Images", 'classic'); ?></h2>
<form name="promo_form" id="load_image" action="<?php echo osc_admin_render_theme_url('oc-content/themes/classic/admin/settings.php#tab-3'); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="action_specific" value="classic_images" />
    <fieldset>
        <div class="form-horizontal">
            <div class="body2">
                <?php echo classic_images(Category::newInstance()->toTree(), 0); ?> </div>
        </div>
    </fieldset>
</form>