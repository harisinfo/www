{if $saloons.results == 'true'}
<div class="row_1" style="height: 400px; width: auto">
    {foreach key=key item=item from=$saloons.saloon_id}
                        <div class="img">
                        <img src="/user_images/{if $saloons.saloon_images.$key.1}{$saloons.saloon_images.$key.1}{else}noimage.gif{/if}" />
                        <div class="desc"><a href="/saloon-detail-{$key}.html">{$saloons.saloon_name.$key}</a></div>
                        <div class="rating">
                        {$saloons.saloon_address_line_1.$key} {$saloons.saloon_address_line_2.$key}
                        </div>
                        </div>
     {/foreach}
</div>
{else}
<div class="row_1" style="height: 400px; width: auto">
						<div class="saloon_1">
						No results found
						</div>
</div>
{/if}