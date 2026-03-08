<?php
/**
 * Title: Search Results
 * Slug: miles-veils-of-fate-tales-of-eldermoor-fc13d6a3/template-search
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-void)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--c-void);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"border":{"bottom":{"color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-purple-deep)","width":"1px"}},"padding":{"bottom":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--c-purple-deep);border-bottom-width:1px;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"has-text-color","fontSize":"small","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-purple)"},"typography":{"fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)","textAlign":"center"}}} -->
<p class="has-text-align-center has-text-color has-small-font-size" style="color:var(--wp--preset--color--c-purple);font-family:var(--wp--preset--font-family--cinzel-decorative)">Seek the Truth</p>
<!-- /wp:paragraph -->

<!-- wp:query-title {"type":"search","textAlign":"center","fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)","fontSize":"huge","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)"}}} /-->

<!-- wp:search {"label":"Search the Chronicles","showLabel":false,"placeholder":"Search the chronicles of Eldermoor…","buttonText":"Search","buttonPosition":"button-inside","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:query {"query":{"perPage":9,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"color":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-purple-deep)","width":"1px"},"color":{"background":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-stone)"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-background" style="border-color:var(--wp--preset--color--c-purple-deep);border-width:1px;background-color:var(--wp--preset--color--c-stone);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

<!-- wp:post-terms {"term":"category","fontSize":"small","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-purple)"},"typography":{"fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)"}}} /-->

<!-- wp:post-title {"isLink":true,"fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)","fontSize":"2xl","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)","link":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)"}}} /-->

<!-- wp:post-date {"fontSize":"small","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-ash)"}},"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"base","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-bone)"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"className":"has-text-color","fontSize":"lg","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-ash)"},"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-color has-lg-font-size" style="color:var(--wp--preset--color--c-ash)">The veil reveals nothing for your query. Try different words to pierce the darkness.</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search Again","showLabel":false,"placeholder":"Search again…","buttonText":"Search","buttonPosition":"button-inside","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"fontSize":"base","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)","link":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)"},"typography":{"fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)"}}} /-->

<!-- wp:query-pagination-numbers {"fontSize":"base","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-bone)","link":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)"}}} /-->

<!-- wp:query-pagination-next {"fontSize":"base","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)","link":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)"},"typography":{"fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)"}}} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
