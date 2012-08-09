{include file='header.tpl'}
<body>
<form name="add_employee" id="add_employee" method="POST" action="">
<input type="hidden" name="post_display" id="post_display" value="1" />
<div id="container" style="width:500px;">
	<div id="main">
		<div id="content">

                <p>
                {if $error_response.registered=='true'}
                Advise updated successfully!
                {else}
                All * fields are required   
                {/if}    
                </p>

                {if $error_response.registered!='true'}
                {foreach key=key item=item from=$response.saloon_id}
                {assign var="saloon_id" value=$key}
                {/foreach}
                {assign var="saloon_advise_id" value=$request.search.saloon_advise_id}
                <fieldset>
                <legend>Add Post</legend>
                <div id="user_details">
                
                	<div class="label_info">Subject *</div>
                	{if $error_response.required_field.post_subject=='required'}
                	<div class="error">Subject cannot be empty!</div>
                	{/if}
                	<div class="{if $error_response.required_field.subject=='required'}error{else}register_text-field{/if}">
                	<select name="post_subject" id="post_subject" class="user-type" class="{if $error_response.required_field.post_subject=='required'}error{else}register_text-field{/if}">
                	<option value=""{if $request.search.post_subject==""} selected{/if}>Choose a subject:</option>
                	{foreach key=key item=item from=$subject_advises}
                		<option value="{$key}"{if $response.post_subject.$saloon_id.$saloon_advise_id==$key} selected{/if}>{$item}</option>
                	{/foreach}
                	</select>

                	<div class="label_info">Heading *</div>
                	{if $error_response.required_field.post_heading=='required'}
                	<div class="error">Heading cannot be empty!</div>
                	{/if}
                	<div class="{if $error_response.required_field.heading=='required'}error{else}register_text-field{/if}">
                	<input type="text" id="post_heading" name="post_heading" value="{$response.saloon_post_heading.$saloon_id.$saloon_advise_id}" /></div>
                	
                	<div class="label_info">Advise *</div>
                	{if $error_response.required_field.post_message=='required'}
                	<div class="error">Advise cannot be empty!</div>
                	{/if}
                	<div class="{if $error_response.required_field.post_message=='required'}error{else}register_text-field{/if}">
                	<textarea id="post_message" name="post_message">{$response.saloon_post_message.$saloon_id.$saloon_advise_id}</textarea>

                </div>

				<div class="label_info">&nbsp;</div>
                <div class="register_text-field"><input type="submit" id="submit" name="submit" value="Update Post" /></div>

                </fieldset>
                {/if}
		</div>
	</div>
</div>
</form>
</body>

</html>
