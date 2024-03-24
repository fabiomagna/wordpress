<?php

/*
Plugin Name: News Keywords
Plugin URI: http://wordpress.org/extend/plugins/news-keywords/
Description: Adds the Google-specific metatag "news_keywords" with Post Tags into wp_head() to improve your chances of appearing in Google search results for relevant queries. See also http://support.google.com/news/publisher/bin/answer.py?answer=68297 ☺
Version: 1.0.1
Author: John Sear
Author URI: http://profiles.wordpress.org/john_sear/
Tags: SEO, Meta, Google, Post, Tags, WP Head
*/

/*  Copyright 2012  John Sear  (email : John_Sear@gmx.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function news_keywords() {

    global $wp_query;
    
    $post = $wp_query->post;
    
    if($wp_query->is_single !== false && $post->post_type == 'post'){
        
        $post_id = $post->ID;
        
        $posttags = get_the_tags($post_id);
        
        if ($posttags) {
            
            
            $tags = '';
            
            foreach($posttags as $tag) {
            
                $tags .= ($tags != '') ? ', ' . $tag->name  : $tag->name;      
                
            }
            
            echo '<meta name="news_keywords" content="' . $tags . '" />' . "\n";
        }
        
    }

}

add_action( 'wp_head', 'news_keywords' );