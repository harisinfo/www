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
			<p class="home_content">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas magna magna, mattis viverra molestie tincidunt, feugiat nec nisi. 
			Vestibulum pulvinar, magna id vehicula venenatis, dolor mauris facilisis justo, lacinia accumsan sapien risus at justo.
			</p>
			</div>
			
			<div id="new_content_hairstyles">
			
				<h2>Latest Hairstyles</h2>
				{include file='home-page-hairstyles.tpl'}
			</div>
			
			<div id="new_content_saloons">
			
				<h2>Latest Saloons</h2>
				{include file='home-page-saloons.tpl'}
			</div>
			
			<!-- mobile hair dressers -->
			<div id="new_content_mobile">
				<h2>Mobile Hairdressers</h2>
				{include file='home-page-saloons.tpl'}
			</div>
			
		</div>
	
	<div id="fright">
                <div id="inner-r1">{include file='search-box.tpl'}</div>
                
	</div>

	{include file='footer.tpl'}
</div>


</body>

</html>