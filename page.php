<?php get_header(); ?>

<?php if ( ! get_field( 'hide_page_title' ) ): ?>
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
<?php endif; ?>

<div class="editor">
    <?php the_content(); ?>
</div>
<?php 
$field = get_field_object('field_6343b79928860');
$choices = $field['choices'];
// print_r($choices)
?>

<?php get_footer(); ?>