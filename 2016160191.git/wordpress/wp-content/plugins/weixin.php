<?php
/*
Plugin Name: Weixin Switch Theme
Plugin URI: http://fatesinger.com/74958
Description: �л�΢������
Version: 1.0.0
Author: Bigfa
Author URI: http://fatesinger.com/
*/
if( !function_exists('is_weixin') ) :
function is_weixin(){ 
    if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
            return true;
    }    
    return false;
}
endif;
function angela_switch_theme($theme){
    if( is_weixin() ){
        $theme = 'Bur';//�����ļ�����������������
    }
    return $theme;
}
add_filter( 'template', 'angela_switch_theme' );
add_filter( 'stylesheet', 'angela_switch_theme' );
?>