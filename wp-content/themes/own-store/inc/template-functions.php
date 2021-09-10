<?php
/**
 * @package own-store
 */


/**
 * Header Product Search
 */
if ( ! function_exists( 'own_store_header_product_search' ) ) :
function own_store_header_product_search() {
    ?>
        <div class="header-search">
            <div class="right-column col-md-9 col-sm-8">
                <div class="header-product-search">
                    <?php
                        if ( own_shop_is_active_woocommerce() ) :
                            if(true===get_theme_mod( 'own_shop_enable_header_product_search',true)) :
                                own_shop_product_search_form();
                            endif;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    <?php
}
endif;
add_action('own_store_action_header_product_search', 'own_store_header_product_search');


/**
 * Topbar
 */
if ( ! function_exists( 'own_store_topbar_sidebar' ) ) :
    function own_store_topbar_sidebar() {
        if ( is_active_sidebar('topsidebar')) :
            get_sidebar('topsidebar');
        endif;
    }
endif;
add_action('own_store_action_topbar_sidebar', 'own_store_topbar_sidebar');


/**
 * Check if woocommerce is activated.
 */
if ( ! function_exists( 'own_store_is_active_woocommerce' ) ) {
    function own_store_is_active_woocommerce() {
        if ( class_exists( 'WooCommerce' ) ) :
            return true;
        else :
            return false;
        endif;
    }
}


/**
* Header Category Custom Menu
*/
if ( ! function_exists( 'own_store_header_product_custom_menu' ) ) :
function own_store_header_product_custom_menu() {
    ?>
        <div class="header-product-custom-menu">
            <div class="custom-menu-wrapper">
                <a href="#" class="title navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2"><i class="la la-bars"></i> <?php 
                    echo esc_html(get_theme_mod( 'own_store_header_category_heading_text', esc_html__('Browse Categories','own-store')));
                    ?>
                </a>
            </div>
            <div class="custom-menu-product">
                <div class="collapse navbar-collapse" id="navbar-collapse-2">
                    <?php
                        wp_nav_menu( array(                             
                            'theme_location'    => 'categorymenu',
                            'depth'             => 3,
                            'container'         => 'ul',
                            'container_class'   => 'product-custom-menu-container',
                            'container_id'      => 'menu-categorymenu',
                            'menu_class'        => 'category-custom',
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    <?php
}
endif;
add_action('own_store_action_header_product_custom_menu', 'own_store_header_product_custom_menu');