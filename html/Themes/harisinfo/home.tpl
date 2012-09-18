{if $response.page}
	{foreach key=key item=item from=$response.page.page_id}
		{assign var="page_content" value=$response.page.page_content.$key}
		{assign var="meta_title" value=$response.page.meta_title.$key}
		{assign var="meta_keywords" value=$response.page.meta_keywords.$key}
		{assign var="meta_description" value=$response.page.meta_description.$key}
	{/foreach}
{/if}

{include file='header.tpl'}
<body>

<div id="header">
	<h1><a href="http://www.harisinfo.co.uk/index.html">harisinfo - LAMP Web Developer</a></h1>
	<p><span class="address">309 Horn Lane, London W3 0BU, 07868 716 401</span></p>
</div>

{include file='navigation.tpl'}

<div id="page">

	<!-- start content -->
		{include file='content.tpl'}
	<!-- end content -->	
	
</div>


{include file='footer.tpl'}

</body>
</html>