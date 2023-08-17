<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

class GroupsListComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        return $arParams;
    }

    public function executeComponent()
    {
        $groups = \Bitrix\Main\GroupTable::getList(
            [
                'select' => ['ID', 'NAME', 'DESCRIPTION']
            ]
        );


        $this->arResult['groups'] = $groups->fetchAll();
        $this->IncludeComponentTemplate();
    }
}