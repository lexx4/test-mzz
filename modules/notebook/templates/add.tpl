<div class="jipTitle">
	{if $is_edit}
		Редактирование
	{else}
		Добавление
	{/if}
	записи
</div>

{formtag action={url} method="post" jip=true}
	<div class="field{$validator->isFieldRequired('name', ' required')}{$validator->isFieldError('name', ' error')}">
	    <div class="label">
	        {form->caption name="name" value="_ name"}
	    </div>
	    <div class="text">
	        {form->text name="name" value=$notebookItem->getName()}
	        <span class="caption error">{$validator->getFieldError('name')}</span>
	    </div>
	</div>
	
	<div class="field{$validator->isFieldRequired('phone', ' required')}{$validator->isFieldError('phone', ' error')}">
	    <div class="label">
	        {form->caption name="phone" value="_ phone"}
	    </div>
	    <div class="text">
	        {form->text name="phone" value=$notebookItem->getPhone()}
	        <span class="caption error">{$validator->getFieldError('phone')}</span>
	    </div>
	</div>
	
	<div class="field{$validator->isFieldRequired('address', ' required')}{$validator->isFieldError('address', ' error')}">
	    <div class="label">
	        {form->caption name="address" value="_ address"}
	    </div>
	    <div class="text">
	        {form->text name="address" value=$notebookItem->getAddress()}
	        <span class="caption error">{$validator->getFieldError('address')}</span>
	    </div>
	</div>
	
	<div class="field{$validator->isFieldRequired('age', ' required')}{$validator->isFieldError('age', ' error')}">
	    <div class="label">
	        {form->caption name="age" value="_ age"}
	    </div>
	    <div class="text">
	        {form->text name="age" value=$notebookItem->getAge()}
	        <span class="caption error">{$validator->getFieldError('age')}</span>
	    </div>
	</div>
	
	<div class="field buttons">
	    <div class="text">
	        {form->submit name="submit" value="_ simple/save"} {form->reset jip=true name="reset" value="_ simple/cancel"}
	    </div>
	</div>
{/formtag}
