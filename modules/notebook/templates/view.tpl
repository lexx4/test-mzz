<table>
	<tr>
		<td>{_ name}</td>
		<td>{$notebookItem->getName()|h}</td>
	</tr>
	<tr>
		<td>{_ phone}</td>
		<td>{$notebookItem->getPhone()|h}</td>
	</tr>
	<tr>
		<td>{_ address}</td>
		<td>{$notebookItem->getAddress()|h}</td>
	</tr>
	<tr>
		<td>{_ age}</td>
		<td>{$notebookItem->getAge()|h}</td>
	</tr>
	<tr>
		<td>{_ date_created}</td>
		<td>{$notebookItem->getDateCreated()|date_format:"%d.%m.%Y"|h}</td>
	</tr>
	<tr>
		<td>{_ date_modified}</td>
		<td>{$notebookItem->getDateModified()|date_format:"%d.%m.%Y"|h}</td>
	</tr>
</table>