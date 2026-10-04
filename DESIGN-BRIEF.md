# ENGINEX — Redesign brief (preview.php)

**Subject:** ERP for contractors and engineering consultancies in Arab markets.
**Audience:** owners, project managers, finance leads. **Job of the page:** move a visitor from "my projects live in scattered files" to a free 30-day trial.

## Concept: the drawing sheet
Contractors read drawings all day. The page borrows that language: **dimension lines** mark each stage of the project (tender → contract → delivery → claim → collection) and run across the page as the only structural device. No card grids, no tables.

## Narrative (one scroll, one argument)
1. **Hero** – full-bleed site photo under a strong navy wash; huge headline; one large product mockup bleeding out of the hero into the next section.
2. **Problem** – three plain sentences set as large type on paper. No cards.
3. **Flow** – five scenes, one per stage, each a big real screenshot in a browser mockup. Mockups alternate sides and break the page margin.
4. **Control** – permissions, approvals, audit log beside the reports screenshot.
5. **Price** – from `/api/admin/plans`, with fallback 350 / 700 SAR. Two terms as two editorial rows.
6. **Register** – a full orange band, the only one on the page.

## Tokens
- Color: Navy `#061a29`, Deep `#0b2b43`, Tech blue `#087da8`, Warm orange `#ff9f1a`, Paper `#f6f4ee`.
- Type: Cairo only (already shipped, covers Arabic + Latin). Display 800 at clamp(52–104px), body 18px / 1.9. **No letter-spacing on Arabic.**
- Layout: logical properties only, so RTL and LTR share one stylesheet. Text aligns to start; mockups use `direction:ltr` inside.
- Motion: one load-in for the hero. Nothing else moves.

## Rules
Only existing screenshots (tenders, projects, claims, equipment, reports, zatca). **No Quantity Takeoff**, no invented metrics, testimonials or logos. Links: `app.enginex2030.com` (register, login, plans API), `/install.html`.

## Files
`preview.php`, `assets/rx.css`, `assets/rx.js` — independent of `concept.php`, `concept.css`, `refine.css`. `noindex` until approved.
