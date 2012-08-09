{include file='header.tpl'}
<body>
<form name="add_employee" id="add_employee" method="POST" action="/manage-add-employee.php">
<div id="container" style="width:500px;">
	<div id="main">
		<div id="content">

                <p>
                {if $response.registered=='true'}
                Employee added successfully
                {else}
                All * fields are required   
                {/if}    
                </p>

                {if $response.registered!='true'}
                <fieldset>
                <legend>Employee Information</legend>
                <input type="hidden" id="user_type" name="user_type" value="EMPLOYEE" />

                <div id="user_details">
                
                	<div class="label_info">First Name *</div>
                	{if $response.required_field.first_name=='required'}
                	<div class="error">First Name cannot be empty!</div>
                	{/if}
                	<div class="{if $response.required_field.first_name=='required'}error{else}register_text-field{/if}"><input type="text" id="first_name" name="first_name" value="{$request.search.first_name}" /></div>

                	<div class="label_info">Last Name *</div>
                	{if $response.required_field.last_name=='required'}
                	<div class="error">Last Name cannot be empty!</div>
                	{/if}
                	<div class="{if $response.required_field.last_name=='required'}error{else}register_text-field{/if}"><input type="text" id="last_name" name="last_name" value="{$request.search.last_name}" /></div>
                	
                	<div class="label_info">Designation</div>
                	<div class="register_text-field"><input type="text" id="designation" name="designation" value="{$request.search.designation}" /></div>

                </div>

				<div class="label_info">&nbsp;</div>
                <div class="register_text-field"><input type="submit" id="submit" name="submit" value="Add Employee" /></div>

                </fieldset>
                {/if}
		</div>
	</div>
</div>
</form>
</body>

</html>
