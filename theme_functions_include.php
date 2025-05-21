<?php
defined('IN_FUSION') or die();

function theme_styles() {
    add_to_head('<link rel="stylesheet" href="'.THEME.'css/bootstrap.min.css" type="text/css" />');
    add_to_head('<link rel="stylesheet" href="'.THEME.'styles.css" type="text/css" />');
    add_to_head('<script src="'.THEME.'js/bootstrap.bundle.min.js"></script>');
}

add_handler('theme_styles');
