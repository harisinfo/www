{if $user_hair_styles.results == 'true'}
<div class="row_1" style="height: 400px; width: auto">
    {foreach key=key item=item from=$user_hair_styles.user_hairstyle_id}
                        <div class="img">
                        <img src="/user_images/{$user_hair_styles.user_hairstyle_image.$key}" />
                        <div class="desc">Submitted by {$user_hair_styles.user_first_name.$item}</div>
                        <div class="rating">
                        <script type="text/javascript" language="javascript" src="/scripts/ratings.js"></script>
                        <span id="rateStatus_{$key}">Rate Me...</span>
                        <span id="ratingSaved">Rating Saved!</span>
                        <input type="hidden" name="hidden_state_{$key}" id="hidden_state_{$key}" value="0" />
                            <div title="Rate Me..." id="rateMe" style="margin-left:30px;margin-top:5px;margin-bottom:5px;">
                                {section name=foo loop=5}
                                {assign var="message_loop" value=$smarty.section.foo.iteration}
                                {if $user_hair_styles.user_hairstyle_vote.$key >= $message_loop}
                                {assign var="star_class" value="on"}
                                {else}
                                {assign var="star_class" value=""}
                                {/if}
                                <a onmouseout="off('id_{$smarty.section.foo.iteration}_{$key}')" onmouseover="rating('id_{$smarty.section.foo.iteration}_{$key}')" title="{$user_hair_styles.rating_messages.$message_loop}" id="id_{$smarty.section.foo.iteration}_{$key}" onclick="rateIt('id_{$smarty.section.foo.iteration}_{$key}')" class="{$star_class}"></a>
                                {/section}
                            </div>
                        </div>
                        </div>
     {/foreach}
</div>
{/if}