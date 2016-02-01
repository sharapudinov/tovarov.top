<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("CD_BLM_NAME"),
	"DESCRIPTION" => GetMessage("CD_BLM_DESCRIPTION"),
	"ICON" => "/images/lists_menu.gif",
	"SORT" => 100,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "lists",
			"NAME" => GetMessage("CD_BLM_LISTS"),
			"SORT" => 35,
		)
	),
);

?>