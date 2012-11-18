{* main="header.tpl" placeholder="content" *}
<div id="wrapper">
    <div id="header">
        <a href="{$SITE_PATH}/" rel="homepage"><img src="{$SITE_PATH}/images/logo.gif" alt="logo" /></a>
	</div>

	<div id="content">
        {$content}
    </div>
</div>

<div id="footer-wrapper">
    <div id="footer">
        <p>{$timer->toString()}</p>
        <p><b>{$smarty.const.MZZ_NAME} v.{$smarty.const.MZZ_VERSION}-{$smarty.const.MZZ_REVISION} &copy; {"Y"|date}</b></p>
    </div>
</div>