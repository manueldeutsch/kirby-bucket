# Website Project

## Tech Stack

-   **Backend**: PHP 8.3+, Kirby CMS 6
-   **Frontend**: Native CSS with Nesting, minimal JavaScript (ES modules)
-   **Build**: Parcel (Lightning CSS for CSS: bundles `@import`, transpiles nesting, minifies)
-   **Sources**: `assets/css/main.css`, `assets/js/main.js` → output in `assets/dist/` (not in Git)
-   **Deployment**: GitHub Actions → FTPS (`master` and `live` branches)

## Design

-   Stick to the project's design system: existing custom properties (`assets/css/common/variables.css`), typography, grid, helpers and components
-   Reuse existing classes and components before writing new ones
-   If something isn't covered by the design system: keep it as simple as possible and invent as little as possible (no new colors, sizes, effects or variants of your own)
-   When in doubt, ask before adding new design decisions

## Solution Preferences

### Simplicity & Minimalism

-   Prefer CSS solutions (Flexbox, Grid, Nesting, Custom Properties)
-   JavaScript only when really necessary
-   No over-engineering
-   Use native browser features

### Dependencies

-   As few dependencies as possible
-   When needed: suggest popular npm packages or official Kirby plugins

### Kirby Features

-   Use built-in features (Blueprints, Snippets, Templates, Blocks)
-   Kirby Cookbook & Documentation as reference

## Code Standards

-   PHP: PSR-12 (4 Spaces)
-   CSS: 2 Spaces
-   Consistent nesting with `&` syntax
-   New CSS files: import them in `assets/css/main.css`
