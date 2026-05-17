# Landing V1 Full Notes

This document captures the current landing-v1 configuration and the main decisions made while setting it up.

## Goal
Create a modern landing area that is isolated from the legacy Bootstrap/Mix stack used elsewhere in the project.
The landing-v1 work must remain stand-alone and should not inherit Bootstrap or jQuery behavior from the core Laravel app.

## Architecture
- Existing app/admin pages stay on the legacy asset pipeline.
- Landing-v1 uses its own Vite entry points.
- FlyonUI is used for interactive components.
- Tailwind CSS v3 is kept as the project Tailwind version.
- Landing-v1 must not import core app styles, scripts, or layout files.
- Any new landing task should start from the landing docs, not from the Bootstrap/jQuery core stack.

## Installed/Used Packages
- `flyonui` 1.3.0
- `tailwindcss` 3.4.x
- `@iconify/tailwind`
- `@iconify-json/tabler`

## Configuration Summary

### `vite.config.js`
- Landing inputs:
  - `resources/css/landing_v1.css`
  - `resources/js/landing_v1.js`

### `tailwind.config.js`
- `content` scans:
  - `resources/views/landing_v1/**/*.blade.php`
  - `resources/js/landing_v1.js`
  - `node_modules/flyonui/dist/js/*.js`
- `important` is set to `#landing-v1-app`.
- Plugins:
  - `flyonui`
  - `flyonui/plugin`
  - `addDynamicIconSelectors({ prefix: 'icon' })`

### `resources/css/landing_v1.css`
- `@import "flyonui/dist/full.css";` is at the top.
- Tailwind directives follow it.
- Shared tokens live here:
  - brand colors
  - font family
  - typography scale
  - radius scale
  - a few layout helper utilities
- `@layer base` handles global landing-only defaults.

### `resources/js/landing_v1.js`
- Imports `flyonui/flyonui`.
- Uses `window.HSStaticMethods.autoInit()` for component initialization.

### `resources/views/landing_v1/layouts/app.blade.php`
- Uses `@vite(['resources/css/landing_v1.css', 'resources/js/landing_v1.js'])`.
- Wraps content in `#landing-v1-app` so Tailwind important scoping works.

### `resources/views/landing_v1/pages/home.blade.php`
- Landing demo page uses FlyonUI examples:
  - navbar
  - dropdown
  - accordion
  - buttons
- Logo assets are loaded from `public/assets/landing_v1/logo_nav.png` using `asset('assets/landing_v1/logo_nav.png')`.

## Important Rules
- Do not use Tailwind v4 syntax here unless the whole landing stack is migrated.
- Do not load FlyonUI from `/node_modules/...` in Blade; use Vite bundling.
- Keep interactive components aligned with FlyonUI v1.3 markup and JS.
- Keep legacy app styling separate from landing-v1.
- Keep landing-v1 independent from Bootstrap 4 and jQuery even though they remain in `package.json` for the core project.
- Keep global tokens in CSS, not in Blade.
- Use Blade components or partials if a block repeats often.

## Troubleshooting Notes
- If icons fail, check `@iconify/tailwind` and `icon-[tabler--...]` support.
- If dropdown/modal/drawer fail, verify FlyonUI markup and `autoInit()`.
- If CSS import errors appear, ensure `@import` is above Tailwind rules.
- If Vite output looks stale, hard refresh the browser.

## Useful Commands
- `npm run landing:dev`
- `npm run landing:build`

## Current Status
- Landing build succeeds.
- FlyonUI 1.3.0 is installed.
- Iconify support is enabled.
- Landing CSS has been cleaned and organized.
