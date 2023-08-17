<?

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

$arComponentDescription = array(
    'NAME' => GetMessage("Список пользовательских групп"),
    'DESCRIPTION' => GetMessage("Компонент выводит список групп пользователей, зарегистрированных в системе"),
    "PATH" => [
        "ID" => "alma_components",
        "CHILD" => [
            "ID" => "groupslist",
            "NAME" => "Группы пользователей"
        ]
    ]
);