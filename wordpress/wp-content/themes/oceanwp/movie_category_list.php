<?php
$args = array(
    'post_type' => 'movie',
    'orderby' => 'title',
    'order' => 'ASC',
);

$categories = get_terms( array(
    'taxonomy' => 'movie_category',
    'hide_empty' => true,
) );

foreach ( $categories as $category ) :
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'movie_category',
            'field' => 'slug',
            'terms' => $category->slug,
        ),
    );
    $query = new WP_Query( $args );
?>

    <h2><?php echo $category->name; ?></h2>
    <ul>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>

<?php endforeach; ?>
