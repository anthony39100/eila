
<?php
/**
 * Plugin Name:       Eila
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       plugin permettant l'ajout de nouveau auteurs et des instrument
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Anthony breviglieri
 * Author URI:        
 * License:           GPL v2 or later
 * License URI:       
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
/*ADDS STYLESHEET ON WP-ADMIN*/
add_action( 'admin_enqueue_scripts', 'safely_add_stylesheet_to_admin' );
    function safely_add_stylesheet_to_admin() {
        wp_enqueue_style( 'prefix-style', plugins_url('style.css', __FILE__) );
    }


/*ADDS MY CUSTOM NAVIGATION BAR ON WP-ADMIN*/
add_action('admin_head', 'safely_add_stylesheet_to_admin');

//page d'administration du plugin eila
function wporg_options_page_html() {
      ?>
      <div class="wrap d-flex justify-center vh-50 align-items ">
        <h1><?php esc_html( get_admin_page_title() ); ?></h1>

        <table class="wp-list-table widefat fixed striped pages">
      <thead >
      <tr>
      <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Tout sélectionner</label><input id="cb-select-all-1" type="checkbox"></td>
      <th class="manage-column column-title column-primary sortable desc">title</th>
      <th class="manage-column column-comments num sortable desc">auteur</th>
      <span><span class="vers comment-grey-bubble" title="Commentaires"><span class="screen-reader-text">Commentaires</span></span></span>      <th class="manage-column column-date sortable asc">Date</th>
      </tr>
      <tbody>
      </thead>

      <?php
 $args= array(

       
      
                  'showposts' => 3,
      
       
      
                  'cat' => 0,
      
       
      
                  'orderby'  => 'rand',
                

       
                        );
      
 // The Query
 $the_query = new WP_Query($args);
  
 // The Loop
 if ( $the_query->have_posts() ) {
       
     echo '<tr>';
     while ( $the_query->have_posts() ) :; 
            
       
         $the_query->the_post();
         echo '<td>'.'</td>';
         echo '<td class="iedit author-self level-0 post-2 type-page status-publish hentry"><a href="'.get_permalink( $id ).'">' . get_the_title() . '</td>';
         echo '<td >' . get_the_author() . '</td>';
         echo '<td>' . get_the_date() . '</td>';
     
     echo '</tr>';

 endwhile;
 } else {
    echo 'aucun post trouver';
 }
 /* Restore original Post Data */
 wp_reset_postdata();
 ?>
          </tbody>
       </table>
      </div>
      <?php
  }
  ?>
  <?php
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'WPOrg',
        'Eila',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        plugin_dir_url(__FILE__) . 'images/icon_wporg.png',
        20
    );
}

//css

  ?>


<?php 
// the query
