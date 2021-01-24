<?php

//response generation function

$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];
$human = $_POST['message_human'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Someone sent a message from ".get_bloginfo('name');
$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

        //validate email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            my_contact_form_generate_response("error", $email_invalid);
        else //email is valid
        {
            //validate presence of name and message
            if(empty($name) || empty($message)){
                my_contact_form_generate_response("error", $missing_content);
            }
            else //ready to go!
            {
                $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
            }
        }
    }
}
else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php
/**
 * The template for displaying single posts and pages.
 * Template Name: About
 * Template Post Type: post, page, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>
<div class="contact-content">
    <div class="container">
        <div class="contact-info">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <div class="contact-details" id="respond">
            <?php echo $response; ?>
            <form action="<?php the_permalink(); ?>" method="post">
                <input type="text" placeholder="Name" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" required/>
                <input type="text" placeholder="Email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" required/>
                <input type="text" placeholder="Phone" name="message_phone" value="<?php echo esc_attr($_POST['message_phone']); ?>" required/>
                <input type="text" placeholder="City Name" name="message_city" value="<?php echo esc_attr($_POST['message_city']); ?>" required/>
                <textarea placeholder="Message" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
                <input type="hidden" name="submitted" value="1">
                <input type="submit" value="SEND"/>
            </form>
        </div>
        <div class="contact-details">
            <div class="col-md-6 contact-map">
                <h4>FIND US HERE</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d803187.8113675824!2d-120.11910914056458!3d38.15292455846902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1423829283333" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="col-md-6 company_address">
                <h4>GET IN TOUCH</h4>
                <p>500 Lorem Ipsum Dolor Sit,</p>
                <p>22-56-2-9 Sit Amet, Lorem,</p>
                <p>USA</p>
                <p>Phone:(00) 222 666 444</p>
                <p>Fax: (000) 123 456 78 0</p>
                <p>Email: <a href="mailto:info@example.com">info@mycompany.com</a></p>
                <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
            </div>
            <div class="clearfix"></div>
        </div>


    </div>
</div>
</div>
<!-- #site-content -->


<?php get_footer(); ?>
