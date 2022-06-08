<?php
/**
*Plugin Name:contacte
 */

 function form_contacte(){
    if(isset($_POST['example_form_submit'])){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $comment = $_POST['comment'];
        if(empty($name) || empty($email) || empty($comment)){
            $error = "check your form";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $msg1 = "check your email";
        }
    }

    $content = '';
    $content .= '<h2>Contacte Us</h2>';
    if(isset($error)){echo '<label style="color:red">'.$error.'</label>';}
    $content .= '<form method="POST" action=""  />';

    $content .= '<label for="your_name">Name</label>';
    $content .= '<br><input class="form-control" type="text" placeholder="Enter your Name" name ="Name">';

    $content .= '<br><label for="your_email">Email</label>';
    $content .= '<br><input type="text" class="form-control" name ="Email" placeholder="name@example.com">';
    if(isset($msg1)){echo '<label style="color:red">'.$msg1.'</label>';}

    $content .= '<br><label for="your_comments">Questions or Comments</label>';
    $content .= '<textarea placeholder="Enter your questions or comments" name="comment" class="form-control"></textarea>';

    $content .= '<br /><input type="submit" name="example_form_submit" class="btn btn-md btn-primary" value="SEND YOUR INFORMATION"/>';
    $content .= '</form>';
    return $content;
 }
 add_shortcode('example_form','form_contacte');

function example_form_capture(){
    if(isset($_POST['example_form_submit'])){
        $name = sanitize_text_field ($_POST['Name']);
        $email = sanitize_text_field ($_POST['Email']);
        $comments = sanitize_textarea_field ($_POST['comment']);

        $sto = 'hamza.laqraa@hotmail.com';
        $subject = 'Test for submission';
        $message = ''.$name.' - '.$email.' - '.$comments;

        wp_mail($sto,$subject,$message);
    }
}
add_action('wp_head','example_form_capture');
?>