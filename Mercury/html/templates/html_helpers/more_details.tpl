<div id="question_container_{$key}" class="{if $condition_related_questions.errors.error_flag.$key}{if $condition_related_questions.errors.error_flag.$key == true}error{/if}{/if}">

<!-- Question -->
<div id="question_{$key}">
{$condition_related_questions.question_text_default.$key}
</div>

<!-- More info -->
<div id="more_info_{$key}" class="">
<textarea id="more_info_{$key}" name="more_info_{$key}" class="">{if $condition_related_questions.question_more_info.$key}{$condition_related_questions.question_more_info.$key}{/if}</textarea>
</div>

</div>

<div class="clear-height"></div>