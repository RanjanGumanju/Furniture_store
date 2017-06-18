<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/13/2017
 * Time: 4:59 PM
 */
?>
<link href="<?php echo base_url(); ?>assets/css/loginstyle.css" rel="stylesheet"/>
<?php echo form_open('product/create'); ?>
        <div class="container">
            <label><b>Product name:</b></label><input type="text" placeholder="Enter product name" name="pname" required>
            <label><b>Price:</b></label><input type="text" placeholder="Enter price" name="price" required>
            <label><b>Select category:</b></label>
            <select name="category_id" >
                <?php foreach ($categorys as $category):?>
                    echo"  <option value="<?php echo $category['category_id'];?>"><?php echo $category['category_name'];?></option>";
                <?php endforeach; ?>
            </select>

                <button type="submit">Submit</button>
        </div>
</form>