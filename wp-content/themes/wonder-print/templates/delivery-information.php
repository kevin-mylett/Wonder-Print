<?php
/**
 * Delivery costs & timescale
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php if(( is_product() && has_term( 'wall-stickers', 'product_cat' ) )) : ?>
<table class="delivery-table">
    <thead>
      <tr>
        <th>Delivery Method</th>
        <th>Delivery Time</th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Standard</td>
        <td>2-3 days</td>
        <td>£3.95</td>
      </tr>
      <tr>
        <td>Express</td>
        <td>Next Day (tracked)</td>
        <td>£6.95</td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>

<?php if(( is_product() && has_term( 'canvas-prints', 'product_cat' ) )) : ?>
<table class="delivery-table">
    <thead>
      <tr>
        <th>Delivery Method</th>
        <th>Delivery Time</th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Standard</td>
        <td>2-3 days</td>
        <td>£6.95</td>
      </tr>
      <tr>
        <td>Express</td>
        <td>Next Day (tracked)</td>
        <td>£9.95</td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>


<?php if(( is_product() && has_term( 'wedding-prints', 'product_cat' ) ) ) : ?>

<table class="delivery-table">
    <thead>
      <tr>
        <th>Delivery Method</th>
        <th>Delivery Time</th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Standard</td>
        <td>2-3 days</td>
        <td>£5.95</td>
      </tr>
      <tr>
        <td>Express</td>
        <td>Next Day (tracked)</td>
        <td>£8.95</td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>



<?php if(( is_product() && has_term( 'vinyl-wallpaper', 'product_cat' ) )) : ?>
<table class="delivery-table">
    <thead>
      <tr>
        <th>Delivery Method</th>
        <th>Delivery Time</th>
        <th>Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Express</td>
        <td>Next Day (tracked)</td>
        <td>£10.95</td>
      </tr>
    </tbody>
  </table>
<?php endif; ?>

<p>You will be asked to select your delivery option at the checkout.</p>
<p>We currently only deliver to the UK mainland. Please allow an extra working day for bank holidays.</p>