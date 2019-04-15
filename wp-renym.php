<?php
/*
Plugin Name: WP Renym
Plugin URI:  http://link to your plugin homepage
Description: This plugin replaces words with your own choice of words.
Version:     1.0
Author:      Mario Bondici
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://link to your plugin license

Copyright YEAR PLUGIN_AUTHOR_NAME (email : your email address)
(WP Renym) is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
(WP Renym) is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with (WP Renym). If not, see (http://link to your plugin license).
*/


function renym_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'renym_wordpress_typo_fix' );

function renym_wordpress_typo_fix_2( $title ) {
	return str_replace( 'wordpress', 'WordPress', $title );
}
add_filter( 'the_title', 'renym_wordpress_typo_fix_2' );

function renym_content_footer_note( $content ) {
	$content .= '<footer class="renym-content-footer">Grazie per aver letto questo articolo. Torna a trovarci  presto! </footer>';
	return $content;
}
add_filter( 'the_content', 'renym_content_footer_note' );


?>