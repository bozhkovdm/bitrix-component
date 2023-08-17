<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

class GroupsDetail extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{
			return $arParams;
	}

	public function executeComponent()
	{
			$group = \Bitrix\Main\GroupTable::getList(
					[
							'select' => ['ID', 'NAME', 'DESCRIPTION'],
					]
			);


			$this->arResult['group'] = $group->fetch();
			$this->IncludeComponentTemplate();
	}
}