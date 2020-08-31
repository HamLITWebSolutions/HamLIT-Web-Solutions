<?php
add_action( 'woocommerce_payment_complete', 'woocommerce_subscriptions_auto_complete_order' );
function woocommerce_subscriptions_auto_complete_order( $order_id ) { 
    if ( ! $order_id ) {
        return;
    }
    $order = wc_get_order( $order_id );
    $order->update_status( 'completed' );
}