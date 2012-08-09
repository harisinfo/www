{include file='header.tpl'}
<body>
<form name="add_employee" id="add_employee" method="POST" action="">
<input type="hidden" name="post_display" id="post_display" value="1" />
<div id="container" style="width:500px;">
	<div id="main">
		<div id="content">

                <p>
                {if $response.registered=='true'}
                Post added successfully!
                {else}
                All * fields are required   
                {/if}    
                </p>

                {if $response.registered!='true'}
                <fieldset>
                <legend>Add Post</legend>
                <div id="user_details">
                
                	<div class="label_info">Subject *</div>
                	{if $response.required_field.post_subject=='required'}
                	<div class="error">Subject cannot be empty!</div>
                	{/if}
                	<div class="{if $response.required_field.subject=='required'}error{else}register_text-field{/if}">
                	<!--<input type="text" id="post_subject" name="post_subject" value="{$request.search.post_subject}" /></div>--></div>
                	<select name="post_subject" id="post_subject" class="user-type" class="{if $response.required_field.post_subject=='required'}error{else}register_text-field{/if}">
                	<option value=""{if $request.search.post_subject==""} selected{/if}>Choose a subject:</option>
                	{foreach key=key item=item from=$subject_advises}
                		<option value="{$key}"{if $request.search.post_subject==$key} selected{/if}>{$item}</option>
                	{/foreach}
                	</select>

                	<div class="label_info">Heading *</div>
                	{if $response.required_field.post_heading=='required'}
                	<div class="error">Heading cannot be empty!</div>
                	{/if}
                	<div class="{if $response.required_field.heading=='required'}error{else}register_text-field{/if}">
                	<input type="text" id="post_heading" name="post_heading" value="{$request.search.post_heading}" /></div>
                	
                	<div class="label_info">Advise *</div>
                	{if $response.required_field.post_message=='required'}
                	<div class="error">Advise cannot be empty!</div>
                	{/if}
                	<div class="{if $response.required_field.post_message=='required'}error{else}register_text-field{/if}">
                	<textarea id="post_message" name="post_message">{$request.search.post_message}</textarea>

                </div>

				<div class="label_info">&nbsp;</div>
                <div class="register_text-field"><input type="submit" id="submit" name="submit" value="Add Post" /></div>

                </fieldset>
                {/if}
		</div>
	</div>
</div>
</form>
</body>

</html>
