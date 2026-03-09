# Veils of Fate - Design System

A dark, mystical fantasy design system for a WordPress block theme. This document serves as the source of truth for adapting plugins and extensions to match the theme's visual language.

---

## Color Palette

All colors are registered in `theme.json` and available as WordPress preset CSS variables.

| Token | Slug | Hex | CSS Variable | Usage |
|---|---|---|---|---|
| C Void | `c-void` | `#07040e` | `var(--wp--preset--color--c-void)` | Primary background, deepest black |
| C Stone | `c-stone` | `#0e0a18` | `var(--wp--preset--color--c-stone)` | Alternating section backgrounds |
| C Purple | `c-purple` | `#7B2FBE` | `var(--wp--preset--color--c-purple)` | Primary accent, interactive states |
| C Purple Deep | `c-purple-deep` | `#4a1a75` | `var(--wp--preset--color--c-purple-deep)` | Borders, separators, subtle accents |
| C Gold | `c-gold` | `#C9A84C` | `var(--wp--preset--color--c-gold)` | Headings, highlights, primary accent |
| C Gold Dim | `c-gold-dim` | `#9a7e38` | `var(--wp--preset--color--c-gold-dim)` | Muted gold, ornament lines |
| C Magenta | `c-magenta` | `#FF69D4` | `var(--wp--preset--color--c-magenta)` | Gradient endpoints, bright accent |
| C Bone | `c-bone` | `#d4c9b8` | `var(--wp--preset--color--c-bone)` | Body text, primary readable text |
| C Ash | `c-ash` | `#8a7f72` | `var(--wp--preset--color--c-ash)` | Secondary text, muted content, metadata |

### Color Usage Guidelines

- **Backgrounds** alternate between `c-void` and `c-stone` to create visual rhythm between sections
- **Headings** are `c-gold` on dark backgrounds
- **Body text** is `c-bone` for primary content, `c-ash` for secondary/muted content
- **Borders** use `c-purple-deep` at 1px for card and section boundaries
- **Interactive elements** use `c-purple` for hover states and active borders
- **Gradient text** uses a gold-to-magenta gradient for accent headings (the "title accent" pattern)

### Hardcoded Colors in Use (not tokenized)

These colors appear in CSS and patterns but are not in the theme.json palette:

| Hex | Usage | Notes |
|---|---|---|
| `#c4a0f0` | Section tags, card role labels | Light purple, used for small uppercase labels |
| `#A060D6` | Feature numbers (Roman numerals) | Medium purple accent |
| `#ffffff` | CTA text, hero narrative, footer text | White, used where `c-bone` may be too muted |
| `#330756` | Navigation submenu border | Dark purple variant |
| `rgba(201,168,76,0.15)` | Header bottom border | Gold at 15% opacity |

---

## Typography

### Font Families

Three font families form the typographic hierarchy. All are registered in `theme.json`.

| Name | Slug | CSS Variable | Stack | Source | Usage |
|---|---|---|---|---|---|
| Cinzel Decorative | `cinzel-decorative` | `var(--wp--preset--font-family--cinzel-decorative)` | `"Cinzel Decorative", sans-serif` | Local (woff2) | Display headings, logos, CTAs, section tags |
| Cormorant Garamond | `cormorant-garamond` | `var(--wp--preset--font-family--cormorant-garamond)` | `"Cormorant Garamond", sans-serif` | Local (woff2) | Headings (h1-h6 default), elegant body text |
| Lato | `lato` | `var(--wp--preset--font-family--lato)` | `"Lato", sans-serif` | Google Fonts | Body text (global default) |

**Custom CSS variables** (defined in `styles.css`, not in `theme.json`):
- `--font-display`: `'Cinzel Decorative', Georgia, serif` - Used in CSS for display/decorative text
- `--font-body`: `'Cormorant Garamond', Georgia, serif` - Used in CSS for body-level overrides

### Font Weights Available

| Font | Weights |
|---|---|
| Cinzel Decorative | 400, 700, 900 |
| Cormorant Garamond | 300, 300i, 400, 400i, 600 |
| Lato | 300, 300i, 700, 700i |

### Font Sizes (Fluid)

All sizes use WordPress fluid typography. Values scale between min and max based on viewport.

| Name | Slug | Min | Max | CSS Variable | Usage |
|---|---|---|---|---|---|
| Small | `small` | 0.75rem | 0.8rem | `var(--wp--preset--font-size--small)` | Labels, metadata, footer links |
| Base | `base` | 0.875rem | 1rem | `var(--wp--preset--font-size--base)` | Small body text, card descriptions |
| Lg | `lg` | 1rem | 1.15rem | `var(--wp--preset--font-size--lg)` | Navigation, pillar text, enhanced body |
| Xl | `xl` | 1.125rem | 1.35rem | `var(--wp--preset--font-size--xl)` | Default body text (global), narratives |
| 2xl | `2xl` | 1.325rem | 1.6rem | `var(--wp--preset--font-size--2-xl)` | Sub-headings, card names, intro text |
| 3xl | `3xl` | 1.8rem | 2.2rem | `var(--wp--preset--font-size--3-xl)` | Feature names, h3 equivalent |
| Huge | `huge` | 1.8rem | 3rem | `var(--wp--preset--font-size--huge)` | Section titles, h2 |
| Display | `display` | 2.4rem | 5.5rem | `var(--wp--preset--font-size--display)` | Hero headline, h1 |
| Whisper | `whisper` | 1rem | 1.35rem | `var(--wp--preset--font-size--whisper)` | Quiet emphasis text |

### Heading Hierarchy (from theme.json)

| Element | Font Size Token | Font Family |
|---|---|---|
| h1 | `display` | Cormorant Garamond (inherited from `heading`) |
| h2 | `huge` | Cormorant Garamond |
| h3 | `3xl` | Cormorant Garamond |
| h4 | `2xl` | Cormorant Garamond |
| h5 | `xl` | Cormorant Garamond |
| h6 | `xl` | Cormorant Garamond |

### Custom Line Heights (from theme.json `custom`)

| Name | Value | CSS Variable |
|---|---|---|
| none | 1 | `var(--wp--custom--line-height--none)` |
| tight | 1.1 | `var(--wp--custom--line-height--tight)` |
| snug | 1.25 | `var(--wp--custom--line-height--snug)` |
| normal | 1.5 | `var(--wp--custom--line-height--normal)` |
| relaxed | 1.625 | `var(--wp--custom--line-height--relaxed)` |
| loose | 2 | `var(--wp--custom--line-height--loose)` |

### Custom Font Weights (from theme.json `custom`)

Available as `var(--wp--custom--font-weight--{name})`:

thin (100), extralight (200), light (300), normal (400), medium (500), semibold (600), bold (700), extrabold (800), black (900)

---

## Spacing System

All spacing uses fluid `min()` values that cap at a rem value but scale with viewport width.

| Name | Slug | Value | CSS Variable |
|---|---|---|---|
| X-Small | `20` | `min(0.5rem, 2vw)` | `var(--wp--preset--spacing--20)` |
| Small | `30` | `min(1rem, 3vw)` | `var(--wp--preset--spacing--30)` |
| Medium | `40` | `min(2rem, 5vw)` | `var(--wp--preset--spacing--40)` |
| Large | `50` | `min(4rem, 10vw)` | `var(--wp--preset--spacing--50)` |
| X-Large | `60` | `min(6rem, 12vw)` | `var(--wp--preset--spacing--60)` |
| Spacing 65 | `65` | `min(8rem, 16vw)` | `var(--wp--preset--spacing--65)` |

### Spacing Usage Patterns

- **Section vertical padding**: `spacing-65` (largest sections like hero, world, classes, features)
- **Section header margin-bottom**: `spacing-60`
- **Content area padding**: `spacing-60` top, `spacing-50` bottom
- **Card internal padding**: `spacing-40`
- **Element gaps (grids/flex)**: `spacing-30` to `spacing-40`
- **Small element spacing**: `spacing-20` to `spacing-30`
- **Root body padding** (left/right): `spacing-50`

---

## Layout

| Property | Value |
|---|---|
| Content width | 672px |
| Wide width | 1280px |
| Block gap | 1.2rem |
| Root padding (left/right) | `var(--wp--preset--spacing--50)` |
| Root padding (top/bottom) | 0 |

### Breakpoints

| Breakpoint | Usage |
|---|---|
| 1024px | Grid adjustments (3 cols to 2), spacing reduction |
| 768px | Switch to single column, reduce padding |
| 480px | Mobile-specific adjustments, smallest text sizes |

---

## Shadows

Four shadow presets are defined in `theme.json`:

| Name | Slug | Value | Usage |
|---|---|---|---|
| Shadow 1 | `extracted-1` | `0 0 12px rgba(201,168,76,0.5)` | Gold glow, small elements |
| Shadow 2 | `extracted-2` | `0 0 40px rgba(201,168,76,0.3)` | Gold glow, larger spread |
| Layered Shadow 3 | `extracted-layered-3` | `0 0 50px rgba(201,168,76,0.5), 0 0 100px rgba(123,47,190,0.3)` | Combined gold + purple glow |
| Inner Shadow 4 | `extracted-inner-4` | `0 0 40px rgba(123,47,190,0.1), inset 0 1px 0 rgba(123,47,190,0.1)` | Subtle card/container depth |

### Shadow Patterns in CSS

Beyond the presets, these shadow patterns are used directly in CSS:

- **Text shadows on gold headings**: `0 0 40px rgba(201,168,76,0.2), 0 2px 4px rgba(0,0,0,0.6)`
- **Logo text shadow**: `0 0 30px rgba(201,168,76,0.4), 0 0 60px rgba(123,47,190,0.2)`
- **Card hover glow**: `0 0 20px rgba(123,47,190,0.15)`
- **Narrative text shadow**: `0 1px 6px rgba(0,0,0,0.9)`

---

## Gradients

### Registered Gradients (theme.json)

12 gradients registered, primarily radial overlays used for atmospheric depth:

- **Radial purples** (slugs 1, 3, 4, 6, 10, 11): Subtle purple ambient glows at varying opacities (0.05-0.15)
- **Radial magentas** (slugs 2, 7, 12): Very subtle magenta accents (0.03-0.06)
- **Linear darks** (slugs 5, 8, 9): Dark overlay gradients for content legibility

### Key Gradient Patterns in CSS

**Gold-to-Magenta text gradient** (accent headings):
```css
background: linear-gradient(135deg, var(--wp--preset--color--c-gold) 40%, var(--wp--preset--color--c-magenta) 100%);
-webkit-background-clip: text;
background-clip: text;
color: transparent;
```

**Card overlay** (dark fade for text legibility over images):
```css
background: linear-gradient(to top, rgba(7,4,14,0.97) 0%, rgba(7,4,14,0.6) 40%, rgba(7,4,14,0.15) 100%);
```

**Section atmospheric overlay** (gradient + radial glow):
```css
background:
  linear-gradient(to bottom, var(--wp--preset--color--c-void) 0%, transparent 8%, transparent 92%, var(--wp--preset--color--c-void) 100%),
  radial-gradient(ellipse 60% 50% at 50% 50%, rgba(123,47,190,0.06) 0%, transparent 70%);
```

**Ornament line** (gold fade):
```css
background: linear-gradient(90deg, transparent, var(--wp--preset--color--c-gold-dim), transparent);
```

**Feature separator line**:
```css
background: linear-gradient(90deg, transparent, var(--wp--preset--color--c-purple-deep), rgba(201,168,76,0.15), var(--wp--preset--color--c-purple-deep), transparent);
```

---

## Decorative Elements

### Diamond Ornaments

Small rotated squares used as visual separators and decorative accents.

```css
/* Standard diamond */
width: 8px;
height: 8px;
background: var(--wp--preset--color--c-gold);
transform: rotate(45deg);
box-shadow: 0 0 12px rgba(201,168,76,0.5);

/* Small separator diamond */
width: 4px;
height: 4px;
background: var(--wp--preset--color--c-purple-deep);
transform: rotate(45deg);
```

### Ornament Lines

Horizontal gradient lines flanking diamonds:
```css
height: 1px;
background: linear-gradient(90deg, transparent, var(--wp--preset--color--c-gold-dim), transparent);
```

### Hexagonal CTA Buttons

CTAs use a `clip-path` polygon to create a hexagonal/pointed shape:

```css
clip-path: polygon(12px 0%, calc(100% - 12px) 0%, 100% 50%, calc(100% - 12px) 100%, 12px 100%, 0% 50%);
```

With a glow border element using a matching expanded clip-path:
```css
clip-path: polygon(13px -3px, calc(100% - 13px) -3px, calc(100% + 3px) 50%, calc(100% - 13px) calc(100% + 3px), 13px calc(100% + 3px), -3px 50%);
background: linear-gradient(135deg, var(--wp--preset--color--c-purple), var(--wp--preset--color--c-magenta), var(--wp--preset--color--c-purple));
opacity: 0.35;
```

---

## Animations

### Scroll Animations

Elements with class `animate-on-scroll` fade in and slide up when they enter the viewport.

**Requires**: `js` class on `<html>` (added via `wp_head` hook) and `script.js` IntersectionObserver.

```css
/* Hidden state */
.js .animate-on-scroll:not(.is-visible) {
  opacity: 0;
  transform: translateY(30px);
}

/* Visible state */
.js .animate-on-scroll.is-visible {
  opacity: 1;
  transform: translateY(0);
}

/* Transition */
transition: opacity 0.8s cubic-bezier(0.22, 1, 0.36, 1),
            transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);

/* Staggered delays for child elements */
:nth-child(2) { transition-delay: 0.12s; }
:nth-child(3) { transition-delay: 0.24s; }
:nth-child(4) { transition-delay: 0.36s; }
:nth-child(5) { transition-delay: 0.48s; }
```

### Hero Animations

- `heroFadeDown`: Fade + slide from above (header)
- `heroFadeUp`: Fade + slide from below (body elements, staggered 0.6s-2.2s)
- `heroReveal`: Fade + scale + blur reveal (headline, 0.8s delay)
- `veilBreathe`: 8s infinite ambient shimmer (background pseudo-element)
- `ctaPulse`: Opacity + blur pulse for CTA glow

### Shared Easing

The primary easing curve used throughout: `cubic-bezier(0.22, 1, 0.36, 1)` - a smooth ease-out.

### Interactive Animations

- **Card hover**: `translateY(-4px)` lift with `0.5s cubic-bezier(0.22, 1, 0.36, 1)` transition
- **Card glow**: Mouse-tracking radial gradient via JS (`.class-card::after`)
- **Feature numbers**: Brief purple glow pulse on scroll entry via JS
- **Border color transitions**: `0.4s ease`
- **Hero parallax**: Background position offset at 0.3x scroll speed via JS

### Editor Behavior

All animations are disabled in the block editor via `editor-page.css`:
```css
.editor-styles-wrapper .animate-on-scroll {
  opacity: 1 !important;
  transform: none !important;
  transition: none !important;
}
```

---

## Component Patterns

### Section Layout

Sections follow a consistent container pattern:

```
.section-name (full-width, background color, padding: spacing-65 spacing-40)
  ::before (gradient overlay for atmospheric depth)
  .section-name-inner (max-width: 1280px, margin: 0 auto, z-index: 2)
    .section-name-header (text-align: center, margin-bottom: spacing-60)
      .section-tag (uppercase, letter-spacing: 0.3em, Cinzel Decorative, font-size: small)
      .section-name-title (Cinzel Decorative, font-size: huge, gold, letter-spacing: 0.05em)
      .section-name-title-accent (gradient text span)
      .world-intro (italic, font-weight: 300, ash color, font-size: xl)
    [content grid/list]
```

### Card Pattern

Cards share these visual traits:
- `border: 1px solid rgba(123,47,190,0.2)` (purple at 20% opacity)
- Hover: `border-color: var(--wp--preset--color--c-purple)` + subtle transform
- Background: Dark gradient overlay on images
- Content padding: `spacing-40`
- Card names: `c-gold`, Cinzel Decorative
- Card descriptions: `c-ash`, weight 300

### Post Cards (Query Loop)

Used in blog/archive/search templates:
- Border: `1px solid c-purple-deep`
- Background: `c-stone`
- Padding: `spacing-40`
- Title: `c-gold`, Cinzel Decorative, `3xl` font size
- Date/metadata: `c-ash`, `small` font size
- Excerpt: `c-bone`, `base` font size

### Section Headers (Template Pages)

Post and page headers use:
- Background: `c-void`
- Top padding: `spacing-60`
- Bottom padding: `spacing-50`
- Horizontal padding: `spacing-40`
- Category/terms: `c-purple`, Cinzel Decorative, `small` font size, uppercase
- Title: `c-gold`, Cormorant Garamond or Cinzel Decorative, `display` font size
- Metadata: `c-ash`, `small` font size

---

## Borders

| Pattern | Usage |
|---|---|
| `1px solid rgba(123,47,190,0.2)` | Default card borders |
| `1px solid rgba(123,47,190,0.15)` | Subtle pillar borders |
| `2px solid c-purple-deep` | Card top accent borders |
| `1px solid c-purple-deep` | Section dividers, post card borders |
| `rgba(201,168,76,0.15) 1px` | Header bottom border (gold) |
| `4px solid c-void` | Blockquote left border |

---

## Button Styles

### Primary CTA (Hexagonal)

```css
font-family: Cinzel Decorative;
font-size: lg;
font-weight: 700;
color: #ffffff;
background: linear-gradient(135deg, rgba(123,47,190,0.15) 0%, rgba(180,100,230,0.08) 100%);
padding: spacing-30 spacing-50;
letter-spacing: 0.15em;
text-transform: uppercase;
clip-path: polygon(12px 0%, calc(100% - 12px) 0%, 100% 50%, calc(100% - 12px) 100%, 12px 100%, 0% 50%);
```

Hover: `background: rgba(123,47,190,0.8); box-shadow: 0 0 30px rgba(123,47,190,0.2);`

### Footer Links

```css
font-family: Cinzel Decorative;
font-size: small;
color: white;
letter-spacing: 0.2em;
text-transform: uppercase;
opacity: 0.5;
```

Hover: `color: c-gold; opacity: 1; text-shadow: 0 0 20px rgba(201,168,76,0.4);`

### Standard Links

Links inherit their parent color and show `text-decoration: underline` on hover.

---

## Duotone Presets

| Name | Colors | Usage |
|---|---|---|
| Primary Contrast | `#07040e`, `#d4c9b8` | Dark-to-bone images |
| Accent Dark | `#07040e`, `#9a7e38` | Dark-to-gold images |
| Accent Light | `#9a7e38`, `#d4c9b8` | Gold-to-bone images |

---

## Image Treatment

Images in the theme are consistently treated with:
- `filter: brightness(0.7) saturate(0.85)` - darkened and desaturated baseline
- Hover: `filter: brightness(0.9) saturate(1)` - slightly brightened
- Gradient overlay: Dark-to-transparent from bottom for text legibility
- `aspect-ratio: 16/10` on pillar images
- `border-radius: 4px` on pillar images
- `object-fit: cover` universally

---

## Navigation

Header navigation uses:
- Font: Cormorant Garamond (inherited), `lg` size
- Text: `c-bone` color, uppercase, `letter-spacing: 0.1em`
- Hover: `c-gold`
- Submenu background: `#7B2FBE` (c-purple)
- Priority Plus menu background: `#4a1a75` (c-purple-deep)
- Submenu border: `#330756`
- Items: White text on purple backgrounds

---

## CSS Architecture

### File Structure

| File | Purpose |
|---|---|
| `theme.json` | Design tokens, block defaults, layout settings |
| `style.css` | Theme metadata only |
| `assets/css/styles.css` | All custom CSS (sections, components, animations, responsive) |
| `assets/css/editor-page.css` | Editor-specific overrides |
| `assets/js/script.js` | Scroll animations, parallax, card glow, feature counter |

### CSS Methodology

- Custom class naming (BEM-inspired but not strict): `.world-pillar`, `.class-card--featured`, `.hero-cta-glow`
- Sections prefixed by component: `.hero-*`, `.world-*`, `.classes-*`, `.features-*`, `.cta-*`
- WordPress utility classes used: `alignfull`, `alignwide`, `has-text-align-center`, `has-{slug}-font-size`, `has-{slug}-color`
- Editor-hidden decorative elements: `.miles-editor-hidden`

### Key CSS Custom Properties

| Variable | Value | Source |
|---|---|---|
| `--font-display` | `'Cinzel Decorative', Georgia, serif` | `styles.css :root` |
| `--font-body` | `'Cormorant Garamond', Georgia, serif` | `styles.css :root` |
| `--glow-x` / `--glow-y` | Dynamic (JS) | Card hover glow position |

---

## Template Structure

### Templates

| Template | Footer Part | Notes |
|---|---|---|
| `front-page.html` | `footer-pages` | Hero pattern + post content |
| `page.html` | `footer-pages` | Post header + content |
| `single.html` | `footer-pages` | Post header with metadata + featured image + content |
| `single-vof_quests.html` | `footer` | Custom post type for quests |
| `index.html` | via pattern | Query loop pattern |
| `home.html` | via pattern | Query loop pattern |
| `archive.html` | via pattern | Archive pattern |
| `search.html` | via pattern | Search pattern |
| `404.html` | `footer-pages` | Error page |

### Template Parts

| Part | Purpose |
|---|---|
| `header` | Site header with logo, title, navigation |
| `footer` | Simple brand footer with links |
| `footer-pages` | CTA section + brand footer (used on content pages) |

---

## Quick Reference: Plugin Adaptation Checklist

When adapting a plugin to match this theme:

1. **Backgrounds**: Use `c-void` or `c-stone` for containers
2. **Text**: `c-bone` for body, `c-ash` for secondary, `c-gold` for headings/emphasis
3. **Borders**: `1px solid` using `c-purple-deep` or `rgba(123,47,190,0.2)`
4. **Font for labels**: Cinzel Decorative, `small` size, uppercase, `letter-spacing: 0.2-0.3em`
5. **Font for headings**: Cormorant Garamond, appropriate size token
6. **Font for body**: Lato (inherits from global default)
7. **Interactive states**: Purple accent on hover/focus, gold glow for emphasis
8. **Cards**: Dark gradient background, purple border, gold title, ash description
9. **Buttons**: Consider the hexagonal clip-path pattern or at minimum use the color scheme
10. **Spacing**: Use theme spacing tokens (`20` through `65`)
11. **Shadows**: Gold glow for emphasis, purple glow for interactive states
12. **Animations**: `cubic-bezier(0.22, 1, 0.36, 1)` easing, `0.4-0.8s` duration
