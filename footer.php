<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	</div><!-- #page -->
	
	<footer id="footer" class="footer-cont">
		<?php dynamic_sidebar( 'foot-menu' ); ?>  <?php dynamic_sidebar( 'foot-add' ); ?>
		
	<div id="footer-disc">
		<?php dynamic_sidebar( 'foot-disc' ); ?>
	</div>
	</footer>

<!-- leaving Cephas notice loading -->

<div style='display:none'>
			<div id='inline_content' style='padding:10px; background:#fff;'>
			
			<?php dynamic_sidebar( 'client' ); ?>
			
			</div>
		</div>
		
		
<?php
// Special stuff to display rotating quotes on "Services" and "Philosophy & Approach" 
// Add more page IDs below to include JS stuff in those pages.

$havequote = array (8,167);

 if (is_page($havequote)) { ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/
jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
     setupRotator();
 });
 function setupRotator()
 {
     if($('.textItem').length > 1)
     {
         $('.textItem:first').addClass('current').fadeIn(1000);
         setInterval('textRotate()', 6000);
     }
 }
     function textRotate()
     {
         var current = $('#quotes > .current');
         if(current.next().length == 0)
         {
             current.removeClass('current').fadeOut(1000);
             $('.textItem:first').addClass('current').fadeIn(1000);
         }
         else
         {
             current.removeClass('current').fadeOut(1000);
             current.next().addClass('current').fadeIn(1000);
         }
     }
</script>
<?php } ?> 

<?php wp_footer(); ?>
</body>
</html>