<div class="Comments " >
  <?php if ( have_comments() ): ?>
    <h3>
      <?php
        comments_number(
          __('No comments yet', 'lam'),
          __('There is a comment posted', 'lam'),
          __('There are % comments', 'lam')
        );
      ?>
    </h3>
    <ol class="commentlist">
      <?php wp_list_comments(); ?>
    </ol>
  <?php endif; ?>
  <?php comment_form(); ?>
</div>
