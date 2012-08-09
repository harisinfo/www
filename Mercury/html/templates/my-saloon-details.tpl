{assign var="saloon_id" value=$login_response.saloon_id}
{if $response.registered == 'true'}
<div class="warning">Details saved successfully</div>
{/if}
<form name="register" id="form_register" method="POST" action="">
                <div id="saloon_details">
                <div class="label_info">Password:</div>

                <div class="{if $response.required_field.password == 'required'||$response.required_field.password == 'validation'||$response.required_field.password == 'mismatch'||$response.required_field.password == 'password_length'}error{else}register_text-field{/if}"><input type="password" id="password" name="password" value="{$saloon.password.$saloon_id}" /></div>

                <div class="label_info">Repeat Password:</div>
                {if $response.required_field.password == 'required'}
                <div class="error">Field cannot be empty!</div>
                {/if}
                <div class="{if $response.required_field.rpassword == 'required'}error{else}register_text-field{/if}"><input type="password" id="rpassword" name="rpassword" value="{$saloon.password.$saloon_id}" /></div>
                <div class="label_info">Saloon Name</div>
                <div class="{if $response.required_field.saloon_name == 'required'}error{else}register_text-field{/if}">
                <input type="text" id="saloon_name" name="saloon_name" value="{$saloon.saloon_name.$saloon_id}" /></div>

                <div class="label_info">Address Line 1</div>
                <div class="{if $response.required_field.address_line_1 == 'required'}error{else}register_address-field{/if}">
                <input type="text" id="address_line_1" name="address_line_1" value="{$saloon.saloon_address_line_1.$saloon_id}" /></div>

                <div class="label_info">Address Line 2</div>
                <div class="register_address-field">
<input type="text" id="address_line_2" name="address_line_2" value="{$saloon.saloon_address_line_2.$saloon_id}" /></div>

                <div class="label_info">City</div>
                <div class="{if $response.required_field.city == 'required'}error{else}register_text-field{/if}">
<input type="text" id="city" name="city" value="{$saloon.saloon_city.$saloon_id}" /></div>

                <div class="label_info">State</div>
                <div class="{if $response.required_field.state == 'required'}error{else}register_text-field{/if}">
                <input type="text" id="state" name="state" value="{$saloon.saloon_state.$saloon_id}" /></div>

                <div class="label_info">Postcode</div>
                <div class="{if $response.required_field.postcode == 'required'}error{else}register_text-field{/if}">
                <input type="text" id="postcode" name="postcode" value="{$saloon.saloon_postcode.$saloon_id}" /></div>

                <div class="label_info">Telephone</div>
                <div class="{if $response.required_field.telephone== 'required'}error{else}register_text-field{/if}">
                <input type="text" id="telephone" name="telephone" value="{$saloon.saloon_telephone.$saloon_id}" /></div>

                </div>
                <div class="label_info">&nbsp;</div>
                <div class="register_text-field"><input type="submit" id="submit" name="submit" value="Save Details" /></div>

</form>