# Changelog

## 2.1.1 — 2026-08-21

Modal and field-editor polish: datepicker/timepicker, jQuery UI dialogs, Bootstrap overlays.

### Editors and overlays

- Fix calendar trigger: ship `img/b_calendar.png` (host JS path) and paint via SVG mask
- Modernize `#ui-datepicker-div`: circular day selection, Inter chrome, roomier padding
- Rebuild `.ui-timepicker-div` as CSS grid (no float label hack); compact time input + green sliders
- Theme `.ui-widget-overlay`, dialog close via `close.svg`, stronger buttonpane layout
- New `scss/_modals.scss`: Bootstrap modal shell, `#enum_editor`, GIS editor, inline `.cEdit` overflow
- RTL overrides for picker chevrons, time grid, dialog close, calendar trigger

## 2.1.0 — 2026-08-21

Usability and design polish: 20 targeted improvements plus a visual QA pass (login, tabs, typed cells, chrome).

### Design system

- Expose Sass tokens as `--stygia-*` CSS custom properties on `:root` (`scss/_tokens.scss`)
- Inter 300 bundled; body stays 400, paragraphs/labels use 300, headings 500 — reserve 600 for lockups
- Optional system font: **FiraCode Nerd Font** (Propo for UI, Mono for SQL) when installed; otherwise Inter / JetBrains Mono
- Stronger muted/disabled text; denser-but-breathing type rhythm
- Login: river-mark badge + `phpMyAdmin · STYGIA` lockup, single centered column, glow, `prefers-reduced-motion`
- Sidebar lockup is CSS-only so phpMyAdmin’s leftover `<h1>` cannot double-render the wordmark

### Shell and navigation

- `nav-pills` restyled as underline tabs (not green CTA pills); active icons match the accent
- Media queries for toolbars, `#page_nav_icons`, charts, alerts/toasts at 1280 / 1024 / 768
- Discoverable `.navItemControls` (`focus-within`); larger hit targets on chrome and sidebar icons (14px glyphs in 28–32px boxes)
- Breadcrumb / floating menubar stacking and contrast
- Console: `left`/`right` instead of `calc(100% - 240px)`; collapsed state hides the prompt ghost; clearer toolbar

### Data and SQL

- Browse tables: denser headers, stronger zebra/hover, quieter ON DELETE / ON UPDATE labels
- Cell values colored with [One Dark Pro](https://github.com/Binaryify/OneDark-Pro) tokens (`scss/_datatypes.scss`) — int, string, date, blob, json, bit, null, …
- CodeMirror and SQL hues share the same One Dark Pro palette (keywords, strings, numbers, comments, errors)
- Privileges / index layouts: flex instead of floats; unified input heights and focus rings

### Chrome and assets

- Modals/overlays deduped; datepicker/dialogs aligned to Stygia tokens (less invert)
- Remove orphan legacy PNGs from `img/`; drop typo `field-index-uinique.svg`
- Logo SVGs redrawn (login mark, sidebar lockup, GitHub mark)

## 2.0.1 — 2026-08-13

Bugfix release after defect audit.

- **RTL:** full `theme.rtl.css` via `rtlcss(theme.css)` + `_rtl-overrides.scss` (no more 2 KB stub)
- **jQuery UI:** ship `jquery/jquery-ui.css` + images (dark base) for datepicker/dialogs
- Map missing `.ic_s_tbl`; fix PK tint after mask; spinner usable with CSS spin
- Remap Bootstrap `$light` / emphasis tokens so `.table-light` stays dark
- Stop forcing all text inputs to LTR in RTL; SQL/CodeMirror only
- Logos via `background-image` (not `content: url()` on `<img>`)
- `npm run watch` rebuilds LTR + RTL; pack/CI include `jquery/`

## 2.0.0 — 2026-08-13

Standalone, portfolio-ready release of Stygia for phpMyAdmin 6.x.

- Compile with `npm install && npm run build` (Bootstrap 5.3.3 via npm)
- Replace missing PNG/GIF icon maps with SVG + `mask-image`
- Load Inter and JetBrains Mono as local woff2
- Semantic colors distinct from the accent (success, info, SQL hues)
- Branded login, SVG mark, real `screen.png`
- In-app logo is single-line **phpMyAdmin - Stygia**; portfolio mark alone for GitHub/docs
- Console expands only when `.expanded` (no hover trap)
- WCAG AA contrast pass for body, links, and primary buttons
- MIT `LICENSE`, GitHub Actions zip, design notes in `docs/DESIGN.md`

## 1.0.0

Initial dark theme (tokens + PMA overrides).
