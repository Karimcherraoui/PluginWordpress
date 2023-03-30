<?php

/**
 * Plugin Name: Feedback Plugin
 * Plugin URI: http://adaelectro.epizy.com/
 * Description: Ajoute un formulaire de feedback aux pages et articles.
 * Version: 1.0.0
 * Author: Karim Cherraoui
 * Author URI: https://github.com/Karimcherraoui/AdaElectro
 * License: GPL-2.0+
 * Text Domain: feedback-plugin
 */


function mon_feedback_form()
{
    $content = '';
 
    $content .= '<div style="box-shadow: 0px 2px 30px rgba(0,0,0,0.2); padding: 20px; border-radius: 10px; background-color:#F8F8FF; text-align: center;margin-right: 10px; margin-top:10px;">';
    $content .= '<form action="" method="post">';
    $content .= '<p style="text-align:center;"><label for="feedback_name" style="font-weight:bold;">Nom</label><br><input type="text" name="feedback_name" id="feedback_name" required></p>';
$content .= '<p style="text-align:center;"><label for="feedback_email" style="font-weight:bold;">Email</label><br><input type="email" name="feedback_email" id="feedback_email" required></p>';
$content .= '<p style="text-align:center;"><label for="feedback_message" style="font-weight:bold;">Message</label><br><textarea name="feedback_message" id="feedback_message" required></textarea></p>';
$content .= '<p style="text-align:center;"><label for="feedback_rating" style="font-weight:bold;">Note</label><br><select name="feedback_rating" id="feedback_rating" required>
                        <option value="">--</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
            </p>';
    $content .= '<p><input name="sub" type="submit" value="Send feedback"></p>';
    $content .= '</form>';
    $content .= '</div>';
    
    return $content;
}
add_shortcode('feedback', 'mon_feedback_form');

function mon_feedback_save()
{
    if (isset($_POST["sub"])) {
        global $wpdb;
        $table_name = 'wp_feedback';
        $name = sanitize_text_field($_POST["feedback_name"]);
        $email = sanitize_email($_POST["feedback_email"]);
        $message = sanitize_textarea_field($_POST["feedback_message"]);
        $rating = intval($_POST["feedback_rating"]);
        $wpdb->insert(
            $table_name,
            array(
                'time' => current_time('mysql'),
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'rating' => $rating,
            )
        );
    }
}
add_action('wp_head', 'mon_feedback_save');
