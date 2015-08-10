<?php if($comments) : ?>
    <h3 class="comment_amt"> 
        <?php comments_number( 'no responses', 'One Comment', '% Comments' ); ?>
    </h3>
    <ol>
    <?php foreach($comments as $comment) : ?>
        <li id="comment-<?php comment_ID(); ?>" class="comments">
            <?php if ($comment->comment_approved == '0') : ?>
                <p>Your comment is awaiting approval</p>
            <?php endif; ?>
            <?php comment_text(); ?>
            <b><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></b>
        </li>
    <?php endforeach; ?>
    </ol>
<?php else : ?>
    <h3 class="first_comment">Be the first one to comment...</h3>
<?php endif; ?>

<?php if(comments_open()) : ?>
    <?php if(get_option('comment_registration') && !$user_ID) : ?>
        <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
            <?php if($user_ID) : ?>
                <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
            <?php else : ?>
                <p><input type="text" placeholder="Name" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                <label for="author"><span class="required">*</span> <!--<?php if($req) echo "(required)"; ?>--></label></p>
                <p><input type="text" placeholder="Email (will not be published)" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                <label for="email"><span class="required">*</span> <!--<?php if($req) echo "(required)"; ?>--></label></p>
                <p><input type="text" placeholder="Website" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>
            <?php endif; ?>
            <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
            <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
            <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
            <?php do_action('comment_form', $post->ID); ?>
        </form>
        <p class="required">* Required fields</p>
    <?php endif; ?>
<?php else : ?>
    <p>The comments are closed.</p>
<?php endif; ?>