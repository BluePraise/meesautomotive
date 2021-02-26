<?php $set = get_field('car_kenmerken'); ?>
<?php if (get_field('car_kenmerken')) : ?>
<section class="car-details container-l">
    <h3>Additionele kenmerken:</h3>
        <ul class="car-attributes-list container-xs flex two-col">
            <div class="col-left">
                <?php if ($set['merk']) : ?>
                    <li>
                        <dt>Merk</dt>
                        <dd><?php echo $set['merk']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['model']) : ?>
                    <li>
                        <dt>Model</dt>
                        <dd><?php echo $set['model']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['type']) : ?>
                    <li>
                        <dt>Type</dt>
                        <dd><?php echo $set['type']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['brandstof']) : ?>
                    <li>
                        <dt>Brandstof</dt>
                        <dd><?php echo $set['Brandstof']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['vermogen']) : ?>
                    <li>
                        <dt>Vermogen</dt>
                        <dd><?php echo $set['vermogen']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['aantal_deuren']) : ?>
                    <li>
                        <dt>Aantal Deuren</dt>
                        <dd><?php echo $set['aantal_deuren']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['aantal_zitplaatsen']) : ?>
                    <li>
                        <dt>Aantal Zitplaatsen</dt>
                        <dd><?php echo $set['aantal_zitplaatsen']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['bekleding']) : ?>
                    <li>
                        <dt>Bekleding</dt>
                        <dd><?php echo $set['bekleding']; ?></dd>
                    </li>
                    <?php if ($set['co2-emissie']) : ?>
                        <li>
                            <dt>CO2-Emissie</dt>
                            <dd><?php echo $set['co2-emissie']; ?></dd>
                        </li>
                    <?php endif; ?>
                    <?php if ($set['emissieklasse']) : ?>
                        <li>
                            <dt>Emissie Klasse</dt>
                            <dd><?php echo $set['aantal_cilinders']; ?></dd>
                        </li>
                    <?php endif; ?>
                    <?php if ($set['btwmarge']) : ?>
                        <li>
                            <dt>BTW Marge</dt>
                            <dd><?php echo $set['btwmarge']; ?></dd>
                        </li>
                    <?php endif; ?>
                    <?php if ($set['aantal_cilinders']) : ?>
                        <li>
                            <dt>Aantal Cilinders</dt>
                            <dd><?php echo $set['aantal_cilinders']; ?></dd>
                        </li>
                    <?php endif; ?>

                    <?php if ($set['cilinderinhoud']) : ?>
                        <li>
                            <dt>Cilinder Inhoud</dt>
                            <dd><?php echo $set['cilinderinhoud']; ?></dd>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="col-right">
                <?php if ($set['carrosserie']) : ?>
                    <li>
                        <dt>Carrosserie</dt>
                        <dd><?php echo $set['carrosserie']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['tankinhoud']) : ?>
                    <li>
                        <dt>Tankinhoud</dt>
                        <dd><?php echo $set['tankinhoud']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['gewicht']) : ?>
                    <li>
                        <dt>Gewicht</dt>
                        <dd><?php echo $set['gewicht']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['max_trekgewicht']) : ?>
                    <li>
                        <dt>Max. Trekgewicht</dt>
                        <dd><?php echo $set['max_trekgewicht']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['laadvermogen']) : ?>
                    <li>
                        <dt>Laadvermogen</dt>
                        <dd><?php echo $set['laadvermogen']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['apk']) : ?>
                    <li>
                        <dt>APK</dt>
                        <dd><?php echo $set['apk']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['bijtelling']) : ?>
                    <li>
                        <dt>Bijtelling</dt>
                        <dd><?php echo $set['bijtelling']; ?></dd>
                    </li>
                <?php endif; ?>
                <?php if ($set['energielabel']) : ?>
                    <li>
                        <dt>Energielabel</dt>
                        <dd><?php echo $set['energielabel']; ?></dd>
                    </li>
                    <?php if ($set['gemiddeld_verbruik']) : ?>
                        <li>
                            <dt>Gemiddeld Verbruik</dt>
                            <dd><?php echo $set['gemiddeld_verbruik']; ?></dd>
                        </li>
                    <?php endif; ?>
                    <?php if ($set['verbruik_stad']) : ?>
                        <li>
                            <dt>Verbruik Stad</dt>
                            <dd><?php echo $set['verbruik_stad']; ?></dd>
                        </li>
                    <?php endif; ?>
                    <?php if ($set['verbruik_snelweg']) : ?>
                        <li>
                            <dt>Verbruik Snelweg</dt>
                            <dd><?php echo $set['verbruik_snelweg']; ?></dd>
                        </li>
                    <?php endif; ?>
                    <?php if ($set['wegenbelasting_min']) : ?>
                        <li>
                            <dt>Wegenbelasting</dt>
                            <dd><?php echo $set['wegenbelasting_min']; ?></dd>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </ul>
        </section>
    <?php endif; ?>