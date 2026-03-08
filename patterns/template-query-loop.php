<?php
/**
 * Title: Post Query Loop
 * Slug: miles-veils-of-fate-tales-of-eldermoor-fc13d6a3/template-query-loop
 * Categories: hidden
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-void)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--c-void);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"fontSize":"huge","style":{"typography":{"fontFamily":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-family\u002d\u002dcinzel-decorative)","textAlign":"center"},"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-gold)"}}} -->
<h1 class="wp-block-heading has-text-align-center has-text-color has-huge-font-size" style="color:var(--wp--preset--color--c-gold);font-family:var(--wp--preset--font-family--cinzel-decorative)">Chronicles of Eldermoor</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-text-color","fontSize":"lg","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-ash)"},"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-color has-lg-font-size" style="color:var(--wp--preset--color--c-ash)">Tales from beyond the veil</p>
<!-- /wp:paragraph --></div>
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
<!-- wp:paragraph {"className":"has-text-color","fontSize":"lg","style":{"color":{"text":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dc-ash)"},"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center has-text-color has-lg-font-size" style="color:var(--wp--preset--color--c-ash)">No tales have been recorded yet. The veil remains unbroken.</p>
<!-- /wp:paragraph -->
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
