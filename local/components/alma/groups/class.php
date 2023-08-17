<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

class GroupsComponent extends CBitrixComponent
{
	public function executeComponent()
	{
		$componentPage = $this->complexExecute();
		$this->IncludeComponentTemplate($componentPage);
	}

	private function complexExecute()
	{
		global $APPLICATION;
		$componentPage = "";

		$arDefaultUrlTemplates404 = array(
			"list" => "",
			"detail" => "#GROUP_ID#/",
		);

		$arDefaultVariableAliases404 = array();

		$arComponentVariables = array();

		if ($this->arParams["SEF_MODE"] == "Y") {
			$arVariables = array();

			$arUrlTemplates = CComponentEngine::MakeComponentUrlTemplates(
				$arDefaultUrlTemplates404,
				$this->arParams["SEF_URL_TEMPLATES"]
			);
			$arVariableAliases = CComponentEngine::MakeComponentVariableAliases(
				$arDefaultVariableAliases404,
				$this->arParams["VARIABLE_ALIASES"]
			);

			$engine = new CComponentEngine($this);

			$componentPage = $engine->guessComponentPath(
				$this->arParams["SEF_FOLDER"],
				$arUrlTemplates,
				$arVariables
			);

			$b404 = false;

			if (!$componentPage) {
				$componentPage = "list";
				$b404 = true;
			}

			if ($b404 && $this->arParams["SET_STATUS_404"] === "Y") {
				$folder404 = str_replace(
					"\\",
					"/",
					$this->arParams["SEF_FOLDER"]
				);
				if ($folder404 != "/") {
					$folder404 = "/" . trim($folder404, "/ \t\n\r\0\x0B") . "/";
				}
				if (substr($folder404, -1) == "/") {
					$folder404 .= "index.php";
				}

				if ($folder404 != $APPLICATION->GetCurPage(true)) {
					CHTTP::SetStatus("404 Not Found");
					LocalRedirect($this->arParams["SEF_FOLDER"]);
				}
			}

			CComponentEngine::InitComponentVariables(
				$componentPage,
				$arComponentVariables,
				$arVariableAliases,
				$arVariables
			);

			$this->arResult = array(
				"FOLDER" => $this->arParams["SEF_FOLDER"],
				"URL_TEMPLATES" => $arUrlTemplates,
				"VARIABLES" => $arVariables,
				"ALIASES" => $arVariableAliases,
			);
		}
		return $componentPage;
	}
}