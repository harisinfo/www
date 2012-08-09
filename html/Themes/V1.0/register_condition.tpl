{include file='header.tpl'}
<body>
<div id="container">
<div id="register" class="register">
{if $condition_related_questions.results == 'true'}

<form id="register_condition" name="register_condition" method="POST" value="">
<input type="hidden" name="ticket" id="ticket" value="{$condition_related_questions.ticket}" />
	 {foreach key=key item=item from=$condition_related_questions.question_id}
	 
	 	{if $condition_related_questions.question_template.$key == 'YES_NO_MORE_DETAILS'}
	 		{include file='html_helpers/yes_no_more_details.tpl'}
	 	{elseif $condition_related_questions.question_template.$key == 'YES_SOMETIMES_NO_MORE_DETAILS'}
	 		{include file='html_helpers/yes_no_more_details.tpl'}
	 	{elseif $condition_related_questions.question_template.$key == 'MORE_DETAILS'}
	 		{include file='html_helpers/more_details.tpl'}
	 	{/if}
	 	
	 {/foreach}
<input type="Submit" Value="Register for {$condition_related_questions.condition_name}" />
</form>
	 
{/if}
</div>
</div>
</body>
</html>