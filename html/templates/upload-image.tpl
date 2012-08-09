{include file='header.tpl'}
<body>

<div class="myform">
                        <form enctype="multipart/form-data" method="POST" action="/manage-upload-hairstyle.php">
                        {if $response}
                        {if $response.error==true}
			<p class="form-upload">Image upload failed, please check the file type and try again</p>
			{else}
			<p class="form-upload">Image uploaded successfully, upload another image or click close (x) to close this box</p>
			{/if}
			{else}
			<p class="form-upload">Upload an image file (only .gif, .jpg, .jpeg, .png allowed)</p>
			{/if}
                        <label>Upload Image *
                        <span class="small"></span>
                        </label>
                        <input type="file" name="image_file" id="image_file" />
                        <br />
                        <div class="clear-height"></div>
                        <input type="submit" value="Upload File" />
                        <div class="spacer"></div>
			</form>
</div>
</body>

</html>
