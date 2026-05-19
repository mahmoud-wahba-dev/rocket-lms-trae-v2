# Landing V1 Quick Reference

Read this first for any future landing-v1 task.

## Current Stack
- Laravel app with a separate landing-v1 frontend.
- Tailwind CSS v3.4.x via PostCSS.
- Vite is used only for landing-v1 assets.
- FlyonUI version: 1.3.0.
- Icons use `@iconify/tailwind` with `icon-[tabler--...]` classes.
- Landing-v1 is stand-alone and must not depend on the core Bootstrap/jQuery/Mix pipeline.

## Key Files
- `vite.config.js`
  - Inputs: `resources/css/landing_v1.css`, `resources/js/landing_v1.js`
- `tailwind.config.js`
  - Content scans landing Blade + landing JS + FlyonUI JS files.
  - Plugins: `flyonui`, `flyonui/plugin`, `addDynamicIconSelectors({ prefix: 'icon' })`.
  - Custom landing utilities and design tokens for Tailwind v3 live here, including classes like `text-57px`, `text-20px`, `bg-d3`, and `bg-gold`.
- `resources/css/landing_v1.css`
  - Imports `flyonui/dist/full.css` first.
  - Contains Tailwind directives, runtime CSS variables, and simple reusable helpers.
- `resources/js/landing_v1.js`
  - Imports `flyonui/flyonui`.
- `resources/views/landing_v1/layouts/app.blade.php`
  - Uses `@vite(['resources/css/landing_v1.css', 'resources/js/landing_v1.js'])`.
- `resources/views/landing_v1/pages/home.blade.php`
  - Landing demo page and component examples.

## Rules
- Do not use Tailwind v4 `@plugin` / `@source` syntax here.
- Do not load FlyonUI from `/node_modules/...` in Blade.
- Keep legacy Bootstrap/Mix assets separate from landing-v1.
- Do not import or depend on Bootstrap or jQuery in landing-v1 files.
- Do not reuse core app layouts, scripts, or styles inside landing-v1.
- Put reusable design tokens in `landing_v1.css`.
- Put library/setup configuration in `tailwind.config.js`.
- Put page structure in Blade.

## Working Commands
- `npm run landing:dev`
- `npm run landing:build`

## Notes
- Dropdown, modal, drawer, accordion should rely on FlyonUI markup plus `flyonui/flyonui` JS.
- Icon classes need the Iconify Tailwind plugin; otherwise `icon-[tabler--...]` will not render.
- The landing CSS build currently passes.
- If a class does not autocomplete or generate, first check `tailwind.config.js` before touching Blade.
