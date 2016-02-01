<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("prop-show-bottom", "Y");
$APPLICATION->SetTitle("");
?>

<? $APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	".default", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "20",
		"HIDE_NOT_AVAILABLE" => "N",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "N",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "TIME_WORK",
			1 => "HEIGHT_GAP",
			2 => "CALIBER",
			3 => "VOLLEYS",
			4 => "MANUFACTURER",
			5 => "TIPE_SALUTE",
			6 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "BASE",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "COLOR",
			2 => "",
		),
		"FILTER_VIEW_MODE" => "VERTICAL",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "",
			1 => "MANUFACTIRER",
			2 => "MORE_PHOTO",
			3 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "COLOR",
			2 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "sort",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"BASKET_URL" => SITE_DIR."personal/basket/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "Y",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"PRODUCT_PROPERTIES" => array(
		),
		"OFFERS_CART_PROPERTIES" => array(
			0 => "SIZE",
			1 => "COLOR",
		),
		"SHOW_TOP_ELEMENTS" => "N",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "1",
		"SECTIONS_VIEW_MODE" => "LINE",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"PAGE_ELEMENT_COUNT" => "16",
		"LINE_ELEMENT_COUNT" => "4",
		"ELEMENT_SORT_FIELD" => "CATALOG_QUANTITY",
		"ELEMENT_SORT_ORDER" => "DESC",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"LIST_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "MORE_PHOTO",
			2 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "NAME",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "COLOR",
			2 => "",
		),
		"LIST_OFFERS_LIMIT" => "0",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "NEWPRODUCT",
			1 => "SALELEADER",
			2 => "SPECIALOFFER",
			3 => "ARTICLE",
			4 => "YOUTUBE_VIDEO",
			5 => "TIME_WORK",
			6 => "HEIGHT_GAP",
			7 => "CALIBER",
			8 => "VOLLEYS",
			9 => "vote_count",
			10 => "MANUFACTURER",
			11 => "SIZE",
			12 => "rating",
			13 => "vote_sum",
			14 => "TIPE_SALUTE",
			15 => "PACKING",
			16 => "THREEG",
			17 => "BLUETOOTH",
			18 => "WI_FI",
			19 => "ACCESSORIES",
			20 => "WIRELESS_INTERFACES",
			21 => "WEIGHT",
			22 => "DIAGONAL",
			23 => "MATERIAL",
			24 => "PRODUCT_LABEL_TEXT",
			25 => "MEMORY_CAPACITY",
			26 => "OS",
			27 => "LABEL",
			28 => "PIXEL_DENSITY",
			29 => "SEX",
			30 => "DIMENSIONS",
			31 => "DEVICE_COMPABILITY",
			32 => "TABS_MAIN_PAGE",
			33 => "TYPE_MATRIX",
			34 => "DAY_ITEM",
			35 => "SHOW_ON_MANUFACTURER_TAB",
			36 => "COLOR",
			37 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "NAME",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "SIZE",
			1 => "COLOR",
			2 => "",
		),
		"LINK_IBLOCK_TYPE" => "catalog",
		"LINK_IBLOCK_ID" => "17",
		"LINK_PROPERTY_SID" => "CML2_LINK",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "N",
		"USE_STORE" => "N",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"TEMPLATE_THEME" => "blue",
		"ADD_PICT_PROP" => "MORE_PHOTO",
		"LABEL_PROP" => "-",
		"PRODUCT_DISPLAY_MODE" => "Y",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"OFFER_TREE_PROPS" => array(
			0 => "COLOR",
			1 => "SIZE",
		),
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "Y",
		"DETAIL_SHOW_MAX_QUANTITY" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"DETAIL_USE_VOTE_RATING" => "Y",
		"DETAIL_VOTE_DISPLAY_AS_RATING" => "vote_avg",
		"DETAIL_BRAND_USE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"COMMENTS_IB" => "4",
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_USE_COMMENTS" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"USE_REVIEW" => "N",
		"ES_IBLOCK_GROUP" => "",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"SHOW_DEACTIVATED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
		"FILE_404" => "",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "product/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
); ?>
<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>