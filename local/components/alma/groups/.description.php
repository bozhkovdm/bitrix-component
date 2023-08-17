<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$arComponentDescription = array(
    'NAME' => GetMessage("Комплексный компонент: список групп пользователей с деталями"),
    'DESCRIPTION' => GetMessage("Компонент выводит список групп пользователей с деталями"),
    "PATH" => [
        "ID" => "alma_complex_components",
        "CHILD" => [
            "ID" => "complexgroupslist",
            "NAME" => "Комплексный компонент Группы пользователей"
        ]
    ]
);