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
                        <h2>My Hairstyles</h2>
                        {if $remove_image}
                        	{if $remove_image=='success'}
                        		<p><div class="error">Image removed successfully</div></p>
                        	{else}
                        		<p><div class="error">An error occoured while deleting this image, please try again</div></p>
                        	{/if}
                        {/if}
                        <p>
                        {include file='my-page-hairstyles.tpl'}
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
