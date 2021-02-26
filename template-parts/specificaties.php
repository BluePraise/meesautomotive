 
 <dl class="car-specifications-list grid">
     <?php if (get_field('kenteken')) : ?>
         <div class="spec-block">
             <dt>Kenteken</dt>
             <dd><?php the_field('kenteken'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('bouwjaar')) : ?>
         <div class="spec-block">
             <dt>Bouwjaar</dt>
             <dd><?php the_field('bouwjaar'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('km_stand')) : ?>
         <div class="spec-block">
             <dt>Kilometer Stand</dt>
             <dd><?php the_field('km_stand'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('topsnelheid')) : ?>
         <div class="spec-block">
             <dt>Top Snelheid</dt>
             <dd><?php the_field('topsnelheid'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('van_0_naar_100_in')) : ?>
         <div class="spec-block">
             <dt>Van 0 naar 100 in:</dt>
             <dd><?php the_field('van_0_naar_100_in'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('vermogen')) : ?>
         <div class="spec-block">
             <dt>Vermogen</dt>
             <dd><?php the_field('vermogen'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('transmissie')) : ?>
         <div class="spec-block">
             <dt>Transmissie</dt>
             <dd><?php the_field('transmissie'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('kleur')) : ?>
         <div class="spec-block">
             <dt>Kleur</dt>
             <dd><?php the_field('kleur'); ?></dd>
         </div>
     <?php endif; ?>
     <?php if (get_field('kleur_exterieur')) : ?>
         <div class="spec-block">
             <dt>Kleur Exterieur</dt>
             <dd><?php the_field('kleur_exterieur'); ?></dd>
         </div>
     <?php endif; ?>
 </dl>