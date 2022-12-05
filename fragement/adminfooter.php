<?php

$a = new Sel();
$response = $a->getall('settings');
$footer = $response[0]['footertext'];
echo '<div class="footer_part">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer_iner text-center">
<p>copyright &copy;  '.date('Y').'  '.$footer.' </p>
</div>
</div>
</div>
</div>
</div>';
