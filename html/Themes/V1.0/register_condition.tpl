{include file='header.tpl'}
<body>
<div id="container">
{include file='top-bar.tpl'}
{include file='navigation-top.tpl'}

<div id="register" class="register">
{if $response.results == 'true'}
<form id="register_condition" name="register_condition" method="POST" value="">
<input type="hidden" name="ticket" id="ticket" value="{$response.ticket}" />
	 {foreach key=key item=item from=$response.question_id}
	 
	 	{if $response.question_template.$key == 'YES_NO_MORE_DETAILS'}
	 		{include file='html_helpers/yes_no_more_details.tpl'}
	 	{elseif $response.question_template.$key == 'YES_SOMETIMES_NO_MORE_DETAILS'}
	 		{include file='html_helpers/yes_sometimes_no_more_details.tpl'}
	 	{elseif $response.question_template.$key == 'YES_SOMETIMES_MORE_DETAILS_NO'}
	 		{include file='html_helpers/yes_sometimes_more_details_no.tpl'}
	 	{elseif $response.question_template.$key == 'YES_MORE_DETAILS_NO'}
	 		{include file='html_helpers/yes_more_details_no.tpl'}
	 	{elseif $response.question_template.$key == 'YES_NO'}
	 		{include file='html_helpers/yes_no.tpl'}
	 	{elseif $response.question_template.$key == 'MORE_DETAILS'}
	 		{include file='html_helpers/more_details.tpl'}
	 	{/if}
	 	
	 {/foreach}
<input type="Submit" Value="Register for {$response.condition_name}" />
</form>
	 
{/if}
</div>

{include file='footer.tpl'}
</div>
</body>
</html>