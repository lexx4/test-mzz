{include file="admin/title.tpl" title="Записи"}
<table>
    <thead>
        <tr class="first center">
            <th class="first" style="width: 30px;">ID:</th>
            <th class="left">Имя</th>
            <th style="width: 120px;">Телефон</th>
            <th style="width: 120px;">Адрес</th>
            <th style="width: 120px;">Возраст</th>
            <th style="width: 120px;">Владелец</th>
            <th style="width: 120px;">Создан</th>
            <th class="last" style="width: 30px;">JIP</th>
        </tr>
    </thead>
    <tbody>
    {foreach $notebookItems as $notebookItem}
        <tr class="center">
            <td class="first">{$notebookItem->getId()}</td>
            <td class="left">{$notebookItem->getName()|h}</td>
            <td>{$notebookItem->getPhone()|h}</td>
            <td>{$notebookItem->getAddress()|h}</td>
            <td>{$notebookItem->getAge()|h}</td>
            <td>
            	{if $notebookItem->getUser()}
            		{$notebookItem->getUser()->getLogin()|h}
            	{else}
            		&mdash;
            	{/if}
            </td>
            <td>{$notebookItem->getDateCreated()|date_format:"%d.%m.%Y %H:%M"|h}</td>
            <td class="last">{$notebookItem->getJip()}</td>
        </tr>
    </tbody>
    {/foreach}
    <tfoot>
    <tr class="last">
        <td class="first"></td>
        <td colspan="4">{$pager->toString('admin/main/adminPager.tpl')}</td>
        <td class="last" colspan="2" style="text-align: right; color: #7A7A7A;">{_ simple/total}: {$pager->getItemsCount()}</td>
    </tr>
    </tfoot>
</table>