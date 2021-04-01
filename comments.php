<div class="comments-wrapper">

    <div class="comments" id="comments">

    	<div class="comments-header">
    		<h2 class="comment-reply-title">
    			<?php
                    // If comments are allowed, display either text option inside h2 tag
                    if (comments_open()) {
                        if (! have_comments()) {
                            echo "";
                        } else {
                            echo "<hr>" . get_comments_number() . " Comments";
                        }
                    }
                ?>
            </h2> 
    	</div> 

        <?php
            // Retrieve wp comments and display them
            wp_list_comments(
                array(
                    'avatar_size' => 50,
                    'style' => 'div',
                )
            );
        ?>

    </div>

    <hr>
    
    <?php
        // If comments are allowed, display reply/comment form
        if (comments_open()) {
            comment_form(
                array(
                    'class_form' => 'abbe-comments',
                    'title_reply' => 'Leave a Comment',
                    'title_reply_before' => '<h3>',
                    'title_reply_after' => '</h3>'                  
                )
            );
        } 
    ?>

</div>