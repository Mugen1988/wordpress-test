<?php

include_once QI_ADDONS_FOR_ELEMENTOR_SHORTCODES_PATH . '/timeline/class-qiaddonsforelementor-timeline-shortcode.php';

foreach ( glob( QI_ADDONS_FOR_ELEMENTOR_SHORTCODES_PATH . '/timeline/variations/*/include.php' ) as $variation ) {
	include_once $variation;
}

