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
                <form method="POST" action="">
                Search by saloon advise subject: 
                <select onchange="this.form.submit();" name="post_subject" id="post_subject" class="user-type" class="{if $response.required_field.post_subject=='required'}error{else}register_text-field{/if}">
                		<option value=""{if $request.search.post_subject==""} selected{/if}>Choose a subject:</option>
                	{foreach key=key item=item from=$subject_advises}
                		<option value="{$key}"{if $request.search.post_subject==$key} selected{/if}>{$item}</option>
                	{/foreach}
                </select>
                </form>
                        <h2>Saloon Advises</a></h2>
                        
                        {if $response.results=='true'}
                        	{foreach key=key item=item from=$response.saloon_advise_id}
                                {assign var="saloon_id" value=$key}
                                    {foreach key=key1 item=item1 from=$response.saloon_advise_id.$key}
                        				<p><strong>Subject:</strong> <span style="margin-left: 29px;">{$response.saloon_post_subject.$saloon_id.$key1}</span></p>
                        				<p><strong>Posted By:</strong> <span style="margin-left: 18px;">
                        				<a href="/saloon-detail-{$saloon_id}.html">{$response.saloon_name.$saloon_id}</a>
                        				</span>
                        				</p>                        				
                        				<p><strong>Title:</strong> <span style="margin-left: 42px;">
                        				<a href="/saloon-advise-{$key1}.html">{$response.saloon_post_heading.$saloon_id.$key1}</a>
                        				</span></p>
                        				<p><strong>Advise:</strong> <div style="margin-left: 80px; margin-top: -15px; width: 400px; height:auto; padding-bottom: 5px; color: #304766; ">
                        				{$response.saloon_post_message.$saloon_id.$key1}
                        				{if !$request.search.advise}... <a href="/saloon-advise-{$key1}.html">Read More</a>{/if}
                        				</div></p>
                        				<p><strong>Date Posted:</strong> <span style="margin-left: 3px;">{$response.saloon_post_date.$saloon_id.$key1|date_format}</span></p>
                        				<hr />
                        				<p style="margin-top: 10px;"></p>
                                    {/foreach}
                        	
                        	{/foreach}
                        {else}
                        <p><div class="error">No advises posted</div></p>
                        {/if}
                
                        
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
