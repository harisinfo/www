<div id="products">
	{foreach key=key item=item from=$response.product.product_id}
		{foreach key=key1 item=item1 from=$response.product.brand.$key}
			<div class="product_detail_{$key1}">
				<img src="{$response.product.product_detail_image_main.$key.$key1}" />
			</div>
		{/foreach}
	{/foreach}
</div>