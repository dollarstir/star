<?php

$i = 0;

$f = fetchall('homeslide');
foreach ($f as $row) {
    ++$i;

    echo '<div id="ensign-nivoslider" class="slides">
                    
    <img src="yolkassets/upload/'.$row['slideimage'].'" alt="image" title="#slider-direction-'.($i + 1).'" />
</div>
<!-- direction 1 -->
<div id="slider-direction-'.$i.'" class="t-cn slider-direction">
    <div class="slider-progress"></div>
    <div class="slider-content t-cn s-tb slider-'.$i.'">
        <div class="title-container s-tb-c title-compress">
            <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow zoomIn"
                style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomIn;">
                We
                <span class="title-builder"> are </span>
                <span class="title-builder"> Voice </span> of
                <span class="title-builder"> Justice</span>
            </div>
            <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                Lowyer / Law Firm / Attorney
            </div>
        </div>
        <div data-wow-delay="0.4s" data-wow-duration="4s" class="button wow fadeIn" style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s; animation-name: fadeIn;">
            <a href="about" class="btn btn-success">Read more</a>
        </div>
    </div>
</div>';
}
