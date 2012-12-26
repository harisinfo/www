<div id="login-box">
{if $login_response.login == 'success'}
<!--<div class="login-text">Not {$login_response.first_name}</div>-->
<div class="clear-height"></div>
<div class="login-text">My Menu</div>
{if $login_response.user_type == 'USER'}
<div class="login-text"><a href="/view-my-hairstyles.php">View my hair styles</a></div>
<div class="login-text">
<a rel="gb_page_center[380, 240]" title="Upload new picture for - {$login_response.first_name}" href="manage-upload-hairstyle.php">
Upload pictures
</a>
</div>
<div class="login-text"><a href="/login.php?action=logout">Logout</a></div>
{/if}
{if $login_response.user_type == 'SALOON'}
<div class="login-text"><a href="/manage-profile.php">Manage Profile</a></div>
<div class="login-text"><a href="/manage-images.php">Manage Images</a></div>
<!--<div class="login-text"><a href="/manage-contacts.php">Update Contacts</a></div>-->
<div class="login-text"><a href="/manage-my-employees.php">Manage my employees</a></div>
<div class="login-text">&nbsp;</div>
<div class="login-text"><a href="/manage-price-list.php">Update Price List</a></div>
<div class="login-text"><a href="/manage-opening-hours.php">Update Opening Hours</a></div>
<div class="login-text"><a href="/manage-free-hair-cuts.php">Update Free Hair Cuts</a></div>
<div class="login-text"><a href="/manage-special-offers.php">Update Special Offers</a></div>
<div class="login-text"><a href="/manage-courses-training.php">Manage Courses / Training</a></div>
<div class="login-text"><a href="/manage-vacancies.php">Manage Vacancies</a></div>
<div class="login-text"><a href="/manage-my-advises.php">Manage Advises</a></div>
<div class="login-text"><a href="/login.php?action=logout">Logout</a></div>
{/if}
{else}
<form name="logmein" id="logmein" action="login.php" method="POST">
<div class="login-text">email</div>
<div id="username"><input type="text" size="15" name="user_email" class="text-field" /></div>

<div class="clear-height"></div>

<div class="login-text">password</div>
<div id="password"><input type="password" size="15" name="password" class="text-field" /></div>

<div class="login-text">user type</div>
<div id="user-type">
<select name="user_type" class="user-type">
<option value="USER">user</option>
<option value="SALOON">saloon / mobile hairdresser</option>
</select>
</div>
<div class="clear-height"></div>
<div class="submit-button">
<div id="form-submit"><input type="submit" name="log_in" value="log in!" class="formsubmit"></div>
</div>
</form>

<div class="login-text">
<a rel="gb_page_center[700, 560]" title="Register" href="/register.php">register here</a>
</div>

<div class="login-text">
<a rel="gb_page_center[320, 320]" title="Forgot Password" href="/forgotpassword.php">forgotten your details?</a>
</div>

<div class="clear-both height1 width1 overflow-hidden"></div>
{/if}
</div>