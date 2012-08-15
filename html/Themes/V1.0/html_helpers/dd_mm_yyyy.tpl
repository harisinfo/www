<!-- Question -->
<div id="question_container_{$key}" class="{if $response.errors.error_flag.$key}{if $response.errors.error_flag.$key == true}error{/if}{/if}">

<div id="question_{$key}" class="">
{$response.question_text_default.$key}
</div>

<!-- Answer options -->
<div id="options_{$key}" class="">
<input type="text" name="answer_{$key}" id="answer_{$key}" value="" />
</div>

</div>

<div class="clear-height"></div>