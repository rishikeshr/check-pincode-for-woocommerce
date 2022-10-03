<?php
function CPIW_PincodeWiseAddFee() {
    global $woocommerce;

        if(isset($_COOKIE['Cpiw_Pincode'])) {
            $pincode = sanitize_text_field($_COOKIE['Cpiw_Pincode']);
            $CpiwRecord = CPIW_PincodeCheckInDataTable($pincode);
     
            if(isset($CpiwRecord[0]) && $CpiwRecord[0]->ship_amount != 0 && !empty($CpiwRecord[0]->ship_amount)){
                $woocommerce->cart->add_fee( __('Shipping Amount', 'woocommerce'), $CpiwRecord[0]->ship_amount);
            }
        }

}
add_action( 'woocommerce_cart_calculate_fees','CPIW_PincodeWiseAddFee');

