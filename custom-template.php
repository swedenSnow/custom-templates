<?php
/**
Template Name: Awesome

*/
// Start the loop.

// $the_query = new WP_Query(
//     [
//         "category_name"=> "javascript"
//     ]
//     );

// while ( have_posts() ) : the_post();?>
  

<?php 

function profanity_filter($text) {
  $words = array("illuminati", "big brother", "deep state");
  /* str_replace checks for words in the array and removes them from
  * the content in the post, returning a bleeped version */
  return str_replace($words, "BLEEP", $text);
}

add_filter('the_content', 'profanity_filter');
