{include file='header.tpl'}
<body>
<form name="frm_forgot_password" id="frm_forgot_password" method="POST" action="">
<div id="container" style="width:400px;">
	<div id="main">
		<div id="content">

                {if $response.registered != 'true'}
                <fieldset>
                
                	<legend>Forgot password?</legend>
                
                	<div class="label_info">Email address:</div>
                	<div class="register_text-field">
                	<input type="text" id="user_email" name="user_email" value="{$request.search.user_email}" />
                	</div>
                
                	<div class="label_info">User Type:</div>
                	<div class="register_user-type">
                	<select name="user_type" id="user_type" class="user-type">
                	<option value="USER"{if $request.search.user_type=='USER'} selected{/if}>User</option>
                	<option value="SALOON"{if $request.search.user_type=='SALOON'} selected{/if}>Saloon</option>
                	</select>
                	</div>
                	
                	<div class="label_info">&nbsp;</div>
                	<div class="register_text-field"><input type="submit" id="submit" name="submit" value="Submit!" />
                	</div>
                
                </fieldset>
                {/if}
		</div>
	</div>
</div>
</form>
</body>

</html>