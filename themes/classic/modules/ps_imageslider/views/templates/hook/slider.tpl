{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{*
{if $homeslider.slides}
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="{$homeslider.speed}" data-wrap="{(string)$homeslider.wrap}" data-pause="{$homeslider.pause}">
    <ul class="carousel-inner" role="listbox">
      {foreach from=$homeslider.slides item=slide name='homeslider'}
        <li class="carousel-item {if $smarty.foreach.homeslider.first}active{/if}" role="option" aria-hidden="{if $smarty.foreach.homeslider.first}false{else}true{/if}">
          <a href="{$slide.url}">
            <figure>
              <img src="{$slide.image_url}" alt="{$slide.legend|escape}">
              {if $slide.title || $slide.description}
                <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">{$slide.title}</h2>
                  <div class="caption-description">{$slide.description nofilter}</div>
                </figcaption>
              {/if}
            </figure>
          </a>
        </li>
      {/foreach}
    </ul>
    <div class="direction" aria-label="{l s='Carousel buttons' d='Shop.Theme.Global'}">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">{l s='Previous' d='Shop.Theme.Global'}</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">{l s='Next' d='Shop.Theme.Global'}</span>
      </a>
    </div>
  </div>
{/if}
*}

{* Webbax - Tuto 43 - Bannières multiples Homepage *}

{* list of variables *}

{assign var='title_fr' value=','|explode:"Le Beau, Collection2"}
{assign var='title_en' value=','|explode:"Le Beau, Collection2"}

{assign var='links_fr' value=','|explode:"http://127.0.0.1/fr/3-collection-le-beau,http://127.0.0.1/fr/6-charm-tuscan-sun"}
{assign var='links_en' value=','|explode:"http://127.0.0.1/en/3-collection-le-beau,http://127.0.0.1/en/6-charm-tuscan-sun"}


<div id="banners_homepage" >
    <img src="{$urls.base_url}img/homepage2-bis.jpg" class="img-responsive">
</div>
<br>

<div id="banners_home" class="row">
<!-- <div>
    <div class="static">
          Revival Picks<br>
          Staff picks that particularly wow'ed us,<br>
          and we think you'll love too
          <br><br>
          <button> Shop Le Beau</button>
    </div>
    <div class="dynamic" >
          <a href="http://127.0.0.1/en/3-collection-le-beau">
              <img src="{$urls.base_url}img/collection-1-{$language.iso_code}.png" alt="{$title_{$language.iso_code}.$k}" title="{$title_{$language.iso_code}.$k}" class="img-responsive" />
          </a>
    </div>
</div>  -->
    <!--
<br><br>
    <div>
        <div class="static" >
            <b>Revival Picks2</b>
            Staff picks that particularly wow'ed us, and we think you'll love too
            <br><br><br><br>
            <button> Shop Charm Tuscan Sun</button>
        </div>
        <div  class="dynamic">
            <a href="http://127.0.0.1/en/6-charm-tuscan-sun">
                <img src="{$urls.base_url}img/collection-2-{$language.iso_code}.png" alt="{$title_{$language.iso_code}.$k}" title="{$title_{$language.iso_code}.$k}" class="img-responsive" />
            </a>
        </div>
    </div>

    -->



<!--
<div class="dynamic">
    <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <p>Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Aenean lacinia bibendum nulla sed consectetur. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
</div>
<div class="static">
    <p>Some static content</p>
</div>
<div class="clear"></div>

-->

{*   not as good as the rivalrugs.com
<div id="Container">
    <div  class="Column">
        <a href="http://127.0.0.1/en/3-collection-le-beau">
            <img src="{$urls.base_url}img/collection-1-{$language.iso_code}.png" alt="{$title_{$language.iso_code}.$k}" title="{$title_{$language.iso_code}.$k}" class="img-responsive" />
    </div>

    <div class="Column Static" >
        <h2>Contemporary Collection</h2><br>
            <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLe Beau</h2><br>
                <br><br>
        <button type="button" class="btn-primary"> Shop Le Beau</button>
    </div>
</div>

    <br>

    <div id="Container">
        <div  class="Column">
            <a href="http://127.0.0.1/en/6-charm-tuscan-sun">
                <img src="{$urls.base_url}img/collection-2-{$language.iso_code}.png" alt="{$title_{$language.iso_code}.$k}" title="{$title_{$language.iso_code}.$k}" class="img-responsive" />
        </div>

        <div class="Column Static" >
            <h2>The Old World Charm</h2><br>
            <h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTuscan Sun</h2><br>

            <br><br>
            <button type="button" class="btn-primary"> Shop Tuscan Sun</button>
        </div>
    </div>
*}


</div>

<div id="shopify-section-1482528552957" class="shopify-section image-with-text-section">
    <div class="featured_collections clearfix grid-layout--standard  container ">
        <section class="featured-link--section featured-link--image section-1 sixteen columns">
            <div class="featured-link--half featured-link--image">
                <div class="featured-link--wrap">
                        <a href="http://127.0.0.1/en/3-collection-le-beau" title="Le Beau">
                        <img sizes="(min-width: 36em) 33.3vw, 100vw" src="{$urls.base_url}img/collection-1-{$language.iso_code}.png" alt="{$title_{$language.iso_code}.$k}" title="{$title_{$language.iso_code}.$k}" class="lazyload transition-in" alt="Revival Picks">
                    </a>
                </div>
            </div>
            <div class="featured-link--half">
                <div class="info text-align--left">
                    <h1> <a href="http://127.0.0.1/en/3-collection-le-beau" title="Le Beau">
                            Contemporary Collection <br> Le Beau<br><br>

                    </h1>
                    <button type="button" class="btn-primary"> Shop Le Beau</button></a>
                </div>
            </div>
        </section>


        <section class="featured-link--section featured-link--image section-2 sixteen columns">
            <div class="featured-link--half featured-link--image">
                <div class="featured-link--wrap">
                        <a href="http://127.0.0.1/en/6-charm-tuscan-sun" title="Collection Charm Tuscan">
                        <img sizes="(min-width: 36em) 33.3vw, 100vw" src="{$urls.base_url}img/collection-2-{$language.iso_code}.png" class="lazyload transition-in" alt="The Anatolian Collection">
                    </a>
                </div>
            </div>
            <div class="featured-link--half">
                <div class="info text-align--left">
                      <h1>  <a href="http://127.0.0.1/en/6-charm-tuscan-sun" title="Collection Charm Tuscan">
                        The Old World Charm <br> Tuscan Sun
                          </h1><br>
                    <button type="button" class="btn-primary"> Shop Tuscan Sun</button>
                    </a>

                </div>
            </div>
        </section>


    </div>

</div>

<p>
   &nbsp;&nbsp; <button class="btn-action" onclick="myMove()" style="position: center;">Click Me to Test Javascript<br> it will launch the red ball</button>
</p>

<div id ="myContainerX">
    <div id ="myAnimationX"></div>
</div>





