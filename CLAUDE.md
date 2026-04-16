# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

QuoteMeNetwork (QMN) landing pages — a PHP lead-generation site for home improvement services. Each service vertical (roofing, plumbing, hvac, etc.) has its own folder with landing page, thank-you page, privacy policy, header, and partners page.

## Local Development

Uses [DDEV](https://ddev.readthedocs.io/) for local dev (PHP 8.3, nginx-fpm, MariaDB 10.11):

```bash
ddev start          # Start local environment
ddev stop           # Stop
ddev ssh            # Shell into web container
# Site available at https://qmn-landing.ddev.site
```

No build step, no JS bundler, no composer dependencies — plain PHP served directly.

## Deployment

`deploy.php` is a GitHub webhook endpoint that runs `git pull origin main` on the server. Pushing to `main` triggers auto-deploy.

## Architecture

### Lead Flow

1. User visits `/{service}/index.php` — landing page with multi-step form
2. Form POSTs to `/process.php` with hidden `_service` field
3. `process.php` detects service, looks up geo data via `ZipLookup.php` (binary search on `data/geo-data.csv`), builds lead payload
4. `LeadAPI` class (`lead-api.php`) submits lead to LeadVantage API via cURL
5. On success: optional postback URLs fired, then redirect to `/{service}/thank-you.php`
6. On failure: redirect back to form with error query param

### Service Configuration

All service-to-API field mappings (SRC, product, subcat) live in `$serviceConfig` array in [process.php](process.php). To add a new service vertical, add an entry there and create the corresponding folder.

### Shared Components

- `footer.php` — TCPA consent footer (root level, included by service pages)
- `partners-content.php` — shared partners list markup/CSS
- `{service}/header.php` — per-service header (all nearly identical)
- `{service}/partners.php` — thin wrapper that includes local header + `../partners-content.php`

### Theming

`roof-rejuvenation` uses a dark theme. Shared components (`footer.php`, `partners-content.php`) detect this via `$_SERVER['REQUEST_URI']` and switch colors.

### URL Tracking

Landing pages extract `SRC` and `SUB2` query params from the URL for affiliate/campaign tracking. These are passed through hidden form fields to `process.php`, which fires postback URLs on successful lead submission.

## Adding a New Service Vertical

1. Add config entry in `process.php` `$serviceConfig` array
2. Copy an existing service folder (e.g., `roofing/`)
3. Update page title, meta description, form fields, and service-specific copy
4. Add link to root `index.php` services grid
