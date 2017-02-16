<option></option>
{foreach from=$optiones key=k item=res}
<option value="{$res['id_area']}">{$res['area']}</option>
{/foreach}