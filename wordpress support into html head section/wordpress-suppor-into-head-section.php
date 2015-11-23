
<?php

/*for language support*/
<?php language_attributes(); ?>

/*for meta charset support*/
<?php bloginfo( 'charset' ); ?>


/*for title support*/
<?php wp_title( '|', true, 'right' ); ?> /*or*/
<?php the_title(); ?>


?>