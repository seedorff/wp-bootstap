<?php 
/* 	
Template Name: Søgeresultater
*/

 get_header(); ?>

<div class="row">
  <div class="span9">

        <?php if (have_posts()) : ?> 

          <table class="table table-hover">
            <caption>Viser søgeresultater for <b><?php the_search_query(); ?></b></caption>
            <thead>
              <tr>
                <th>Navn</th>
                <th>Leverandør</th>
              </tr>
            </thead>
            <tbody>

        <?php while (have_posts()) : the_post(); ?>

          <a href="<?php the_permalink(); ?>">
              <tr>
                <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                <td><?php the_title(); ?></td>
              </tr>
          </a>

        <?php endwhile; ?>

            </tbody>
          </table>  

          <?php else : ?>

            <h2>Intet resultat</h2>
            <h4>Beklager, men din søgning efter <?php the_search_query(); ?>, gav desværre intet resultat. Søg venligst igen, eller forsøg at finde en bar ved at klikke på en underholdningsform ude til venstre.</h4>

          <?php endif; ?>
  </div>

  <div class="span3">
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>

