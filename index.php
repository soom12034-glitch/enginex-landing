<?php
declare(strict_types=1);

$language = isset($_GET['lang']) && $_GET['lang'] === 'en' ? 'en' : 'ar';
$isArabic = $language === 'ar';

$copy = [
    'ar' => [
        'title' => 'ENGINEX ERP | نظام متكامل لشركات المقاولات والاستشارات الهندسية',
        'description' => 'منصة ERP سحابية ثنائية اللغة لشركات المقاولات والمكاتب الهندسية في جميع الدول العربية.',
        'brand_sub' => 'منصة الأعمال الهندسية',
        'nav_features' => 'المزايا', 'nav_workflow' => 'دورة العمل', 'nav_platform' => 'المنصة', 'nav_pricing' => 'الأسعار', 'nav_faq' => 'الأسئلة',
        'start' => 'ابدأ تجربتك مجاناً', 'login' => 'تسجيل الدخول',
        'eyebrow' => 'نظام ERP سحابي للمقاولات والاستشارات الهندسية',
        'hero_title_1' => 'إدارة هندسية متكاملة.', 'hero_title_2' => 'وربحية واضحة لكل مشروع.',
        'hero_text' => 'من المناقصة وحصر الكميات إلى التنفيذ والمستخلصات والمحاسبة—يجمع ENGINEX فرقك وبياناتك وقراراتك في نظام واحد يعمل في جميع الدول العربية.',
        'watch' => 'اكتشف المنصة',
        'no_card' => 'دون بطاقة دفع', 'trial' => 'تجربة كاملة 30 يوماً', 'bilingual' => 'عربي وإنجليزي',
        'stat_modules' => 'وحدة مترابطة', 'stat_trial' => 'يوماً تجربة مجانية', 'stat_cloud' => 'وصول سحابي آمن', 'stat_region' => 'مصمم للمنطقة العربية',
        'problem_kicker' => 'صورة واحدة للحقيقة', 'problem_title' => 'توقف عن إدارة المشروع بين ملفات ورسائل متفرقة.',
        'problem_text' => 'كل عملية في ENGINEX تكمل العملية التالية، لتعرف التكلفة الفعلية والتقدم والمستحقات دون إعادة إدخال البيانات.',
        'problems' => [
            ['المشروعات والمناقصات', 'تسعير، حصر كميات، عقود ومراحل تنفيذ مترابطة.'],
            ['المستخلصات والتكلفة', 'قارن المنفذ بالميزانية واكتشف الانحراف مبكراً.'],
            ['المحاسبة والضرائب', 'قيود وفواتير وضرائب مرتبطة بمصدر العملية.'],
            ['المعدات والصيانة', 'تابع الأصل والتشغيل والصيانة وتكلفتها.'],
        ],
        'flow_kicker' => 'دورة عمل قابلة للتتبع', 'flow_title' => 'من أول عرض سعر إلى آخر قيد محاسبي.',
        'flow_text' => 'تنتقل البيانات تلقائياً بين المراحل، مع الحفاظ على المرجع والمسؤول والأثر المالي.',
        'steps' => [
            ['01', 'المناقصة', 'حصر البنود والكميات والتكلفة وسعر العرض.'],
            ['02', 'العقد والميزانية', 'اعتماد القيمة وخطة المشروع ومراكز التكلفة.'],
            ['03', 'التنفيذ والمستخلص', 'متابعة المواد والمعدات والتقدم والمستحقات.'],
            ['04', 'المحاسبة والربحية', 'قيود قابلة للتتبع وهامش ربح واضح لكل مشروع.'],
        ],
        'platform_kicker' => 'صُمم لفريقك بالكامل', 'platform_title' => 'المكتب والموقع والإدارة المالية على نفس البيانات.',
        'platform_text' => 'واجهة بسيطة لكل دور، وصلاحيات دقيقة لكل مستخدم، وتحديثات تصل للجميع فوراً.',
        'points' => ['لوحات متابعة للمشروعات والربحية', 'إدارة المواد والمخزون والموردين', 'الموارد البشرية والرواتب', 'صلاحيات واعتمادات وسجل تدقيق', 'الوصول من الويب وويندوز والهاتف'],
        'region_kicker' => 'منصة عربية بمرونة محلية', 'region_title' => 'يدعم أعمالك في جميع الدول العربية.',
        'region_text' => 'واجهة عربية كاملة واتجاه RTL، مع الإنجليزية، والعملات والضرائب القابلة للتهيئة بما يناسب بلدك. وللمنشآت السعودية تتوفر متطلبات الفوترة والجاهزية لـZATCA.',
        'region_items' => [['RTL', 'عربية كاملة', 'تجربة استخدام أصلية وليست ترجمة شكلية.'], ['FX', 'عملات متعددة', 'تهيئة العملة والتقارير حسب أعمال المنشأة.'], ['VAT', 'ضرائب مرنة', 'إعداد الضريبة والفواتير وفق السوق المحلي.'], ['ZATCA', 'جاهزية السعودية', 'دعم متطلبات الفوترة الإلكترونية للسوق السعودي.']],
        'pricing_kicker' => 'عرض لفترة محدودة', 'pricing_title' => 'المنظومة الهندسية المتكاملة بسعر إطلاق خاص.',
        'pricing_text' => 'وصول كامل إلى المنصة طوال مدة الاشتراك، مع تجربة مجانية لمدة 30 يوماً ودون بطاقة دفع.',
        'annual' => 'اشتراك سنة واحدة', 'biennial' => 'اشتراك سنتين', 'sar' => 'ريال', 'save350' => 'وفر 350 ريال', 'save700' => 'وفر 700 ريال', 'best' => 'الأكثر طلباً', 'choose' => 'اختر هذا العرض',
        'offer_alt' => 'عرض ENGINEX ERP للاشتراك السنوي واشتراك السنتين',
        'faq_kicker' => 'قبل أن تبدأ', 'faq_title' => 'إجابات سريعة عن ENGINEX.',
        'faqs' => [
            ['هل تعمل المنصة في بلدي؟', 'نعم. صُممت ENGINEX لخدمة شركات المقاولات والاستشارات الهندسية في جميع الدول العربية، مع إعدادات مرنة للعملة والضرائب.'],
            ['هل تدعم العربية والإنجليزية؟', 'نعم. تدعم الواجهة اللغتين مع اتجاه RTL كامل للعربية.'],
            ['هل أحتاج بطاقة دفع للتجربة؟', 'لا. يمكنك بدء تجربة كاملة لمدة 30 يوماً دون بطاقة دفع.'],
            ['هل تعمل على الهاتف؟', 'نعم. يمكنك الوصول من المتصفح وويندوز والهاتف وفق صلاحيات المستخدم.'],
        ],
        'cta_kicker' => 'ابدأ من مشروع واحد', 'cta_title' => 'حوّل المتابعة اليومية إلى قرار مالي يمكنك الوثوق به.',
        'cta_text' => 'أنشئ مساحة عملك، ادع فريقك، وابدأ تجربة ENGINEX الكاملة لمدة 30 يوماً.',
        'whatsapp' => 'تحدث معنا على واتساب', 'rights' => 'جميع الحقوق محفوظة.', 'made_for' => 'منصة سحابية لفرق المقاولات والهندسة في العالم العربي.',
    ],
    'en' => [
        'title' => 'ENGINEX ERP | Integrated ERP for contractors and engineering firms',
        'description' => 'A bilingual cloud ERP platform for contractors and engineering consultancies across the Arab world.',
        'brand_sub' => 'Engineering business platform',
        'nav_features' => 'Features', 'nav_workflow' => 'Workflow', 'nav_platform' => 'Platform', 'nav_pricing' => 'Pricing', 'nav_faq' => 'FAQ',
        'start' => 'Start your free trial', 'login' => 'Sign in',
        'eyebrow' => 'Cloud ERP for contractors and engineering consultants',
        'hero_title_1' => 'Integrated engineering operations.', 'hero_title_2' => 'Clear margin on every project.',
        'hero_text' => 'From tendering and quantity takeoff to execution, certificates, and accounting—ENGINEX brings your teams, data, and decisions into one system built for every Arab market.',
        'watch' => 'Explore the platform',
        'no_card' => 'No payment card', 'trial' => 'Full 30-day trial', 'bilingual' => 'Arabic and English',
        'stat_modules' => 'connected modules', 'stat_trial' => 'days free trial', 'stat_cloud' => 'secure cloud access', 'stat_region' => 'built for Arab markets',
        'problem_kicker' => 'One source of truth', 'problem_title' => 'Stop managing projects across scattered files and messages.',
        'problem_text' => 'Every ENGINEX operation feeds the next, so actual cost, progress, and receivables stay visible without duplicate data entry.',
        'problems' => [
            ['Projects & tenders', 'Pricing, quantity takeoff, contracts, and delivery phases in one flow.'],
            ['Certificates & cost', 'Compare actuals with budget and catch variance early.'],
            ['Accounting & tax', 'Entries, invoices, and taxes linked to their operating source.'],
            ['Equipment & maintenance', 'Track assets, utilization, service, and cost.'],
        ],
        'flow_kicker' => 'A traceable workflow', 'flow_title' => 'From the first proposal to the final journal entry.',
        'flow_text' => 'Data moves between stages while preserving its reference, owner, status, and financial impact.',
        'steps' => [
            ['01', 'Tender', 'Build items, quantities, cost, and proposal price.'],
            ['02', 'Contract & budget', 'Approve value, project plan, and cost centers.'],
            ['03', 'Delivery & certificates', 'Track materials, equipment, progress, and receivables.'],
            ['04', 'Accounting & margin', 'Traceable entries and a clear margin for every project.'],
        ],
        'platform_kicker' => 'Designed for the whole team', 'platform_title' => 'Office, site, and finance working from the same data.',
        'platform_text' => 'A focused experience for every role, precise access control, and updates shared with everyone immediately.',
        'points' => ['Project and margin dashboards', 'Materials, inventory, and suppliers', 'HR and payroll', 'Roles, approvals, and audit trail', 'Access from web, Windows, and mobile'],
        'region_kicker' => 'Arabic-first, locally flexible', 'region_title' => 'Built to support every Arab market.',
        'region_text' => 'Native Arabic RTL plus English, with configurable currencies and taxes for your country. Saudi businesses also get electronic invoicing and ZATCA readiness.',
        'region_items' => [['RTL', 'Native Arabic', 'A genuine Arabic experience—not a cosmetic translation.'], ['FX', 'Multiple currencies', 'Configure currency and reporting around your business.'], ['VAT', 'Flexible tax', 'Set tax and invoice rules for your local market.'], ['ZATCA', 'Saudi readiness', 'Electronic invoicing support for the Saudi market.']],
        'pricing_kicker' => 'Limited-time offer', 'pricing_title' => 'The complete engineering system at a special launch price.',
        'pricing_text' => 'Full access for your selected subscription term, plus a complete 30-day trial with no payment card.',
        'annual' => 'One-year subscription', 'biennial' => 'Two-year subscription', 'sar' => 'SAR', 'save350' => 'Save SAR 350', 'save700' => 'Save SAR 700', 'best' => 'Most popular', 'choose' => 'Choose this offer',
        'offer_alt' => 'ENGINEX ERP annual and two-year subscription offer',
        'faq_kicker' => 'Before you start', 'faq_title' => 'Quick answers about ENGINEX.',
        'faqs' => [
            ['Will the platform work in my country?', 'Yes. ENGINEX serves contractors and engineering consultancies across all Arab countries, with flexible currency and tax settings.'],
            ['Does it support Arabic and English?', 'Yes. The interface supports both languages with full RTL for Arabic.'],
            ['Do I need a payment card for the trial?', 'No. Start the complete 30-day trial without a payment card.'],
            ['Does it work on mobile?', 'Yes. Access ENGINEX from the browser, Windows, and mobile based on user permissions.'],
        ],
        'cta_kicker' => 'Start with one project', 'cta_title' => 'Turn daily follow-up into financial decisions you can trust.',
        'cta_text' => 'Create your workspace, invite your team, and start a complete 30-day ENGINEX trial.',
        'whatsapp' => 'Talk to us on WhatsApp', 'rights' => 'All rights reserved.', 'made_for' => 'A cloud platform for contracting and engineering teams across the Arab world.',
    ],
];

$t = $copy[$language];
function esc(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
function langUrl(string $lang, string $anchor = ''): string { return '?lang=' . $lang . $anchor; }
?>
<!doctype html>
<html lang="<?= esc($language) ?>" dir="<?= $isArabic ? 'rtl' : 'ltr' ?>" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= esc($t['description']) ?>">
    <meta name="theme-color" content="#06162d">
    <title><?= esc($t['title']) ?></title>
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    <link rel="preload" as="image" href="assets/hero-construction.png" fetchpriority="high">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<a class="skip" href="#main"><?= $isArabic ? 'انتقل إلى المحتوى' : 'Skip to content' ?></a>

<header class="site-header" id="top">
    <div class="container nav-wrap">
        <a class="brand" href="<?= esc(langUrl($language)) ?>" aria-label="ENGINEX ERP">
            <span class="brand-mark" aria-hidden="true"><i></i><b>X</b></span>
            <span><strong>ENGINE<span>X</span></strong><small><?= esc($t['brand_sub']) ?></small></span>
        </a>
        <nav class="desktop-nav" aria-label="<?= $isArabic ? 'التنقل الرئيسي' : 'Main navigation' ?>">
            <a href="#features"><?= esc($t['nav_features']) ?></a>
            <a href="#workflow"><?= esc($t['nav_workflow']) ?></a>
            <a href="#platform"><?= esc($t['nav_platform']) ?></a>
            <a href="#pricing"><?= esc($t['nav_pricing']) ?></a>
            <a href="#faq"><?= esc($t['nav_faq']) ?></a>
        </nav>
        <div class="nav-actions">
            <button class="icon-btn" id="themeToggle" type="button" aria-label="<?= $isArabic ? 'تبديل المظهر' : 'Toggle theme' ?>">◐</button>
            <a class="lang-btn" href="<?= esc(langUrl($isArabic ? 'en' : 'ar')) ?>" lang="<?= $isArabic ? 'en' : 'ar' ?>"><?= $isArabic ? 'EN' : 'عربي' ?></a>
            <a class="button button-small" href="https://app.enginex2030.com/register"><?= esc($t['start']) ?></a>
            <button class="icon-btn menu-btn" id="menuToggle" type="button" aria-expanded="false" aria-controls="mobileMenu">☰</button>
        </div>
    </div>
    <nav class="mobile-menu" id="mobileMenu">
        <a href="#features"><?= esc($t['nav_features']) ?></a><a href="#workflow"><?= esc($t['nav_workflow']) ?></a><a href="#platform"><?= esc($t['nav_platform']) ?></a><a href="#pricing"><?= esc($t['nav_pricing']) ?></a><a href="#faq"><?= esc($t['nav_faq']) ?></a>
    </nav>
</header>

<main id="main">
    <section class="hero">
        <img class="hero-image" src="assets/hero-construction.png" width="1792" height="1024" alt="<?= $isArabic ? 'مهندس يتابع مشروع إنشاءات باستخدام جهاز لوحي' : 'Engineer managing a construction project on a tablet' ?>">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <p class="kicker light"><span></span><?= esc($t['eyebrow']) ?></p>
            <h1><?= esc($t['hero_title_1']) ?><br><em><?= esc($t['hero_title_2']) ?></em></h1>
            <p class="hero-lead"><?= esc($t['hero_text']) ?></p>
            <div class="hero-actions">
                <a class="button" href="https://app.enginex2030.com/register"><?= esc($t['start']) ?></a>
                <a class="button button-ghost" href="#platform"><?= esc($t['watch']) ?></a>
            </div>
            <div class="trust-row"><span>✓ <?= esc($t['no_card']) ?></span><span>✓ <?= esc($t['trial']) ?></span><span>✓ <?= esc($t['bilingual']) ?></span></div>
        </div>
    </section>

    <section class="stats" aria-label="<?= $isArabic ? 'معلومات المنصة' : 'Platform facts' ?>">
        <div class="container stats-grid">
            <div><strong>15+</strong><span><?= esc($t['stat_modules']) ?></span></div>
            <div><strong>30</strong><span><?= esc($t['stat_trial']) ?></span></div>
            <div><strong>24/7</strong><span><?= esc($t['stat_cloud']) ?></span></div>
            <div><strong>MENA</strong><span><?= esc($t['stat_region']) ?></span></div>
        </div>
    </section>

    <section class="section" id="features">
        <div class="container">
            <header class="section-head reveal"><p class="kicker"><span></span><?= esc($t['problem_kicker']) ?></p><h2><?= esc($t['problem_title']) ?></h2><p><?= esc($t['problem_text']) ?></p></header>
            <div class="feature-grid">
                <?php foreach ($t['problems'] as $index => $item): ?>
                <article class="feature-card reveal"><span class="card-number">0<?= $index + 1 ?></span><h3><?= esc($item[0]) ?></h3><p><?= esc($item[1]) ?></p><i aria-hidden="true">↗</i></article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section-dark" id="workflow">
        <div class="container">
            <header class="section-head reveal"><p class="kicker light"><span></span><?= esc($t['flow_kicker']) ?></p><h2><?= esc($t['flow_title']) ?></h2><p><?= esc($t['flow_text']) ?></p></header>
            <div class="workflow-grid">
                <?php foreach ($t['steps'] as $step): ?>
                <article class="workflow-card reveal"><strong><?= esc($step[0]) ?></strong><div><h3><?= esc($step[1]) ?></h3><p><?= esc($step[2]) ?></p></div></article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="platform">
        <div class="container split">
            <figure class="media-card reveal"><img src="assets/project-team.png" width="1792" height="1024" loading="lazy" alt="<?= $isArabic ? 'فريق هندسي يراجع الجدول الزمني وتكلفة المشروع' : 'Engineering team reviewing project schedule and cost' ?>"><figcaption><strong>15+</strong><span><?= esc($t['stat_modules']) ?></span></figcaption></figure>
            <div class="split-copy reveal">
                <p class="kicker"><span></span><?= esc($t['platform_kicker']) ?></p><h2><?= esc($t['platform_title']) ?></h2><p><?= esc($t['platform_text']) ?></p>
                <ul class="check-list"><?php foreach ($t['points'] as $point): ?><li><span>✓</span><?= esc($point) ?></li><?php endforeach; ?></ul>
                <a class="text-link" href="https://app.enginex2030.com/register"><?= esc($t['start']) ?> <b aria-hidden="true">↗</b></a>
            </div>
        </div>
    </section>

    <section class="section region">
        <div class="container">
            <header class="section-head center reveal"><p class="kicker"><span></span><?= esc($t['region_kicker']) ?></p><h2><?= esc($t['region_title']) ?></h2><p><?= esc($t['region_text']) ?></p></header>
            <div class="region-grid">
                <?php foreach ($t['region_items'] as $item): ?><article class="region-card reveal"><strong><?= esc($item[0]) ?></strong><h3><?= esc($item[1]) ?></h3><p><?= esc($item[2]) ?></p></article><?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section pricing" id="pricing">
        <div class="container">
            <header class="section-head center reveal"><p class="kicker"><span></span><?= esc($t['pricing_kicker']) ?></p><h2><?= esc($t['pricing_title']) ?></h2><p><?= esc($t['pricing_text']) ?></p></header>
            <div class="pricing-layout">
                <figure class="offer-art reveal"><img src="assets/pricing-offer.png" width="945" height="1679" loading="lazy" alt="<?= esc($t['offer_alt']) ?>"></figure>
                <div class="price-cards">
                    <article class="price-card featured reveal"><span class="badge"><?= esc($t['best']) ?></span><p><?= esc($t['annual']) ?></p><div class="old-price"><del>700</del> <?= esc($t['sar']) ?></div><div class="price"><strong>350</strong><span><?= esc($t['sar']) ?></span></div><small><?= esc($t['save350']) ?></small><a class="button" href="https://app.enginex2030.com/register"><?= esc($t['choose']) ?></a></article>
                    <article class="price-card reveal"><p><?= esc($t['biennial']) ?></p><div class="old-price"><del>1400</del> <?= esc($t['sar']) ?></div><div class="price"><strong>700</strong><span><?= esc($t['sar']) ?></span></div><small><?= esc($t['save700']) ?></small><a class="button button-dark" href="https://app.enginex2030.com/register"><?= esc($t['choose']) ?></a></article>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="faq">
        <div class="container faq-layout">
            <header class="section-head reveal"><p class="kicker"><span></span><?= esc($t['faq_kicker']) ?></p><h2><?= esc($t['faq_title']) ?></h2></header>
            <div class="faq-list reveal"><?php foreach ($t['faqs'] as $index => $faq): ?><details <?= $index === 0 ? 'open' : '' ?>><summary><?= esc($faq[0]) ?><i>+</i></summary><p><?= esc($faq[1]) ?></p></details><?php endforeach; ?></div>
        </div>
    </section>

    <section class="cta">
        <div class="container cta-inner reveal"><div><p class="kicker light"><span></span><?= esc($t['cta_kicker']) ?></p><h2><?= esc($t['cta_title']) ?></h2><p><?= esc($t['cta_text']) ?></p></div><div class="cta-actions"><a class="button button-white" href="https://app.enginex2030.com/register"><?= esc($t['start']) ?></a><a class="button button-ghost" href="https://wa.me/201147372720" target="_blank" rel="noopener noreferrer"><?= esc($t['whatsapp']) ?></a></div></div>
    </section>
</main>

<footer class="footer">
    <div class="container footer-grid"><div class="footer-brand"><a class="brand" href="#top"><span class="brand-mark"><i></i><b>X</b></span><span><strong>ENGINE<span>X</span></strong></span></a><p><?= esc($t['made_for']) ?></p></div><div><h3><?= esc($t['nav_features']) ?></h3><a href="#workflow"><?= esc($t['nav_workflow']) ?></a><a href="#platform"><?= esc($t['nav_platform']) ?></a><a href="#pricing"><?= esc($t['nav_pricing']) ?></a></div><div><h3><?= $isArabic ? 'تواصل' : 'Contact' ?></h3><a href="mailto:support@enginex2030.com">support@enginex2030.com</a><a href="https://wa.me/201147372720">WhatsApp</a><a href="https://app.enginex2030.com/register"><?= esc($t['start']) ?></a></div></div>
    <div class="container copyright">© <?= date('Y') ?> ENGINEX ERP · <?= esc($t['rights']) ?></div>
</footer>

<script src="assets/app.js" defer></script>
</body>
</html>
