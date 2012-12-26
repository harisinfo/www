{if $saloon_images == 'true'}
<h2>Upload Images</h2>
<p>
<div id=uploadImages" style="width:700px;margin-top:5px;">
<form enctype="multipart/form-data" method="POST" action="/manage-upload-saloon-image.php">
<input type="file" name="image_file" id="image_file" />
<br />
<div class="clear-height"></div>
<input type="submit" value="Upload File" />
<div class="spacer"></div>
</form>
</div>
</p>
{/if}
<h2>My Images</h2>
{if $saloon.results == 'true'}
{if $saloon.saloon_images_exist == 'true'}
<form method="POST" action="">
<input type="hidden" name="type_action" value="delete" />
<p>

    {foreach key=key item=item from=$saloon.saloon_image}
    	{foreach key=key1 item=item1 from=$saloon.saloon_image.$key}
                        <div class="img">
                        <img src="/user_images/{$item1}" width="110" height="90" />
                        <div class="desc">
                        <input type="radio" name="delete" value="{$item1}" /></div>
                        </div>
        {/foreach}
     {/foreach}

    <div class="img">
    <input type="Submit" name="Submit" value="Delete Image" />
    </div>
</p>

</form>
{else}
<p><div class="error">No images uploaded yet</div></p>
{/if}
{/if}