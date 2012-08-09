{if $user_hair_styles.results == 'true'}
    {foreach key=key item=item from=$user_hair_styles.user_hairstyle_id}
                        <div class="img" style="height:210px;">
                        
                        <img src="/user_images/{$user_hair_styles.user_hairstyle_image.$key}" width="110" height="90" /> <!-- width="110" height="90" -->
                        <div class="desc">Submitted on {$user_hair_styles.user_hairstyle_date.$key|date_format}</div>
                        <!-- rating start -->
                        
                        <div class="rating">
                            <div title="User Rating" id="rateMeFinal" style="margin-left:30px;margin-top:5px;margin-bottom:5px;">
                                {section name=foo loop=5}
                                {assign var="message_loop" value=$smarty.section.foo.iteration}
                                {if $user_hair_styles.user_hairstyle_vote.$key >= $message_loop}
                                {assign var="star_class" value="on"}
                                {else}
                                {assign var="star_class" value=""}
                                {/if}
                                <label id="id_{$smarty.section.foo.iteration}_{$key}" class="{$star_class}"></label>
                                {/section}
                            </div>
                        </div>
                        
                        <div class="delete">
                        <form action="" method="post" name="frm_{$user_hair_styles.user_hairstyle_image.$key}" id="frm_{$user_hair_styles.user_hairstyle_image.$key}">
                        	<input type="hidden" name="type_action" value="delete" />
                        	<input type="hidden" name="delete" value="{$user_hair_styles.user_hairstyle_image.$key}" />
                        	<!--<input type="Submit" value="Remove Image" name="Submit" />-->
                        	<input type="button" onclick="confirm_delete('frm_{$user_hair_styles.user_hairstyle_image.$key}');" value="Remove Image" />
                        </form>
                        </div>
                        
                        <!-- rating end -->
                        </div>

     {/foreach}
{/if}