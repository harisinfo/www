<div id="navigation-top">
<ul>
{foreach key=key item=item from=$response.category_id}
<li>
{$response.category_label.$key}
	{if $response.sub_category_id.$key}
	<ul>
		<li><a href="?module=product&category_id={$key}">All Products - {$response.category_label.$key}</a></li>
		{foreach key=key1 item=item1 from=$response.sub_category_id.$key}
			{if $response.sub_category_label.$key.$key1}
				<li><a href="?module=product&category_id={$key}&sub_category_id={$key1}">{$response.sub_category_label.$key.$key1}</a></li>
			{/if}
		{/foreach}
	</ul>
	{/if}
</li>
{/foreach}
</ul>
</div>
