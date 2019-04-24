<?php
/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http:aleksejevartur.ikt.khk.ee/
 * Descriptiton: This is my first plugin.
 * Version 1.0
 * Author: Artur Aleksejev
 * Author URI:  http:aleksejevartur.ikt.khk.ee/
**/

function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );