<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");
?>

<?
$APPLICATION->IncludeComponent(
	"alma:groups",
	".default",
	array(
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"COMPONENT_TEMPLATE" => ".default",
		"SET_STATUS_404" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"list" => "",
			"detail" => "#GROUP_ID#/"
		),
	),
	false
);
?>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>