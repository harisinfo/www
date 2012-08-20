<div id="products">
	{foreach key=key item=item from=$response.product.product_id}
	<div id="product_{$key}">
		<h2>
		<a href="?module=product&category={$request.search.category_id}&sub_category_id={$request.search.sub_category_id}&product_id={$key}">
		{$response.product.product_title.$key}</a>
		</h2> 
		<div class="about_product">
		{$response.product.product_description.$key}
		</div>
		{foreach key=key1 item=item1 from=$response.product.brand.$key}
		
			{if $response.product.combine_product_id.$key.$key1!=0}
				{assign var="key2" value=$key1}
			{/if}
			
			{if $response.product.combine_product_id.$key.$key1==0}
				<h3>
					{$response.product.product_name.$key.$key1}
					
					{if $response.product.dispense_mg.$key.$key1!=0.00}
					
						{math equation=x x=$response.product.dispense_mg.$key.$key1 format="%.1f"}
						{if $key2!=0} 
						/ {math equation=x x=$response.product.dispense_mg.$key.$key2 format="%.1f"}
						{/if}
						mg						
						
					{/if}
					
					{if $response.product.dispense_ml.$key.$key1!=0}
					
						{math equation=x x=$response.product.dispense_ml.$key.$key1 format="%.1f"}
						{if $key2!=0} 
						/ {math equation=x x=$response.product.dispense_ml.$key.$key2 format="%.1f"}
						{/if}
						ml
						
					{/if}
					
					{if $response.product.dispense_number.$key.$key1!=0}
						x 
						{$response.product.dispense_number.$key.$key1}
						{if $key2!=0} 
						/ {$response.product.dispense_number.$key.$key2}
						{/if}
						
					{/if}
					
					{if $key2!=0} 
					({$response.product.dispense_number.$key.$key1 + $response.product.dispense_number.$key.$key2})
					{/if}
					
					{if $response.product.dispense_type.$key.$key1!=''}
					 {$response.product.dispense_type.$key.$key1}
					{/if}					
					{assign var="key2" value=0}
				</h3>
				
				<div class="product_detail_{$key1}">
					<img src="{$response.product.product_detail_image_main.$key.$key1}" />
				</div>
				
				<div class="product_detail_{$key1}">
					<p>
					{$response.product.product_detail_description.$key.$key1}
					</p>
				</div>
				
				<div id="product_order_{$key}">
				{if $response.product.medical_condition_id.$key}
					<a href="?module=condition&condition_id={$response.product.medical_condition_id.$key}&product_id={$response.product.product_id.$key}">
					Start Free Consultation to Order</a>
				{else}
					<a href="add">Add to Basket</a>
				{/if}
				</div>
				
				
			{/if}	
		{/foreach}
		</div>
	{/foreach}
</div>