# ENGINEX2030 Cloud Marketing Site

Standalone source package for the existing bilingual ENGINEX2030 cloud marketing site. The original page layout, styles, motion, and local imagery are retained. The only runtime wiring change is that app and API routes use VITE_API_BASE_URL.

## Run locally

Requirements: Node.js 18 or newer and npm.

1. Copy .env.example to .env and set VITE_API_BASE_URL to the public app/API origin. The default is https://app.enginex2030.com.
2. Run npm install.
3. Run npm run build. The production site is written to dist/.
4. Run npm run preview to serve dist locally at http://127.0.0.1:4173. Set PORT to change the port.
5. Run npm test after a build to check pages, assets, direction switching, API wiring, and responsive breakpoints.

VITE_API_BASE_URL must be an origin only, for example https://app.example.com. Do not include a path, query, or credentials. The same value is used in the generated Nginx Content Security Policy so browser requests to the selected API host are allowed. If the API is hosted on another domain, configure its CORS policy to allow the marketing-site origin.

## Source layout

- src/ — source HTML pages, JavaScript, CSS, runtime API config template, and service worker.
- public/ — local SVG branding, PWA icons, product screenshots, Cairo fonts, sitemap, robots file, and ads.txt.
- scripts/build.mjs — dependency-free static build; reads VITE_API_BASE_URL from the process environment or .env.
- scripts/preview.mjs — Node built-in static preview server.
- tests/ — Node built-in checks.
- LICENSES/ — Cairo font and embedded React runtime notices.
- dist/ — generated site output; created by npm run build and not required in source control.
- .deploy/default.conf — generated Nginx configuration for the Docker image.

This is a static multi-page HTML/CSS/JavaScript site, not a React/Vite component app. Its embedded hero scene includes a bundled React runtime; the site has no npm runtime dependencies.

## Editing content and assets

- Main-page Arabic and English text is in the T.ar and T.en translation objects in src/marketing.js. The page’s default markup is Arabic/RTL; its existing language control switches to English/LTR. Initial language follows the lang query, a saved selection, or the browser language.
- Static page copy is in src/index.html, src/about.html, src/install.html, src/privacy.html, src/terms.html, and src/offline.html.
- Replace product screenshots in public/screens/ using the same filenames and aspect ratio, or update the corresponding references and descriptions in src/marketing.js.
- Replace brand and app icons in public/brand.svg, public/favicon.svg, public/icons.svg, and public/icons/.
- Registration, login, installer-release API requests, and the pricing API are wired to VITE_API_BASE_URL. Other contact or external links are regular href values in the HTML pages.
- Local Cairo font files are in public/fonts/. Their SIL Open Font License is included under LICENSES/.

## Dependencies and asset inventory

There are no npm package dependencies. Build, preview, and tests use Node.js built-ins. Browser-side external libraries and every local image, icon, and font are listed in ASSET_INVENTORY.md. License details are in THIRD_PARTY_NOTICES.md and LICENSES/.

The live laser/matrix-field hero loads its browser-side effects and icons from external CDNs, and the page uses Google Analytics. Those features need an internet connection. Local Cairo fonts, product screenshots, logos, and PWA icons are packaged in public/.

## Coolify

Compatibility: `/`, `/index.php`, `/preview.php`, and `/concept.php` serve the new landing page in the Docker deployment. Existing hash links (`#top`, `#problem`, `#flow`, `#control`, `#pricing`, `#payment`, `#platform`, `#roles`, `#faq`) and `/assets/` URLs remain supported. The application login remains `/owner-login` on the configured application origin. Pricing still comes from `/api/admin/plans`, supporting both a plan array and a `{ data: [...] }` response; each page load requests current prices without a browser cache fallback. The Docker build serves static HTML through Nginx; uploading the source PHP files alone does not deploy the new design.

The included Dockerfile is the recommended Coolify deployment path. Build the service from the repository root using the Dockerfile and expose container port 80. Set VITE_API_BASE_URL as a Docker build argument to the desired public app/API origin; it is consumed while the static HTML and the generated Nginx configuration are built. Runtime-only environment variables do not rewrite an already-built static site. Do not add API secrets to frontend variables: anything used by browser code is public. Ensure the API accepts CORS requests from the deployed marketing-site origin and configure the domain and TLS certificate in Coolify.

No .env file, credentials, or API keys are included in this archive.
