<div id="question_container_{$key}" class="{if $condition_related_questions.errors.error_flag.$key}{if $condition_related_questions.errors.error_flag.$key == true}error{/if}{/if}">


<!-- Question -->
<div id="question_{$question_id}">{$question_text}</div>

<!-- Answer options -->
<div id="options_{$question_id}" class=""{$additional_information}>
<input type="radio" name="answer_{$question_id}_{$yes}" value="{$yes}"{if $condition_related_questions.question_default_selection.$key == 'YES'} checked{/if} />{$label_yes}<br />
<input type="radio" name="answer_{$question_id}_{$no}" value="{$no}"{if $condition_related_questions.question_default_selection.$key == 'NO'} checked{/if}/>{$label_no}
</div>

<!-- More info yes -->
<div id="more_info_{$yes}" class=""{$additional_information}>
</div>

</div>


<div class="clear-height"></div>