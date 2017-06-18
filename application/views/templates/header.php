<html>
<head>
    <title>

</title>
    <link href="<?php echo base_url(); ?>assets/css/dashboardstyle.css" rel="stylesheet"/></head>
<body>
<ul>
    <li><a href="<?php echo base_url();?>view_product">Home</a></li>

    <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Product</a>
        <div class="dropdown-content">
            <a href="<?php echo base_url();?>addproduct">Add product</a>
            <a href="#">Update product</a>
            <a href="#">View product</a>
        </div>
    </li>
    <li><a href="<?php echo base_url();?>aboutus">About us</a></li>

</ul>