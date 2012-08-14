<div id="question_container_{$key}" class="{if $response.errors.error_flag.$key}{if $response.errors.error_flag.$key == true}error{/if}{/if}">


<!-- Question -->
<div id="question_{$key}" class="">
{$response.question_text_default.$key}
</div>

<!-- Answer options -->
<div id="options_{$key}" class="">
<input type="radio" id="answer_1_{$key}" name="answer_{$key}" value="1"{if $response.question_default_selection.$key == 'YES'} checked{/if} />Yes<br />
<input type="radio" id="answer_0_{$key}" name="answer_{$key}" value="0"{if $response.question_default_selection.$key == 'NO'} checked{/if} />No
</div>

<div class="clear-height"></div>