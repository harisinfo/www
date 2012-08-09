{include file='header.tpl'}
<body>
<form name="register" id="form_register" method="POST" action="">
<div id="container" style="width:700px;">
	<div id="main">
		<!--<div id="ad"></div>-->
		<div id="content">

                <p>
                {if $response.registered=='true'}
                Thank you for registering with LikeMyHair.co.uk, you can now login to your account.
                {else}
                All fields are required, password should be 6 - 12 alphanumeric characters long.    
                {/if}    
                </p>

                {if $response.registered != 'true'}
                <fieldset>

                <legend>Login Information</legend>

                <!--<div class="label_info">User Type:</div>
                <div class="register_user-type">
                <select name="user_type" id="user_type" class="user-type" onChange="HideShowForm();">
                <option value="USER"{if $request.search.user_type=='USER'} selected{/if}>User</option>
                <option value="SALOON"{if $request.search.user_type=='SALOON'} selected{/if}>Saloon</option>
                </select>
                </div>-->
                
                <input type="hidden" id="user_type" name="user_type" value="USER" />

                <div class="label_info">Email address:</div>
                
                {if $response.required_field.user_email=='required'}
                <div class="error">Email cannot be empty!</div>
                {elseif $response.required_field.user_email=='exists'}
                <div class="error">This email address already exists!</div>
                {else}
                {/if}
                
                <div class="{if $response.required_field.user_email=='required'||$response.required_field.user_email=='exists'}error{else}register_text-field{/if}"><input type="text" id="user_email" name="user_email" value="{$request.search.user_email}" /></div>

                <div class="label_info">Password:</div>
                {if $response.required_field.password=='required'}
                <div class="error">Password field cannot be empty!</div>
                {elseif $response.required_field.password=='validation'}
                <div class="error">Invalid password!</div>
                {elseif $response.required_field.password=='mismatch'}
                <div class="error">Password does not match!</div>
                {elseif $response.required_field.password=='password_length'}
                <div class="error">Password should be 6-12 characters long!</div>
                {else}
                
                {/if}
                
                <div class="{if $response.required_field.password=='required'||$response.required_field.password=='validation'||$response.required_field.password=='mismatch'||$response.required_field.password=='password_length'}error{else}register_text-field{/if}">
                <input type="password" id="password" name="password" />
                </div>

                <div class="label_info">Repeat Password:</div>
                {if $response.required_field.password=='required'}
                <div class="error">Repeat password field cannot be empty!</div>
                {/if}
                
                <div class="{if $response.required_field.rpassword=='required'}error{else}register_text-field{/if}">
                <input type="password" id="rpassword" name="rpassword" />
                </div>

                <div id="user_details" style="{if $request.search.user_type=='SALOON'}display:none;{/if}">
                <div class="label_info">Gender</div>
                {if $response.required_field.gender=='required'}
                <div class="error">Gender cannot be empty!</div>
                {/if}
                <div>
                <select name="gender" id="gender" class="user-type" class="{if $response.required_field.gender=='required'}error{else}register_text-field{/if}">
                <option value=""{if $request.search.gender==''} selected{/if}></option>
                <option value="M"{if $request.search.gender=='M'} selected{/if}>Male</option>
                <option value="F"{if $request.search.gender=='F'} selected{/if}>Female</option>
                </select>
                </div>

                <div class="label_info">Year of birth</div>
                <div class="{if $response.required_field.year_of_birth=='required'}error{else}register_text-field{/if}">
                <select name="year_of_birth" id="year_of_birth" class="user-type" class="{if $response.required_field.year_of_birth=='required'}error{else}register_text-field{/if}">
                	{foreach key=key item=item from=$dob}
                		<option value="{$item}}"{if $request.search.year_of_birth==$item} selected{/if}>{$item}</option>
                	{/foreach}
                </select>
                
                </div>

                </div>

                <div id="saloon_details" style="{if $request.search.user_type=='USER'||$request.search.user_type==''||$request.search.user_type==NULL}display:none;{/if}">

                <div class="label_info">Saloon Name</div>
                <div class="{if $response.required_field.saloon_name=='required'}error{else}register_text-field{/if}">
                <input type="text" id="saloon_name" name="saloon_name" value="{$request.search.saloon_name}" />
                </div>

                <div class="label_info">Address Line 1</div>
                <div class="{if $response.required_field.address_line_1=='required'}error{else}register_address-field{/if}">
                <input type="text" id="address_line_1" name="address_line_1" value="{$request.search.address_line_1}" />
                </div>

                <div class="label_info">Address Line 2</div>
                <div class="register_address-field">
                <input type="text" id="address_line_2" name="address_line_2" value="{$request.search.address_line_2}" />
                </div>

                <div class="label_info">City</div>
                <div class="{if $response.required_field.city=='required'}error{else}register_text-field{/if}">
                <input type="text" id="city" name="city" value="{$request.search.city}" />
                </div>

                <div class="label_info">State</div>
                <div class="{if $response.required_field.state=='required'}error{else}register_text-field{/if}">
                <input type="text" id="state" name="state" value="{$request.search.state}" />
                </div>

                <div class="label_info">Postcode</div>
                <div class="{if $response.required_field.postcode=='required'}error{else}register_text-field{/if}">
                <input type="text" id="postcode" name="postcode" value="{$request.search.postcode}" />
                </div>

                <div class="label_info">Telephone</div>
                <div class="{if $response.required_field.telephone=='required'}error{else}register_text-field{/if}">
                <input type="text" id="telephone" name="telephone" value="{$request.search.telephone}" />
                </div>

                </div>
                
                <div class="label_info">&nbsp;</div>
                <div class="register_text-field"><input type="submit" id="submit" name="submit" value="Register Now!" />
                </div>


                </fieldset>
                {/if}
		</div>
	</div>
</div>
</form>
</body>

</html>