<!-- Start rendering map -->
<?php
  $location = get_field('google_map');
  if( !empty($location) ):
?>
<p>Địa chỉ: <?php echo $location['address']; ?></p>
<p>Tọa độ Latitude: <?php echo $location['lat']; ?></p>
<p>Tọa độ Longtitude: <?php echo $location['lng']; ?></p>
<div class="acf-map">
  <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="
  <?php echo $location['lng']; ?>">
  </div>
</div>
<?php endif; ?>
<!-- End rendering map -->
