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
                        <h2>My Advises</h2>
                        {if $response}
                        	{if $response == 'success'}
                        		<p><div class="error">Your advise has been removed succesfully</div></p>
                        	{/if}
                        {/if}
                        {assign var="saloon_id" value=$login_response.saloon_id}
                        {if $saloon_posts.results=='true'}
                        	{foreach key=key item=item from=$saloon_posts.saloon_advise_id}
                        	<form action="" method="post" name="frm_{$key}" id="frm_{$key}">
                        	<input type="hidden" name="type_action" value="delete" />
                        	<input type="hidden" name="saloon_advise_id" value="{$key}" />
                        	<p><strong>Subject:</strong> <span style="margin-left: 29px;">{$saloon_posts.subject.$key}</span></p>
                        	<p><strong>Title:</strong> <span style="margin-left: 42px;">{$saloon_posts.post_heading.$key}</span></p>
                        	<p><strong>Advise:</strong> <div style="margin-left: 80px; margin-top: -15px; width: 400px; height:auto; padding-bottom: 5px; color: #304766; ">{$saloon_posts.post_message.$key}...</div></p>
                        	<p><strong>Date Posted:</strong> <span style="margin-left: 3px;">{$saloon_posts.post_date.$key|date_format}</span></p>
                        	<p style="margin-top: 10px; margin-bottom: 10px;">
                        	<a href="javascript:confirm_delete('frm_{$key}');">[Remove Post]</a> 
                        	<a rel="gb_page_center[600, 600]" title="Edit Advise" href="manage-edit-post.php?saloon_advise_id={$key}">[Edit Post]</a></p>
                        	<hr />
                        	<p style="margin-top: 10px;"></p>
                        	</form>
                        	{/foreach}
                        {else}
                        <p><div class="error">No advises added yet</div></p>
                        {/if}
                        
                        <p>
                        		<a rel="gb_page_center[600, 600]" title="Post Advise" href="manage-add-post.php">Post Advsise</a>
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
