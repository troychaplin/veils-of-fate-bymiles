# Recommended Theme Changes

Areas where the theme can be made more consistent, better tokenized, and easier to maintain.

---

## 1. Add Missing Colors to theme.json Palette

Several hardcoded hex values are used throughout patterns and CSS but aren't registered as theme tokens. Adding them to `theme.json` would allow consistent usage via preset variables and make them available in the block editor color picker.

### Colors to Add

| Proposed Name | Slug | Hex | Current Usage |
|---|---|---|---|
| C White | `c-white` | `#ffffff` | CTA text, hero narrative, footer text |
| C Lavender | `c-lavender` | `#c4a0f0` | Section tags, card role labels (`.section-tag`, `.class-card-role`) |
| C Purple Mid | `c-purple-mid` | `#A060D6` | Feature numbers in CSS and patterns |
| C Purple Dark | `c-purple-dark` | `#330756` | Navigation submenu border |

### Files Affected

- `theme.json` - Add to `settings.color.palette`
- `assets/css/styles.css` - Replace hardcoded `#c4a0f0` (~line 70, ~702), `#A060D6` (~line 850)
- `patterns/3-pillar-world-section-with-animated-header.php` - Replace `#c4a0f0`
- `patterns/4-class-card-grid-with-featured-item.php` - Replace `#c4a0f0`
- `patterns/4-feature-list-with-numbered-items-and-animations.php` - Replace `#c4a0f0`, `#A060D6`
- `patterns/full-width-cta-section-with-animated-elements.php` - Replace `#ffffff`
- `patterns/hero-with-background-image-headline-and-cta.php` - Replace `#ffffff`
- `parts/footer.html` - Replace `#ffffff`
- `parts/footer-pages.html` - Replace `#ffffff`
- `parts/header.html` - Replace `#330756` in navigation config

---

## 2. Fix Undefined Spacing Token Reference

`parts/header.html` references `var(--wp--preset--spacing--sm)` which is not defined in `theme.json`. The spacing scale only defines slugs `20`, `30`, `40`, `50`, `60`, and `65`.

### Fix

Replace `var(--wp--preset--spacing--sm)` with `var(--wp--preset--spacing--20)` (the X-Small token) or `var(--wp--preset--spacing--30)` depending on the intended size.

### File

- `parts/header.html`

---

## 3. Consolidate CSS Custom Properties with theme.json Tokens

The theme defines `--font-display` and `--font-body` as CSS custom properties in `styles.css :root`, but these same fonts are already available as WordPress preset variables. This creates two ways to reference the same font.

### Current State

```css
/* In styles.css */
--font-display: 'Cinzel Decorative', Georgia, serif;
--font-body: 'Cormorant Garamond', Georgia, serif;
```

These are used extensively in CSS (`.hero-headline`, `.world-title`, `.classes-title`, `.features-title`, `.section-tag`, `.class-card-role`, `.class-card-name`, `.hero-logo`, `.hero-cta`, `.hero-footer-link`).

Meanwhile, the theme.json tokens are:
- `var(--wp--preset--font-family--cinzel-decorative)`
- `var(--wp--preset--font-family--cormorant-garamond)`

### Recommendation

Keep the CSS custom properties but alias them to the theme.json values for consistency:

```css
:root {
  --font-display: var(--wp--preset--font-family--cinzel-decorative);
  --font-body: var(--wp--preset--font-family--cormorant-garamond);
}
```

This maintains backward compatibility while ensuring a single source of truth. The fallback stacks (`Georgia, serif`) are already defined in theme.json's `fontFamily` property.

### File

- `assets/css/styles.css` (lines 3-4)

---

## 4. Inconsistent Font Family Application in Patterns

Patterns use three different methods to set font families, sometimes within the same file:

1. **Inline style with CSS variable**: `font-family:var(--font-display)` (homepage patterns)
2. **Inline style with preset variable**: `font-family:var(--wp--preset--font-family--cinzel-decorative)` (template patterns)
3. **WordPress class**: `has-cinzel-decorative-font-family` (some template patterns)

### Recommendation

Standardize on WordPress preset classes (`has-cinzel-decorative-font-family`) where blocks support them, falling back to the preset CSS variable for custom HTML. Avoid `var(--font-display)` in pattern markup since it bypasses theme.json.

### Files Affected

- `patterns/3-pillar-world-section-with-animated-header.php`
- `patterns/4-class-card-grid-with-featured-item.php`
- `patterns/4-feature-list-with-numbered-items-and-animations.php`
- `patterns/full-width-cta-section-with-animated-elements.php`
- `patterns/hero-with-background-image-headline-and-cta.php`

---

## 5. Standardize Section Background Alternation

Sections alternate between `c-void` and `c-stone`, but the pattern isn't completely consistent:

| Section Order (Front Page) | Background |
|---|---|
| Hero | `c-void` |
| World | `c-stone` (via CSS) |
| Classes | `c-void` (via CSS) |
| Features | `c-stone` (via CSS) |
| CTA | `c-void` (via pattern) |
| Footer | `c-void` |

The CTA and footer are both `c-void`, breaking the alternation. If a visual break is intentional here (CTA uses a full-bleed background image), consider documenting the deliberate pattern for future contributors.

### Recommendation

No code change needed, but consider adding a comment in `styles.css` documenting the background alternation pattern.

---

## 6. Inconsistent Line Height Values

The global body line-height is set to `1.5` in `theme.json` styles, but `styles.css` overrides it to `1.6` on the `body` element. Additionally, various components use hardcoded line-heights:

| Location | Line Height |
|---|---|
| `theme.json` global style | 1.5 |
| `styles.css` body | 1.6 |
| `.world-intro` | 1.7 |
| `.class-card-desc` | 1.7 |
| `.hero-narrative` | 1.7 |
| `.pillar-text` | 1.5 |
| `.world-title` | 1.15 |
| `.hero-headline` | 1.1 |

### Recommendation

- Resolve the `1.5` vs `1.6` conflict by picking one (suggest updating `theme.json` to `1.6` since that's the CSS override that actually takes effect)
- Map commonly used line-heights to the custom tokens where possible: `1.1` = `tight`, `1.5` = `normal`
- Consider adding `1.7` as a custom line-height token if it's used frequently

### Files

- `theme.json` (line ~649)
- `assets/css/styles.css` (line 25)

---

## 7. Normalize Border Patterns

Borders use several slightly different approaches for the same visual intent:

| Pattern | Usage |
|---|---|
| `rgba(123,47,190,0.2)` | Card borders in CSS |
| `rgba(123,47,190,0.15)` | Pillar borders in CSS |
| `c-purple-deep` token | Post card borders in patterns |
| `rgba(201,168,76,0.15)` | Header border in template part |

### Recommendation

Consider standardizing on either `rgba(123,47,190,0.2)` or `c-purple-deep` for card borders rather than mixing both. At minimum, document the intentional differences (e.g., `0.15` for more subtle, `0.2` for standard).

---

## 8. Consolidate Title Accent Gradient Class

Three sections use the same gradient text pattern with different class names:

- `.world-title-accent`
- `.classes-title-accent`
- `.features-title-accent`

All three have identical CSS. The features pattern already reuses `classes-title-accent`, which works but is semantically misleading.

### Recommendation

Create a single shared class (e.g., `.title-accent` or `.gradient-text`) and remove the duplicates.

### Files

- `assets/css/styles.css` - Consolidate three identical rule sets
- Update pattern PHP files if class names change

---

## 9. Section Inner Max-Width Inconsistency

Most section inners use `max-width: 1280px` (matching `wideSize`), but features and CTA use `900px`:

| Section | Max Width |
|---|---|
| `.world-inner` | 1280px |
| `.classes-inner` | 1280px |
| `.features-inner` | 900px |
| `.cta-inner` | 900px |

### Recommendation

This appears intentional (narrower for readability of list-style content). Consider referencing the theme.json values via CSS variables for the wide sections, and document the narrower `900px` as a deliberate choice. A mid-size layout token could be added to theme.json if needed.

---

## 10. Navigation Color Tokens

The header navigation block uses hardcoded hex values in its JSON attributes rather than theme color token references:

| Value | What It Is | Should Be |
|---|---|---|
| `#4a1a75` | Priority Plus menu bg | `var:preset\|color\|c-purple-deep` |
| `#330756` | Submenu border | Needs new token (see item 1) |
| `#7B2FBE` | Submenu background | `var:preset\|color\|c-purple` |
| `#ffffff` | Menu item text | Needs new token (see item 1) |

### Recommendation

Where the block editor supports it, use theme color slug references instead of hex values. For colors not in the palette (like `#330756`), add them to theme.json first (see item 1).

### File

- `parts/header.html`

---

## 11. Fix Font Family Fallback Stacks in theme.json

The font families in theme.json use `sans-serif` as their generic fallback, but Cinzel Decorative and Cormorant Garamond are serif fonts.

### Current

```json
"fontFamily": "\"Cinzel Decorative\", sans-serif"
"fontFamily": "\"Cormorant Garamond\", sans-serif"
```

### Recommended

```json
"fontFamily": "\"Cinzel Decorative\", Georgia, serif"
"fontFamily": "\"Cormorant Garamond\", Georgia, serif"
```

### File

- `theme.json` (lines ~279, ~326)

---

## 12. Consider Semantic CSS Custom Properties for Plugin Authors

For plugin developers who need to match the theme, semantic aliases would be clearer than knowing theme-specific token names:

```css
:root {
  --theme-bg: var(--wp--preset--color--c-void);
  --theme-bg-alt: var(--wp--preset--color--c-stone);
  --theme-text: var(--wp--preset--color--c-bone);
  --theme-text-muted: var(--wp--preset--color--c-ash);
  --theme-accent: var(--wp--preset--color--c-gold);
  --theme-interactive: var(--wp--preset--color--c-purple);
  --theme-border: var(--wp--preset--color--c-purple-deep);
}
```

### File

- `assets/css/styles.css` (add to `:root`)

---

## Summary by Priority

| Priority | Item | Impact |
|---|---|---|
| High | 1. Add missing colors to palette | Consistency across patterns and editor |
| High | 2. Fix undefined spacing token | Broken/invalid reference |
| High | 11. Fix font fallback stacks | Incorrect fallback rendering |
| Medium | 3. Alias CSS vars to theme.json | Single source of truth |
| Medium | 4. Standardize font application | Pattern consistency |
| Medium | 8. Consolidate title accent class | DRY CSS |
| Medium | 10. Navigation color tokens | Editor consistency |
| Low | 6. Resolve line-height conflict | Minor visual inconsistency |
| Low | 7. Normalize border patterns | Minor visual inconsistency |
| Low | 9. Section inner max-width | Intentional design choice |
| Low | 12. Semantic CSS aliases | Developer experience |
| Info | 5. Document background alternation | Documentation only |
