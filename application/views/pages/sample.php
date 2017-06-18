<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/17/2017
 * Time: 10:42 PM
 */

?>
<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet"/>
<form action="<?php echo base_url();?>" method="post" class="modal-content animate">
    <div class="container">
        <?php foreach($product as $products): ?>
    <label><b>Product name:</b></label>
    <?php echo $products['product_name']; ?>
    <label><b>Price:</b></label>
    <?php echo $products['price']; ?>

    <label><b>Select category:</b></label>

<?php endforeach; ?>
<button type="submit">Submit</button>
</div>
</form>
