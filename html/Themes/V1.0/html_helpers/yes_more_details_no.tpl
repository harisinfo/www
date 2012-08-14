<!-- Question -->
<div id="question_container_{$key}" class="{if $response.errors.error_flag.$key}{if $response.errors.error_flag.$key == true}error{/if}{/if}">

<div id="question_{$key}" class="">
{$response.question_text_default.$key}
</div>

<!-- Answer options -->
<div id="options_{$key}" class="">
<input type="radio" id="answer_1_{$key}" name="answer_{$key}" value="1"{if $response.question_default_selection.$key == 'YES'} checked{/if} />Yes<br />
<input type="radio" id="answer_0_{$key}" name="answer_{$key}" value="0"{if $response.question_default_selection.$key == 'NO'} checked{/if} />No
</div>

<!-- More info yes -->
<div id="more_info_{$key}" class="">
<textarea name="more_info_{$key}" id="more_info_{$key}" class="">{if $response.question_more_info.$key}{$response.question_more_info.$key}{/if}</textarea>
</div>

</div>

<div class="clear-height"></div>