# Page Creation — Design System Alignment Review

When Miles creates new pages or sections, it often scaffolds scoped CSS variables and custom classes rather than reusing the established theme.json tokens and shared components. This document tracks alignment issues so they can be resolved before patterns solidify.

---

## Founders Hero Section (`styles.css` ~line 2698)

The `.founders-page` / `.founders-hero` section introduces a fully scoped variable system and duplicates several global patterns. Below is a detailed breakdown of what diverges from the design system and what decisions are needed.

---

### 1. Scoped Variables Re-declare the Entire Palette

The `.founders-page` selector (line 2702) defines its own complete set of CSS custom properties — colors, font sizes, and spacing — using short names like `--c-void`, `--c-gold`, `--space-sm`, etc.

**The problem:** These are _not_ the same variables the rest of the theme uses. The homepage hero references `var(--wp--preset--color--c-gold)` while the founders hero references `var(--c-gold)`. Same hex value, completely disconnected token. If a color is updated in `theme.json`, the founders section will not pick it up.

| Token Type | Rest of Theme | Founders Section |
|---|---|---|
| Colors | `var(--wp--preset--color--c-gold)` | `var(--c-gold)` |
| Font sizes | `var(--wp--preset--font-size--lg)` | `var(--font-size-lg)` |
| Spacing | `var(--wp--preset--spacing--40)` | `var(--space-md)` |
| Fonts | `var(--wp--preset--font-family--cinzel-decorative)` | `var(--font-display)` |

**Decision needed:** Replace `var(--c-*)` / `var(--space-*)` / `var(--font-size-*)` with their `var(--wp--preset--*)` equivalents, or keep the scoped aliases but point them at the presets (like the semantic aliases `--theme-bg`, `--theme-accent`, etc. in `:root`)?

---

### 2. Colors — Mostly Matching, One Deviation

The hex values are largely the same as `theme.json`, with one exception:

| Variable | Founders Value | theme.json Value | Match? |
|---|---|---|---|
| `--c-void` | `#07040e` | `#0a0612` | **No** — slightly darker |
| `--c-stone` | `#0e0a18` | `#0e0a18` | Yes |
| `--c-purple` | `#7B2FBE` | `#7B2FBE` | Yes |
| `--c-gold` | `#C9A84C` | `#C9A84C` | Yes |
| `--c-gold-dim` | `#9a7e38` | — | **New** — not in theme.json |
| All others | Match | Match | Yes |

**Decisions needed:**
- Is `#07040e` for `--c-void` intentional (slightly darker background for this page) or drift from the canonical `#0a0612`?
- `--c-gold-dim` (`#9a7e38`) is used only in the divider gradient. Should it be promoted to a `theme.json` palette token, or left as a one-off?

---

### 3. Font Sizes — Close but Not Identical

The founders section defines its own fluid `clamp()` values. Most match the `theme.json` presets, but one differs:

| Size | Founders Section | theme.json Preset |
|---|---|---|
| `--font-size-3xl` | `clamp(1.8rem, 3vw, 2.2rem)` | `clamp(1.5rem, 1.5rem + ((1vw - 0.2rem) * 1.25), 2.5rem)` |

The founders `3xl` has a higher floor (1.8rem vs 1.5rem) and lower ceiling (2.2rem vs 2.5rem) — a tighter range. All other sizes are functionally equivalent.

---

### 4. Spacing — Different Naming Convention, Same Values

The spacing tokens use `min()` with identical values to `theme.json` but under different names:

| Founders Variable | Equivalent theme.json Preset |
|---|---|
| `--space-xs` | `--wp--preset--spacing--20` |
| `--space-sm` | `--wp--preset--spacing--30` |
| `--space-md` | `--wp--preset--spacing--40` |
| `--space-lg` | `--wp--preset--spacing--50` |
| `--space-xl` | `--wp--preset--spacing--60` |
| `--space-2xl` | `--wp--preset--spacing--65` |

Values are identical — this is purely a naming disconnect that can be resolved by swapping to the preset references.

---

### 5. Hardcoded Colors in Gradients and Shadows

Several `rgba()` values use raw hex-derived colors instead of tokens. This is consistent with the pattern seen in homepage CSS (rgba opacity variants of known tokens can't reference CSS custom properties), but worth documenting:

- **Line 2745:** `background-color: #0a0612` — hardcoded, should reference a token
- **Lines 2747, 2760, 2944, 2956:** `rgba(123,47,190,...)` — derived from `--c-purple` (#7B2FBE)
- **Lines 2802–2804, 2996–2998:** `rgba(201,168,76,...)` — derived from `--c-gold` (#C9A84C)
- **Lines 2846, 3040:** `rgba(201,168,76,0.5)` — gold box-shadow on the diamond element

These follow the same approach as the homepage where rgba transparency variants must be hardcoded since CSS custom properties can't be decomposed into RGB channels without `color-mix()` or similar.

---

### 6. Duplicate Rule Blocks

The entire founders hero section is written **three times** with different selector strategies:

1. **Plain selectors** (lines 2738–2933) — `.founders-hero`, `.founders-hero-title`, etc.
2. **`:root :where()` selectors** (lines 2937–3126) — `:root :where(.founders-hero)`, etc. Used to lower specificity for WordPress block editor compatibility.
3. **Editor overrides** (lines 3129–3147) — `.editor-styles-wrapper .founders-hero` with `!important` for the block editor.

The plain and `:root :where()` versions contain the same styles. Only one set should be needed for the front end.

**Decision needed:** Consolidate to just the `:root :where()` selectors (preferred for WordPress block themes) plus the editor overrides, and remove the plain duplicates?

---

### 7. Scroll Animations — Copy of Global Rules

Lines 2866–2883 and 3060–3077 duplicate the exact same scroll animation logic from lines 49–71 of the global styles, scoped under `.founders-page`:

```css
/* Global version (line 49) */
.js .animate-on-scroll:not(.is-visible) {
  opacity: 0;
  transform: translateY(30px);
}

/* Founders duplicate (line 2871) */
.js .founders-page .animate-on-scroll:not(.is-visible) {
  opacity: 0;
  transform: translateY(30px);
}
```

The timing function, transform values, and `.is-visible` logic are identical. The `.founders-page` ancestor selector is the only difference, and the global rules should already apply to elements inside `.founders-page` without needing scoped duplicates.

**Decision needed:** Can the founders-scoped scroll animation rules be removed entirely, relying on the global `.animate-on-scroll` system? Or is there a specificity reason they need the `.founders-page` ancestor?

---

### 8. `.founders-hero-tag` vs `.section-tag`

The global `.section-tag` class (line 84) and `.founders-hero-tag` (line 2782) serve the same role — small uppercase text above a section heading — but differ in several properties:

| Property | `.section-tag` (global) | `.founders-hero-tag` (founders) |
|---|---|---|
| Font family | `var(--font-display)` (Cinzel Decorative) | `var(--font-body)` (Cormorant Garamond) |
| Font size | `var(--wp--preset--font-size--small)` | `clamp(0.7rem, 1.2vw, 0.85rem)` |
| Letter spacing | `0.3em` | `0.2em` |
| Color | `var(--wp--preset--color--c-lavender)` | `var(--c-lavender)` |

The color resolves to the same hex value but through disconnected tokens. The font-family and letter-spacing differences may be intentional for the founders page aesthetic, or they may be drift.

**Decision needed:** Should `.founders-hero-tag` extend `.section-tag` as a base (adding only its animation), or are the font-family and spacing differences intentional and worth keeping as a distinct class?

---

## Resolved Decisions

All 7 issues have been resolved. Changes applied in the founders CSS alignment pass.

| # | Issue | Resolution |
|---|---|---|
| 1 | Scoped variables vs theme.json tokens | **Replaced inline** — all `var(--c-*)`, `var(--space-*)`, `var(--font-size-*)`, `var(--font-lato)` swapped to `var(--wp--preset--*)` equivalents. `var(--font-display)` and `var(--font-body)` left as-is (`:root` aliases). |
| 2 | `--c-void` discrepancy | **Aligned to `#0a0612`** — theme.json updated. Treated as drift. |
| 3 | `--c-gold-dim` (`#9a7e38`) | **Promoted to theme.json** — added as `c-gold-dim` palette token. |
| 4 | Duplicate rule blocks | **Consolidated to `:root :where()` + editor overrides** — plain selector block (~230 lines) removed. |
| 5 | Scroll animation duplication | **Removed** — founders-scoped copies deleted; global `.animate-on-scroll` rules cascade. Custom keyframe animations kept. |
| 6 | `.founders-hero-tag` vs `.section-tag` | **Unified** — removed font-family and letter-spacing overrides from `.founders-hero-tag`. Now inherits `.section-tag` base styling. |
| 7 | Font size `3xl` discrepancy | **Aligned to theme.json preset** — `var(--wp--preset--font-size--3xl)` used instead of custom clamp. |
