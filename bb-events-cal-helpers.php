<?php
/**
* Plugin Name: BB Events Calendar Helpers
* Plugin URI: 
* Version: 1.0
* Author: Christina Blust/Blustery Day Design
* Author URI: http://www.blusterydaydesign.com
* Description: Various custom shortcodes to go with the Event Calendar Pro plugin by Modern Tribe and Beaver Themer from Beaver Builder.
*/

 /* Single Organizer View */
function bdd_event_single_organizer_list_shortcode() {
  $organizer_id = get_the_ID();
  $output = tribe_organizer_upcoming_events( $organizer_id );
  return $output;
}
add_shortcode( 'bdd_event_single_organizer_list', 'bdd_event_single_organizer_list_shortcode' );

/* Single Venue View */
function bdd_event_single_venue_list_shortcode() {
  $venue_id     = get_the_ID();
  $output = tribe_venue_upcoming_events( $venue_id );
  return $output;
}
add_shortcode( 'bdd_event_single_venue_list', 'bdd_event_single_venue_list_shortcode');

function bdd_event_single_venue_info_shortcode() {
  $full_address = tribe_get_full_address();
  $telephone    = tribe_get_phone();
  $website_link = tribe_get_venue_website_link();
  $output = '';
  if ( $full_address ) {
    $output .= '<address class="tribe-events-address"><span class="location">';
    $output .= $full_address;
    $output .= '</span></address>';
  }
  if ( $telephone ) {
    $output .= '<span class="tel">';
    $output .= $telephone;
    $output .= '</span>';
  }
  if ( $website_link ) {
    $output .= '<span class="url">';
    $output .= $website_link;
    $output .= '</span>';
  }
  return $output;
}
add_shortcode( 'bdd_event_single_venue_info', 'bdd_event_single_venue_info_shortcode');
?>
