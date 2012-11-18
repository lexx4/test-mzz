{$notebook->getJip()}
<table>
	<tr>
		<th>{_ name}</th>
		<th>{_ phone}</th>
		<th>{_ address}</th>
		<th>{_ age}</th>
		<th>{_ date_created}</th>
		<th>{_ date_modified}</th>
		<th>jip</th
	</tr>
	{foreach $notebookItems as $notebookItem}
	<tr>
		<td>
			<a href="{url route='withId' module='notebook' action='view' id=$notebookItem->getId()}">
			{$notebookItem->getName()|h}
			</a>
		</td>
		<td>{$notebookItem->getPhone()|h}</td>
		<td>{$notebookItem->getAddress()|h}</td>
		<td>{$notebookItem->getAge()|h}</td>
		<td>{$notebookItem->getDateCreated()|date_format:"%d.%m.%Y"|h}</td>
		<td>{$notebookItem->getDateModified()|date_format:"%d.%m.%Y"|h}</td>
		<td>{$notebookItem->getJip()}</td>
	</tr>
	{/foreach}
	
</table>