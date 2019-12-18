<?php
/******************This code snippet is to add show/hide functionality to the Listingpro sign in modal window*********/

function wpb_hook_head_javascript() {
    ?>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.1.2/bootstrap-show-password.min.js">
        </script>
        
        <script type="text/javascript">
	        $("#lppassword").password('toggle');
        </script>

    <?php
}
add_action('wp_head', 'wpb_hook_head_javascript');

function wpb_hook_footer_javascript() {
    ?>
        <script type="text/javascript">
	        $("#lppassword").attr('data-toggle', 'password');
        </script>

    <?php
}
add_action('wp_footer', 'wpb_hook_footer_javascript');
?>
