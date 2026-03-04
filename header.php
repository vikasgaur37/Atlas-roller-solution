<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body>

<header>
    <div class="logo">Atlas Roller Solution</div>
    <nav>
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url('/products'); ?>">Products</a>
        <a href="<?php echo home_url('/industries'); ?>">Industries</a>
        <a href="<?php echo home_url('/about'); ?>">About</a>
        <a href="<?php echo home_url('/contact'); ?>">Contact</a>
    </nav>
</header>
