<?php

function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }


 function createSlug($text , $id){
 	// replace 
 	$text = preg_replace('~[^\pL\d]+~u', '-', $text);
 	// remove
 	$text = preg_replace('~[^-\w]+~', '', $text);

 	// remove duplicate -
  	$text = preg_replace('~-+~', '-', $text);

  	// lowercase
  	$text = strtolower($text);

    

 	return $text . '-' . $id; 

 }