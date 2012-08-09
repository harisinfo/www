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
                        <h2>Free Hair Cuts</h2>
                        {assign var="saloon_id" value=$login_response.saloon_id}
                        {if $response.registered == 'true'}
                        <div class="warning">Details saved successfully</div>
                        {/if}
                        <p>
                        <form method="POST" action="">
                        <input type="hidden" name="update" value="free_haircuts" />
                        <textarea name="free_haircuts" id="free_hair_cuts" style="margin-top:0px;">{$saloon.free_haircuts.$saloon_id}</textarea>
                        </p>
                        <p>
                        <input type="submit" id="submit" name="submit" value="Update Free Hair Cuts" />
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