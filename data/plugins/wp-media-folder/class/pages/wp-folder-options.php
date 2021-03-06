<h2><?php _e('Media Folder Settings','wpmf') ?></h2>
<form name="form1" id="form_list_size" action="" method="post">
    
    <div class="usegellery">
        <label class="title" style="float: left;"><?php _e('Gallery feature','wpmf'); ?></label>
        <input type="checkbox" class="btngallery" <?php if(isset($usegellery) && $usegellery== 1) echo 'checked' ?>>
        <label style="float: left;"><?php _e('Enable the gallery feature','wpmf'); ?></label>
    </div>
    <!--    setting sizes     -->
    
    <div id="gallery_image_size">
        <ul class="image_size">
            <li class="gallery_image_size accordion-section control-section control-section-default open">
                <h3 class="accordion-section-title wpmf-section-title sizes_title" data-title="sizes" tabindex="0"><?php _e('Gallery image sizes available','wpmf') ?></h3>
                <ul class="content_list_sizes">
                    <?php
                    //global $_wp_additional_image_sizes;
                        $sizes = apply_filters( 'image_size_names_choose',array(
                            'thumbnail' => __('Thumbnail'),
                            'medium'    => __('Medium'),
                            'large'     => __('Large'),
                            'full'      => __('Full Size'),
                        ) );
                    foreach ($sizes as $key => $size):
                    ?>

                    <li class="customize-control customize-control-select" style="display: list-item;">
                        <input type="checkbox" name="size_value[]" value="<?php echo $key ?>" <?php if(in_array($key, $size_selected )) echo 'checked' ?> >
                        <span><?php echo $size ?></span>
                    </li>
                    <?php endforeach; ?>
                
                </ul>
                <p class="description"><?php _e('Select the image size you can load in galleries. Custom image size available here can be generated by 3rd party plugins','wpmf'); ?></p>
            </li>
        </ul>
    </div>
    
    <!--    setting padding     -->
    <div id="gallery_image_padding">
        <ul class="image_size">
            <li class="gallery_image_padding accordion-section control-section control-section-default open">
                <h3 class="accordion-section-title wpmf-section-title padding_title" data-title="padding" tabindex="0"><?php _e('Gallery themes settings','wpmf') ?></h3>
                <ul class="content_list_padding">
                    <li class="customize-control customize-control-select" style="display: list-item;">
                        <span><?php _e('Masonry Theme','wpmf'); ?></span>
                        <label><?php _e('Space between images (padding)','wpmf') ?></label>
                        <input name="padding_gallery[wpmf_padding_masonry]" class="padding_gallery small-text" type="number" min="0" max="30" value="<?php echo $padding_masonry ?>" >
                        <label><?php _e('px','wpmf') ?></label>
                    </li>
                    
                    <li class="customize-control customize-control-select" style="display: list-item;">
                        <span><?php _e('Portfolio Theme','wpmf'); ?></span>
                        <label><?php _e('Space between images (padding)','wpmf') ?></label>
                        <input name="padding_gallery[wpmf_padding_portfolio]" class="padding_gallery small-text" type="number" min="0" max="30" value="<?php echo $padding_portfolio ?>" >
                        <label><?php _e('px','wpmf') ?></label>
                    </li>
                </ul>
                <p class="description"><?php _e('Determine the space between images','wpmf'); ?></p>
            </li>
        </ul>
    </div>
    
     <div style="margin-top: 15px; width: 100%;float:left">
        <input type="submit" name="btn_add_size" id="btn_add_size" class="button btn_add_size button-primary" value="<?php _e('Save Changes','wpmf'); ?>">
    </div>
        
</form>