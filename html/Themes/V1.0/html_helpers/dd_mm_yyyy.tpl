<!-- Question -->
<div id="question_container_{$key}" class="{if $response.errors.error_flag.$key}{if $response.errors.error_flag.$key == true}error{/if}{/if}">

<div id="question_{$key}" class="">
{$response.question_text_default.$key}
</div>

<!-- Answer options -->
<!--<div id="options_{$key}" class="">
<input type="text" name="answer_{$key}" id="answer_{$key}" value="" />
</div>-->

<div id="options_{$key}" class="">

<select name="answer_dd_{$key}" id="answer_0_{$key}">
<option value="01">01</option>
</select>
/
<select name="answer_mm_{$key}" id="answer_0_{$key}">
<option value="01">01</option>
</select>
/
<select name="answer_yyyy_{$key}" id="answer_0_{$key}">
<option value="2009">2009</option>
</select>

</div>



</div>

<div class="clear-height"></div>