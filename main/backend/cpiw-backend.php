<?php

function CPIW_AdminMenu() {
    add_menu_page( __( 'Setting Pincodes', 'check-pincode-in-woocommerce'), __( 'Setting Pincodes','check-pincode-in-woocommerce'),'manage_options','pin-code','CPIW_SettingPincode','dashicons-location-alt',99);

}

add_action( 'admin_menu', 'CPIW_AdminMenu' );
function CPIW_SettingPincode() {
    global $cpiw_comman; ?>
        <div class="cpiw_container">
            <div class="wrap">
                <h2><?php echo __("Pincode Setting","check-pincode-in-woocommerce");?></h2>
                <form method="post">
                    <?php wp_nonce_field( 'cpiw_meta_save', 'cpiw_meta_save_nounce' ); ?>
                    <div id="poststuff">
                        <ul class="nav-tab-wrapper woo-nav-tab-wrapper">
                            <li class="nav-tab nav-tab-active" data-tab="tab-default">
                            <?php echo __( 'General Settings', 'check-pincode-in-woocommerce' ); ?>
                            </li>
                            <li class="nav-tab" data-tab="tab-general">
                            <?php echo __( 'Other Settings', 'check-pincode-in-woocommerce' ); ?>
                            </li>
                        </ul>
                        <div id="tab-default" class="tab-content current">
                            <div class="postbox">
                              <div class="postbox-header">
                                <h2><?php echo __( 'General Settings', 'check-pincode-in-woocommerce' ); ?></h2>
                              </div>
                              <div class="inside">
                                <table>
                                    <tr>
                                        <th>
                                          <?php echo __( 'Enable Plugin', 'check-pincode-in-woocommerce' ); ?>
                                        </th>
                                        <td>
                                          <input type="checkbox" name="cpiw_comman[cpiw_enable]" value="enable" <?php if($cpiw_comman['cpiw_enable'] == 'enable' ) { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                          <?php echo __( 'Date Show In Pincode box', 'check-pincode-in-woocommerce' ); ?>
                                        </th>
                                        <td>
                                          <input type="checkbox" name="cpiw_comman[cpiw_dateshow]" value="enable" <?php if($cpiw_comman['cpiw_dateshow'] == 'enable' ) { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                          <?php echo __( 'Cash on delivery In Pincode box', 'check-pincode-in-woocommerce' ); ?>
                                        </th>
                                        <td>
                                          <input type="checkbox" name="cpiw_comman[cpiw_codshow]" value="enable" <?php if($cpiw_comman['cpiw_codshow'] == 'enable' ) { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                          <?php echo __( 'Cart Button Enable Diable pincode wise Single Product page', 'check-pincode-in-woocommerce' ); ?>
                                        </th>
                                        <td>
                                          <input type="checkbox" disabled name="cpiw_comman[cpiw_enable_Add_to_cart]" value="enable">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                          <?php echo __( 'Hide Place Order Button if Pincode is not Available in List', 'check-pincode-in-woocommerce' ); ?>
                                        </th>
                                        <td>
                                          <input type="checkbox" disabled name="cpiw_comman[cpiw_placeordershow]" value="enable">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                          <?php echo __( 'PopUp Enable disable', 'check-pincode-in-woocommerce' ); ?>
                                        </th>
                                        <td>
                                          <input type="checkbox" name="cpiw_comman[cpiw_poupshow]" value="enable" <?php if($cpiw_comman['cpiw_poupshow'] == 'enable' ) { echo 'checked'; } ?>>
                                        </td>
                                    </tr>
                                </table>  
                              </div> 
                            </div>
                            <div class="postbox">
                                <div class="postbox-header">
                                    <h2><?php echo __( 'Image Setting', 'check-pincode-in-woocommerce' ); ?></h2>
                                </div>
                                <div class="inside">
                                    <table>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Cash on delivery image', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <div class="ocpsw_back_img_class">
                                                    <?php  
                                                        echo CPIW_ImageUploader('cpiw_comman[cpiw_cashondeliimg_form]',$cpiw_comman['cpiw_cashondeliimg_form'] );
                                                        $attachment_id=$cpiw_comman['cpiw_cashondeliimg_form'];
                                                        if(!empty($cpiw_comman['cpiw_cashondeliimg_form'])){
                                                            $feat_image_url = wp_get_attachment_url($attachment_id); 
                                                    } ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Cash on delivery Not Availabel image', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <div class="ocpsw_back_img_class">
                                                    <?php  
                                                        echo CPIW_ImageUploader('cpiw_comman[cpiw_cashondelinotimg_form]',$cpiw_comman['cpiw_cashondelinotimg_form'] );
                                                        $attachment_id=$cpiw_comman['cpiw_cashondelinotimg_form'];
                                                        if(!empty($cpiw_comman['cpiw_cashondelinotimg_form'])){
                                                            $feat_image_url = wp_get_attachment_url($attachment_id); 
                                                    } ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Date image', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <div class="ocpsw_back_img_class">
                                                    <?php  
                                                        echo CPIW_ImageUploader('cpiw_comman[date_image]',$cpiw_comman['date_image'] );
                                                        $attachment_id=$cpiw_comman['date_image'];
                                                        if(!empty($cpiw_comman['date_image'])){
                                                            $feat_image_url = wp_get_attachment_url($attachment_id); 
                                                        } ?>
                                                </div>
                                             </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Popup pincode image', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <div class="ocpsw_back_img_class">
                                                    <?php  
                                                        echo CPIW_ImageUploader('cpiw_comman[popuppincode_image]',$cpiw_comman['popuppincode_image'] );
                                                        $attachment_id= $cpiw_comman['popuppincode_image'];
                                                        if(!empty($cpiw_comman['popuppincode_image'])){
                                                            $feat_image_url = wp_get_attachment_url($attachment_id); 
                                                    } ?>
                                                </div>
                                             </td>
                                        </tr>
                                    </table>  
                                </div> 
                            </div>
                            <div class="postbox">
                                <div class="postbox-header">
                                    <h2><?php echo __( 'Pincode Box Color Setting', 'check-pincode-in-woocommerce' ); ?></h2>
                                </div>
                                <div class="inside">
                                    <table>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Main pincode Background  Color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['mainbackcolor']); ?>" name="cpiw_comman[mainbackcolor]" value="<?php echo esc_attr($cpiw_comman['mainbackcolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Check Availability Color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['checkavailbilitycolor']); ?>" name="cpiw_comman[checkavailbilitycolor]" value="<?php echo esc_attr($cpiw_comman['checkavailbilitycolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Check AND Change Button text Color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['checkandchangetxtcolor']); ?>" name="cpiw_comman[checkandchangetxtcolor]" value="<?php echo esc_attr($cpiw_comman['checkandchangetxtcolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Check AND Change Button Background Color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['checkandchangebackcolor']); ?>" name="cpiw_comman[checkandchangebackcolor]" value="<?php echo esc_attr($cpiw_comman['checkandchangebackcolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Delivery date text Color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['deliverydatetextcolor']); ?>" name="cpiw_comman[deliverydatetextcolor]" value="<?php echo esc_attr($cpiw_comman['deliverydatetextcolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Case on delivery text color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['codtextcolor']); ?>" name="cpiw_comman[codtextcolor]" value="<?php echo esc_attr($cpiw_comman['codtextcolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Popup Background Color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['popupbackcolor']); ?>" name="cpiw_comman[popupbackcolor]" value="<?php echo esc_attr($cpiw_comman['popupbackcolor']); ?>"/>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>
                                              <?php echo __( 'Popup text color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['popuptextcolor']); ?>" name="cpiw_comman[popuptextcolor]" value="<?php echo esc_attr($cpiw_comman['popuptextcolor']); ?>"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __( 'Popup Submit Button background color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['submitbackcolor']); ?>" name="cpiw_comman[submitbackcolor]" value="<?php echo esc_attr($cpiw_comman['submitbackcolor']); ?>"/>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>
                                              <?php echo __( 'Popup Submit Button text color', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                                <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo esc_attr($cpiw_comman['submittextcolor']); ?>" name="cpiw_comman[submittextcolor]" value="<?php echo esc_attr($cpiw_comman['submittextcolor']); ?>"/>
                                            </td>
                                        </tr>
                                    </table>  
                                </div> 
                            </div>
                        </div>
                        <div id="tab-general" class="tab-content">
                            <div class="postbox">
                                <div class="postbox-header">
                                    <h2><?php echo __( 'Check Pincode Text Setting',  'check-pincode-in-woocommerce' ); ?></h2>
                                </div>
                                <div class="inside">
                                    <table>
                                        <tr>
                                            <th>
                                              <?php echo __('Pincode Input Placeholder Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_pincodeplace_text = $cpiw_comman['cpiw_pincodeplace_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_pincodeplace_text]" class="regular-text" value="<?php echo esc_attr($cpiw_pincodeplace_text); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('check Button Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_checkbutton_text]" class="regular-text" value="Check"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Change Button Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_changebutton_text]" class="regular-text" value="Change"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Check Availability At Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_checkavail_text = $cpiw_comman['cpiw_checkavail_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_checkavail_text]" class="regular-text" value="<?php echo esc_attr($cpiw_checkavail_text); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Not Available Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_checknotavailabletext]" class="regular-text" value="We Are Not Services This Place"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Delivery Date Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_delivery_date_text = $cpiw_comman['cpiw_delivery_date_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_delivery_date_text]" class="regular-text" value="<?php echo esc_attr($cpiw_delivery_date_text); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Cash On delivery Available Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_cod_text]" class="regular-text" value="Case On Delivery Available"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Cash On delivery Not Available Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_cod_not_availbal_text]" class="regular-text" value="Case On Delivery Not Available"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('PlaceOrder Text If pincode Wrong', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_place_order_button_txt= $cpiw_comman['cpiw_place_order_button_txt']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_place_order_button_txt]" class="regular-text" value="<?php echo esc_attr($cpiw_place_order_button_txt); ?>">
                                            </td>
                                        </tr>
                                         <tr>
                                            <th>
                                              <?php echo __('Check Availability At Valid City/State Message', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_availability_citystate]" class="regular-text" value="YES, We Deliver to {city_name}, {state_name}"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                    </table>  
                                </div> 
                            </div>
                             <div class="postbox">
                                <div class="postbox-header">
                                    <h2><?php echo __( 'Popup Text Setting',  'check-pincode-in-woocommerce' ); ?></h2>
                                </div>
                                <div class="inside">
                                    <table>
                                        <tr>
                                            <th>
                                              <?php echo __('Check your location availability info Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_checklocationtext_text = $cpiw_comman['cpiw_checklocationtext_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_checklocationtext_text]" class="regular-text" value="<?php echo esc_attr($cpiw_checklocationtext_text); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Popup Submit Button Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_cpopsubmit_text = $cpiw_comman['cpiw_cpopsubmit_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_cpopsubmit_text]" class="regular-text" value="<?php echo esc_attr($cpiw_cpopsubmit_text); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Popupinput placeholder Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_cpopplaceholder_text = $cpiw_comman['cpiw_cpopplaceholder_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_cpopplaceholder_text]" class="regular-text" value="<?php echo esc_attr($cpiw_cpopplaceholder_text); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Popup Available Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_popavailabletext = $cpiw_comman['cpiw_popavailabletext']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_popavailabletext]" class="regular-text" value="<?php echo esc_attr($cpiw_popavailabletext); ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Popup Not Available Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <input type="text" disabled name="cpiw_comman[cpiw_not_availabletext]" class="regular-text" value="We Are Not Services This Place"><br>
                                              <label class="cpiw_pro_version_link"><a href="https://www.plugin999.com/plugin/check-pincode-for-woocommerce/" target="_blank">Only Available In Pro Version</a></label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                              <?php echo __('Empty Field Text', 'check-pincode-in-woocommerce' ); ?>
                                            </th>
                                            <td>
                                              <?php $cpiw_emptyfield_text = $cpiw_comman['cpiw_emptyfield_text']; ?>
                                              <input type="text" name="cpiw_comman[cpiw_emptyfield_text]" class="regular-text" value="<?php echo esc_attr($cpiw_emptyfield_text); ?>">
                                            </td>
                                        </tr>
                                    </table>  
                                </div> 
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="cpiw_save_option">
                    <input type="submit" value="Save changes" name="submit" class="button-primary" id="cpiw_btn_space">
                </form>
            </div>
        </div>  
    <?php
}


function  CPIW_ImageUploader($name, $value = '') {
        $image = ' button">Upload image';
        $image_size = 'full'; // it would be better to use thumbnail size here (150x150 or so)
        $display = 'none'; // display state ot the "Remove image" button

        if( $image_attributes = wp_get_attachment_image_src( $value, $image_size ) ) {
            $image = '"><img src="' . $image_attributes[0] . '" style="width:50px;height:50px;display:block;" />';
            $display = 'inline-block';
        } 
        return '
        <div>
            <a href="#"  class="misha_upload_image_button' . $image . '</a>
            <input type="hidden" name="' . $name . '" id="' . $name . '" value="' . $value . '" />
            <a href="#" class="misha_remove_image_button" style="display:inline-block;display:' . $display .'">Remove image</a>
        </div>';

}