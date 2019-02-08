<div class="section-tax-wrapper">
  <?php
  $curTerm =  $wp_query->queried_object;
  $terms = get_terms( 'resources_categories' );
  if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    echo '<ul>';
    foreach ( $terms as $term ) {
      $classes = array();
      if ($term->name == $curTerm->name)
        $classes[] = 'current';
      echo '<li class="'. implode(' ',$classes) .'"><a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a></li>';
    }
    echo '</ul>';
  }
  ?> 
</div> <!-- section-tax-wrapper -->