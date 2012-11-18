<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>mzz dummy project {title separator=" | " start=" - "}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="generator" content="{$smarty.const.MZZ_NAME} v.{$smarty.const.MZZ_VERSION}-{$smarty.const.MZZ_REVISION}" />
    <meta name="keywords" content="{meta show="keywords" default="mzz, dummy"}"/>
    <meta name="description" content="{meta show="description" default="mzz dummy project"}" />
    <link rel="stylesheet" href="{$SITE_PATH}/css/style.css" type="text/css" media="screen" />
    <!--[if lte IE 6]><link rel="stylesheet" href="{$SITE_PATH}/css/style_ie.css" type="text/css" media="screen" /><![endif]-->
    {include file='include.css.tpl'}
    <script type="text/javascript">
    //<!--
    var SITE_PATH = '{$SITE_PATH}';
    var SITE_LANG = '{$toolkit->getLocale()->getName()}';
    //-->
    </script>
    {include file='include.js.tpl'}
</head>
<body>
{$content}
</body>
</html>