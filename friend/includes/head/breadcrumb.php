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
<?php $breadcrumb = osc_breadcrumb('&raquo;', false, get_breadcrumb_lang());
        if( $breadcrumb !== '') { ?>
        <div class="container">
        <div class="breadcrumbs">
            <?php echo $breadcrumb; ?>
            <div class="clear"></div>
        </div>
        </div>
<?php } ?>