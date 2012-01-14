<?php

/**
 * Template Name: Archives Page
 *
 * This is a custom Page template for creating an index of Archives.
 * It will display the page content above an uordered list of the different types of Post archives that are available.
 *
 * @link http://codex.wordpress.org/Creating_an_Archive_Index
 *
 * @package Thematic
 * @subpackage Templates
 */
 
?>
<?php

    // calling the header.php
    get_header();

    // action hook for placing content above #container
    thematic_abovecontainer();

?>	
		<div id="container">
		
			<?php thematic_abovecontent();
		
			echo apply_filters( 'thematic_open_id_content', '<div id="content">' . "\n" );
			
				the_post();
	            
	            thematic_abovepost();
	            
	            ?>
	
				<div id="post-<?php the_ID();
					echo '" ';
					if (!(THEMATIC_COMPATIBLE_POST_CLASS)) {
						post_class();
						echo '>';
					} else {
						echo 'class="';
						thematic_post_class();
						echo '">';
					}
	                
	                // creating the post header
	                thematic_postheader();
	                
	                ?>
	                
					<div class="entry-content">
	                
	                    <?php 
	                    
	                    the_content();
	
	                    // action hook for the 404 content
	                    thematic_archives();
	
	                    edit_post_link(__('Edit', 'thematic'),'<span class="edit-link">','</span>');
	                    
	                    ?>
	
					</div><!-- .entry-content -->
				</div><!-- #post -->
	
	        <?php
	        
	       thematic_belowpost();
	        
	        // calling the comments template
	        	// calling the comments template
        		if (THEMATIC_COMPATIBLE_COMMENT_HANDLING) {
       				if ( get_post_custom_values('comments') ) {
						// Add a key/value of "comments" to enable comments on pages!
	        			thematic_comments_template();
        			}
        		} else {
       				thematic_comments_template();
        		}
	        
	        ?>
	
			</div><!-- #content -->
			
			<?php thematic_belowcontent(); ?> 
			
		</div><!-- #container -->

<?php 

    // action hook for placing content below #container
    thematic_belowcontainer();

    // calling the standard sidebar 
    thematic_sidebar();
    
    // calling footer.php
    get_footer();

?>