# Third-party notices

## Bundled React runtime

src/laser-scene.js contains production React, React DOM, and scheduler runtime code. The source carries the React MIT license markers and identifies Meta Platforms, Inc. and affiliates as copyright holder. The MIT license text is included in LICENSES/React-MIT.txt.

## ThreeUI laser/matrix-field hero

The original HTML and Nginx configuration identify the embedded hero scene as a ThreeUI adaptation under the MIT License. The selected source repository did not contain a separate ThreeUI license file or copyright holder, so no author attribution has been invented; retain the original source comment and obtain the upstream notice from its author if you redistribute the adapted scene separately.

## Cairo fonts

Cairo Arabic and Latin WOFF2 font files are included in public/fonts/ and distributed under the SIL Open Font License, version 1.1. The complete license and source copyright notice are in LICENSES/Cairo-OFL.txt.

## Browser-loaded libraries and services

The hero iframe loads Tailwind Play CDN, Iconify iconify-icon 1.0.7, and GSAP 3.12.2 with ScrollTrigger from their public CDNs. It also requests Google Fonts. The page loads Google Analytics. The exact external hosts and local design assets are listed in ASSET_INVENTORY.md. These are browser runtime dependencies, not npm packages.
