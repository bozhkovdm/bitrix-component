<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$APPLICATION->IncludeComponent(
	'alma:groups.detail',
    '.default',
    [
        'SEF_FOLDER'   => $arParams["SEF_FOLDER"],
        'GROUP_ID'   => $arResult['GROUP_ID'],
    ],
    $component
);