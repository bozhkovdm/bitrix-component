<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php
$APPLICATION->IncludeComponent(
    'alma:groups.list',
    '.default',
    [
        'SEF_FOLDER'   => $arParams["SEF_FOLDER"]
    ],
    $component
);
