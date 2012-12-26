{include file='header.tpl'}
<body>
<form name="forgot_password" id="forgot_password" method="POST" action="">
<div id="container" style="width:250px;">
	<div id="main" style="width: 240px;">

		

                <p>
                {if $response}
                	{if $response=='success'}
                		Your details has been emailed to you!
                	{else}
                		Email could not be sent
                	{/if}
                {else}
                {/if}
                </p>
            
                <input type="hidden" id="user_type" name="user_type" value="USER" />

                <div class="label_info">Email address:</div>
                
              	<div class="register_text-field"><input type="text" id="user_email" name="user_email" value="{$request.search.user_email}" /></div>
                
                <div class="label_info">&nbsp;</div>
                <div class="register_text-field"><input type="submit" id="submit" name="submit" value="Resend my password" /></div>
             
                
		</div>
	</div>
</form>
</body>

</html>