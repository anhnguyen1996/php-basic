<?php
if (file_exists(LAYOUT_VIEWS_URL . 'home/slider.php')) {
    require_once(LAYOUT_VIEWS_URL . 'home/slider.php');
}
/**
 * @var Data $data
 */
$records = $data->getRecords();

foreach($records['products'] as $product)
{
    print_r($product);
}
//die('Die at content.php/13');
?>
<div class="top-3-grids">
    <div class="section group">
        <div class="grid_1_of_3 images_1_of_3">
            <a href="single.html"><img src="<?php echo IMAGES_URL;?>grid-img1.jpg"></a>
            <h3>Lorem Ipsum is simply dummy text </h3>
        </div>
        <div class="grid_1_of_3 images_1_of_3 second">
            <a href="single.html"><img src="<?php echo IMAGES_URL;?>grid-img2.jpg"></a>
            <h3>Lorem Ipsum is simply dummy text </h3>
        </div>
        <div class="grid_1_of_3 images_1_of_3 theree">
            <a href="single.html"><img src="<?php echo IMAGES_URL;?>grid-img3.jpg"></a>
            <h3>Lorem Ipsum is simply dummy text </h3>
        </div>
    </div>
</div>

<div class="content-grids">
    <h4>Deals of the day</h4>
    <div class="section group">
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m1.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$260</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m2.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$150</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m7.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$130</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m4.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$460</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
    </div>
    <div class="section group">
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m2.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$260</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m6.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$100</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m7.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$180</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
        <div class="grid_1_of_4 images_1_of_4 products-info">
            <img src="<?php echo IMAGES_URL;?>m1.jpg">
            <a href="single.html">Duis aute irure dolor in reprehenderit sed do eiusmod tempor
                incididunt</a>
            <h3>$140</h3>
            <ul>
                <li><a class="cart" href="single.html"> </a></li>
                <li><a class="i" href="single.html"> </a></li>
                <li><a class="Compar" href="single.html"> </a></li>
                <li><a class="Wishlist" href="single.html"> </a></li>
            </ul>
        </div>
    </div>

</div>
<div class="content-sidebar">
    <h4>Categories</h4>
    <ul>
        <li><a href="#">Accord Mobiles</a></li>
        <li><a href="#">Ace Mobile</a></li>
        <li><a href="#">Acer Mobile</a></li>
        <li><a href="#">Airfone</a></li>
        <li><a href="#">Apple</a></li>
        <li><a href="#">Blackberry</a></li>
        <li><a href="#">Byond Tech</a></li>
        <li><a href="#">Celkon Mobiles</a></li>
        <li><a href="#">Dell Mobile Phones </a></li>
        <li><a href="#">Fly Mobile</a></li>
        <li><a href="#">Fujezone Mobiles </a></li>
        <li><a href="#">HTC</a></li>
        <li><a href="#">LG Mobiles</a></li>
        <li><a href="#">Longtel Mobile</a></li>
        <li><a href="#">Maxx</a></li>
        <li><a href="#">Micromax Mobiles </a></li>
        <li><a href="#">Samsung Mobiles</a></li>
        <li><a href="#">Sony Ericsson Mobiles</a></li>
        <li><a href="#">Wynncom Mobiles</a></li>
    </ul>
</div>