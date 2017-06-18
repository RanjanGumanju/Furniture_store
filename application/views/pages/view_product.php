<?php echo $data['title'];?>
<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet"/>


        <label><b>Product name:</b></label>
        <?php echo $product['product_name']; ?>
        <label><b>Price:</b></label>
        <?php echo $product['price']; ?>

        <label><b>Select category:</b></label>
        <?php echo form_open('/product/delete'.$product['product_id']);?>
<input type="submit" value="Delete" >
</form>


