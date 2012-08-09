{include file='header.tpl'}
{assign var="saloon_id" value=$request.search.saloon_id}
<body>
<div id="container">
	
	<div id="fleft">
		<div id="logo">like<span class='alt'>my</span>hair.co.uk</div>
                {include file='login-box.tpl'}
	</div>
	
	<div id="main">
		<div id="ad"></div>
                {include file='top-nav-logged-out.tpl'}
                        {foreach key=key item=item from=$saloons.saloon_id}
                        <div id="content">
                        <div class="saloon_1">
                        	<h2>{$saloons.saloon_name.$key}</h2>
                        		<div class="leftcolumn">
                        			<img class="img_1" src="/user_images/{if $saloons.saloon_images.$key.1}{$saloons.saloon_images.$key.1}{else}noimage.gif{/if}" width="110" height="90" />
                        		</div>
                        		<div class="rightcolumn">
                        			<span style="font-weight:bold; padding-right:5px;">Address: </span>
                        			<span style="font-weight:normal; margin-left:10px;">
                        			{$saloons.saloon_address_line_1.$key} {$saloons.saloon_address_line_2.$key}
                        			{$saloons.saloon_city.$key}, {$saloons.saloon_state.$key} {$saloons.saloon_postcode.$key}
                        			</span>
                        			<span style="font-weight:bold; padding-right:5px;">Telephone: </span>
                        			<span style="font-weight:normal; margin-left:2px;">
                        			{$saloons.saloon_address_line_1.$key} {$saloons.saloon_address_line_2.$key}
                        			{$saloons.saloon_city.$key}, {$saloons.saloon_state.$key} {$saloons.saloon_postcode.$key}
                        			</span>
                        			
                        		</div>
                        		<div class"clearboth"></div>
                        </div>
                        
                        <div class="saloon_3">
                        	<h2>Location</h2>
                        		<div class="leftcolumn">
                        			<img class="img_2" src="http://maps.google.com/staticmap?markers={$saloons.geo_long.$key},{$saloons.geo_lat.$key},red&amp;zoom=15&amp;size=300x120&amp;key={$config_variables.api_key}" />
                        		</div>
                        		<div class"clearboth"></div>
                        </div>
                        </div>
                        {/foreach}
                <div id="new_content_saloons" style="margin-top: 50px;">
                        <div class="tabber">

                        <div class="tabbertab">
                        <h2>More Images</h2>
                        <p style="height: 200px;">
                        {if $saloons.saloon_image}
                        {foreach key=key item=item from=$saloons.saloon_image}
                        {if $key != '' || $key != null}
                        <img src="/user_images/{$saloons.saloon_image.$key}" width="110" height="90" class="img_1" style="margin-left: 5px; margin-top: 5px;" />
                        {else}
                        No more images found for this saloon
                        {/if}
                        {/foreach}
                        {else}
                        No more images found for this saloon
                        {/if}
                        </p>
                        </div>


                        <div class="tabbertab">
                        <h2>Price List</h2>
                        <p>
                        {if $saloons.price_list.$saloon_id}
                        {$saloons.price_list.$saloon_id}
                        {else}    
                        No content uploaded for this section    
                        {/if}
                        </p>
                        </div>
                        
                        
                        <div class="tabbertab">
                        <h2>Opening Hours</h2>
                        <p>
                        {if $saloons.opening_hours.$saloon_id}
                        {$saloons.opening_hours.$saloon_id}
                        {else}    
                        No content uploaded for this section    
                        {/if}
                        </p>
                        </div>


                        <div class="tabbertab">
                        <h2>Special Offers</h2>
                        <p>
                        {if $saloons.special_offer.$saloon_id}
                        	{if $saloons.special_offer.$saloon_id != ''}
                        		<a href="/user_images/{$saloons.special_offer.$saloon_id}" target="special_offer">View current Special Offer</a>
                        	{else}
                        		No content uploaded for this section
                        	{/if}
                        {else}
                        No content uploaded for this section
                        {/if}
                        </p>
                        </div>
                        
                        <div class="tabbertab">
                        <h2>Saloon Employees</h2>
                        
                        {if $$saloon_employees.results=='true'}
                        	{foreach key=key1 item=item1 from=$saloon_employees.saloon_employee_id}
                        	<p><strong>{$saloon_employees.first_name.$key1} {$saloon_employees.last_name.$key1} {if $saloon_employees.user_designation.$key1}({$saloon_employees.user_designation.$key1}){/if}</strong></p>
                        	{/foreach}
                        {else}
                        <p>No employees added for this saloon</p>
                        {/if}
                        </div>

                        <div class="tabbertab">
                        <h2>Courses Training</h2>
                        <p>
                        {if $saloons.courses_training.$saloon_id}
                        {$saloons.courses_training.$saloon_id}
                        {else}
                        No content uploaded for this section
                        {/if}
                        </p>
                        </div>
                        
                        <div class="tabbertab">
                        <h2>Vacancies</h2>
                        <p>
                        {if $saloons.vacancies.$saloon_id}
                        {$saloons.vacancies.$saloon_id}
                        {else}
                        No content uploaded for this section
                        {/if}
                        </p>
                        </div>

                        </div>

		</div>
	</div>
	
	<div id="fright">
                <div id="inner-r1">{include file='search-box.tpl'}</div>
	</div>

	{include file='footer.tpl'}
</div>
</body>

</html>