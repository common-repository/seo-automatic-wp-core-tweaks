<?php
function newtablink()
{
 ?>
<script type="text/javascript">
    jQuery(function () {
       jQuery('input#wp-link-target').prop('checked',true);
    });
</script>  
<?php
}

add_action( 'before_wp_tiny_mce', 'newtablink' );
?>