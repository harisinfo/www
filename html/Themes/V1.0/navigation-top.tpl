<div id="navigation-top">
<ul>
{foreach key=key item=item from=$response.category_id}
<li>
{$response.category_label.$key}
{if $response.sub_category_id.$key}
<ul>
	{foreach key=key1 item=item1 from=$response.sub_category_id.$key}
		{if $response.sub_category_label.$key.$key1}
			<li>{$response.sub_category_label.$key.$key1}</li>
		{/if}
	{/foreach}
</ul>
{/if}
</li>
{/foreach}
</ul>
</div>
