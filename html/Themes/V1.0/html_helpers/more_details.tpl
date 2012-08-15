<div id="question_container_{$key}" class="{if $response.errors.error_flag.$key}{if $response.errors.error_flag.$key == true}error{/if}{/if}">

<!-- Question -->
<div id="question_{$key}">
{$response.question_text_default.$key}
</div>

<!-- More info -->
<div id="more_info_{$key}" class="">
<textarea id="more_info_{$key}" name="more_info_{$key}" class="">{if $response.question_more_info.$key}{$response.question_more_info.$key}{/if}</textarea>
</div>

</div>

<div class="clear-height"></div>