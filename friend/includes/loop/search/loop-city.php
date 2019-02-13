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
<form action="<?php echo osc_base_url(true); ?>" method="get" role="search" class="nocsrf">
    <input type="hidden" name="page" value="search" />
    <fieldset>
        <div class="col-md-15">
                <input type="text" name="sPattern" class="form-control ones" placeholder="<?php echo osc_esc_html(__(osc_get_preference('keyword_placeholder', 'classic_theme'), 'classic')); ?>" value="" />
        </div>
        <div class="col-md-15">
            <?php if ( osc_count_categories() ) { ?>
                <div class="cell selector">
                    <?php osc_categories_select('sCategory', null, __('Select a category', 'classic')) ; ?>
            </div>
            <?php } ?> </div>
        <div class="col-md-15">
                <div class="cell selector">
                    <?php classic_regions_select('sRegion', 'sRegion', __('Select a region', 'classic')) ; ?>
            </div>
        </div>
        <div class="col-md-15">
                <div class="cell selector">
                    <?php classic_cities_select('sCity', 'sCity', __('Select a city', 'classic')) ; ?>
            </div>
        </div>
        <div class="col-md-15">
                <input type="submit" class="btn btn-primary btn-block btn-five" value="<?php echo osc_esc_html(__('Search','classic')); ?>">
        </div>
    </fieldset>
</form>
<script>
$("#sCategory").addClass("form-control twos", true);
</script>