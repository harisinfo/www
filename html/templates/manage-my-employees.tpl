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
                        <h2>My Employees</h2>
                        {assign var="saloon_id" value=$login_response.saloon_id}
                        {if $saloon_employees.results=='true'}
                        	{foreach key=key item=item from=$saloon_employees.saloon_employee_id}
                        	<form action="" method="post" name="frm_{$key}" id="frm_{$key}">
                        	<input type="hidden" name="type_action" value="delete" />
                        	<input type="hidden" name="saloon_id" value="{$saloon_id}" />
                        	<input type="hidden" name="user_id" value="{$saloon_employees.user_id.$key}" />
                        	<p>
                        		<input type="button" onclick="confirm_delete('frm_{$key}');" value="Remove Employee" /> <strong>{$saloon_employees.first_name.$key} {$saloon_employees.last_name.$key} {if $saloon_employees.user_designation.$key}({$saloon_employees.user_designation.$key}){/if}</strong>
                        	</p>
                        	</form>
                        	{/foreach}
                        {else}
                        <p><div class="error">No employee details added yet</div></p>
                        {/if}
                        
                        <p>
                        		<a rel="gb_page_center[550, 500]" title="Add Employee" href="manage-add-employee.php">Add new employee</a>
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