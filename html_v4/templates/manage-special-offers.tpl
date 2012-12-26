{include file='header.tpl'}
<body>
<div id="container">
	
	<div id="fleft">
		<div id="logo">like<span class='alt'>my</span>hair.co.uk</div>
                {include file='login-box.tpl'}
	</div>
	
	<div id="main">
		<div id="ad"></div>
                {include file='top-nav-logged-out.tpl'}
		<div id="content">
                        <h2>Special Offers</h2>
                        {assign var="saloon_id" value=$login_response.saloon_id}
                        {if $response.registered == 'true'}
                        <div class="warning">Details saved successfully</div>
                        {/if}
                        <p>
                        {if $saloon.special_offer.$saloon_id}
                        	{if $saloon.special_offer.$saloon_id != ''}
                        	<a href="/user_images/{$saloon.special_offer.$saloon_id}" target="special_offer">Download Current special offer image</a>
                        	{/if}
                        {/if}
                        </p>
                        
                        <p>
                        
                        <form enctype="multipart/form-data" method="POST" action="">
                        <input type="hidden" name="update" value="special_offer" />
						<input type="file" name="image_file" id="image_file" />
						<br />
						<div class="clear-height"></div>
						<input type="submit" value="Upload File" />
						<div class="spacer"></div>
						</form>
                        </p>
		</div>
	</div>
	
	<div id="fright">
                <div id="inner-r1">{include file='search-box.tpl'}</div>
		<!--<div id="inner-r2"></div>-->
	</div>

	{include file='footer.tpl'}
</div>
</body>

</html>
