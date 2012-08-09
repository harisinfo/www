<form name="search" id="search" action="saloon-search.php" method="POST">
<input type="hidden" id="hidden" value="" />
<div class="login-text" style="margin-top:5px;font-weight: bold;">Search Saloons</div>
<div class="login-text">City</div>
<div id="user-type">
<input type="text" name="city" id="city" class="text-field" value="{$request.search.city}" />
</div>

<div class="login-text">Hairdresser Type</div>
<div id="saloon-type">
<select name="saloon_type" class="saloon-type">
<option value="NORMAL"{if $request.search.saloon_type == 'NORMAL'} selected{/if}>Saloon</option>
<option value="MOBILE"{if $request.search.saloon_type == 'MOBILE'} selected{/if}>Mobile Hairdresser</option>
</select>
</div>

<div class="login-text">Postcode</div>
<div id="postcode"><input type="text" size="15" name="postcode" class="text-field" value="{$request.search.postcode}" /></div>

<div class="login-text">Free Haircuts: <input type="checkbox" name="free_hair_cuts" value="1" style="margin-left: 45px;"{if $request.search.free_hair_cuts == 1} checked{/if} /></div>
<div class="clear-height"></div>
<div class="login-text">Special Offers: <input type="checkbox" name="special_offer" value="1" style="margin-left: 44px;"{if $request.search.special_offer == 1} checked{/if} /></div>
<div class="clear-height"></div>
<div class="login-text">Courses / Training: <input type="checkbox" name="courses_training" value="1" style="margin-left: 16px;"{if $request.search.courses_training == 1} checked{/if} /></div>
<div class="clear-height"></div>
<div class="login-text">Vacancies: <input type="checkbox" name="vacancies" value="1" style="margin-left: 68px;"{if $request.search.vacancies== 1} checked{/if} /></div>

<div class="clear-height"></div>
<div class="submit-button">
<div id="form-submit"><input type="submit" name="submit" value="search" class="formsubmit"></div>
</div>
</form>