<!-- Question -->
<div id="question_{$key}" class="">
{$response.question_text_default.$key}
</div>

<!-- Answer options -->
<div id="options_{$key}" class="">
<input type="radio" id="answer_1_{$key}" name="answer_{$key}" value="1" />Yes<br />
<input type="radio" id="answer_2_{$key}" name="answer_{$key}" value="2" />Sometimes<br />
<input type="radio" id="answer_0_{$key}" name="answer_{$key}" value="0" />No
</div>

<!-- More info yes / sometimes -->
<div id="more_info_{$key}" class="">
</div>
