<div class="cars__item car">
                        <?php the_post_thumbnail('large', ['class' => 'car__img']); ?>
                        <div class="car__content">
                            <h4 class="car__name"><?php the_title(); ?>
                            </h4>
                            <p class="car__price">
                                <?php echo get_field('price') ? '€' . get_field('price') : '' ?>
                            </p>
                            <table class="car__table">
                                <tr>
                                    <th>Bouwjaar</th>
                                    <td><?php the_field('bouwjaar'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>KM STAND</th>
                                    <td><?php the_field('km_stand'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>TRANSMISSIE</th>
                                    <td><?php the_field('transmissie'); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>KLEUR</th>
                                    <td><?php the_field('kleur'); ?>
                                    </td>
                                </tr>
                            </table>

                            <div class="text-center">
                                <a href="<?php the_permalink(); ?>" class="car__link btn-link btn-link__white">Meer Details</a>
                            </div>
                        </div>
                    </div>