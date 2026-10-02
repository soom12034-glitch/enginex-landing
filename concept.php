<?php
declare(strict_types=1);
$lang = ($_GET['lang'] ?? 'ar') === 'en' ? 'en' : 'ar';
$ar = $lang === 'ar';
$copy = [
  'ar' => [
    'title' => 'ENGINEX ERP | إدارة المقاولات من المناقصة إلى التحصيل',
    'description' => 'منصة ERP عربية تربط المناقصات والمشروعات والمشتريات والمعدات والمستخلصات والمحاسبة في نظام واحد.',
    'nav' => [['المنصة','platform'],['لمن صُممت','roles'],['الأسعار','pricing'],['الأسئلة','faq']],
    'signin' => 'دخول النظام', 'start' => 'ابدأ تجربتك المجانية', 'demo' => 'شاهد المنصة',
    'eyebrow' => 'نظام تشغيل شركات المقاولات والاستشارات الهندسية',
    'h1a' => 'كل مشروع تحت السيطرة.', 'h1b' => 'كل قرار مبني على رقم.',
    'lead' => 'من المناقصة والعقد إلى التنفيذ والمستخلص والتحصيل—ENGINEX يجمع فرقك وعملياتك وماليتك في منصة واحدة صُممت لطريقة عمل المقاولات في العالم العربي.',
    'trialNote' => 'تجربة كاملة لمدة 30 يوماً · دون بطاقة دفع',
    'region' => 'مصمم للعالم العربي', 'regionText' => 'عربي وإنجليزي · عملات متعددة · ضريبة القيمة المضافة · توافق ZATCA',
    'command' => 'مركز قيادة المشروعات', 'live' => 'صورة موحّدة لحظياً',
    'kpis' => [['قيمة الأعمال','24.8M'],['تكلفة فعلية','17.1M'],['هامش متوقع','31%']],
    'pulse' => 'دورة واحدة. بيانات لا تنقطع.',
    'stages' => [['01','المناقصة'],['02','العقد'],['03','التنفيذ'],['04','المستخلص'],['05','التحصيل']],
    'platformK' => 'منصة واحدة للمشروع كله',
    'platformT' => 'المعلومة تتحرك مع المشروع، لا تضيع بين الإدارات.',
    'platformP' => 'اختر مرحلة لترى كيف يحافظ ENGINEX على نفس السياق من أول فرصة وحتى إغلاق الأثر المالي.',
    'stories' => [
      ['tenders','المناقصة والتسعير','ابدأ من عرض منظم وقابل للاعتماد، ثم حوّله إلى مشروع دون إعادة إدخال البيانات.','قبل الترسية'],
      ['claims','المستخلصات والاعتمادات','تابع المستحقات والمراجعات والاعتمادات بمسار واضح يربط التنفيذ بالقيمة.','أثناء التنفيذ'],
      ['equipment','المعدات والصيانة','اعرف أين تعمل المعدات، وما الذي صُرف عليها، ومن المسؤول عن جاهزيتها.','في الموقع'],
      ['reports','الربحية والتقارير','اجمع التكلفة والتقدم والتدفق النقدي في صورة واحدة تصلح لاتخاذ القرار.','في الإدارة'],
      ['zatca','الفوترة والضريبة','أغلق الدورة بفواتير وضريبة وقيود مترابطة، مع جاهزية للعمل وفق متطلبات ZATCA.','في المالية']
    ],
    'outcomeK' => 'ليست وحدات منفصلة', 'outcomeT' => 'منظومة تجعل المشروع مفهوماً قبل أن يصبح متأخراً.',
    'outcomes' => [
      ['01','اكتشف الانحراف مبكراً','قارن ما خُطط له بما حدث فعلياً، قبل أن تتحول المشكلة إلى خسارة.'],
      ['02','اربط الموقع بالمالية','كل حركة تشغيلية تصل إلى أثرها المالي دون ملفات وسيطة أو نسخ متعددة.'],
      ['03','اعمل من مصدر واحد','الإدارة والمشروع والمشتريات والمالية يرون نفس الحقيقة وفق صلاحياتهم.']
    ],
    'fieldK' => 'من المكتب إلى الموقع', 'fieldT' => 'الواجهة تتغير حسب الدور. الحقيقة لا تتغير.',
    'fieldP' => 'مدير المشروع يحتاج تقدماً ومخاطر. المالية تحتاج مستحقات وتكلفة. الإدارة تحتاج ربحية وتدفقاً نقدياً. ENGINEX يعطي كل شخص المشهد الذي يحتاجه داخل نفس المنظومة.',
    'rolesK' => 'مصمم لكل من يصنع القرار', 'rolesT' => 'أربع زوايا للمشروع. رؤية واحدة.',
    'roles' => [
      ['الإدارة التنفيذية','رؤية المحفظة والربحية والمخاطر عبر جميع المشروعات.','الرؤية'],
      ['مدير المشروع','التقدم واليوميات والالتزامات والمستخلصات في سياق واحد.','السيطرة'],
      ['الإدارة المالية','تكاليف وإيرادات وفواتير وضريبة وتقارير قابلة للتتبع.','الدقة'],
      ['الموقع والموارد','معدات وصيانة ومشتريات وحركة تشغيل مرتبطة بالمشروع.','التنفيذ']
    ],
    'arabK' => 'تقنية عالمية. سياق عربي.', 'arabT' => 'بُني لواقع شركات المنطقة، لا تمت ترجمته لها لاحقاً.',
    'arabP' => 'واجهة عربية أصلية إلى جانب الإنجليزية، دعم العمل عبر الفروع والعملات، وفوترة ضريبية مناسبة للسوق السعودي—مع تجربة موحدة أينما كانت مشاريعك.',
    'arabTags' => ['العربية RTL','English LTR','عملات متعددة','فروع متعددة','VAT','ZATCA'],
    'trust' => [['صلاحيات حسب الدور','تحكم واضح في ما يراه وينفذه كل مستخدم.'],['مسارات اعتماد','القرار موثق داخل العملية لا في رسائل منفصلة.'],['بيانات منشأة مستقلة','كل شركة تعمل داخل مساحة بيانات خاصة بها.']],
    'priceK' => 'عرض إطلاق واضح', 'priceT' => 'ابدأ بكامل المنظومة. اختر المدة فقط.',
    'priceP' => 'لا قوائم معقدة ولا وحدات مخفية. الاشتراك يشمل الوظائف الأساسية لتشغيل الشركة حتى 8 مستخدمين.',
    'annual' => 'اشتراك سنة واحدة', 'two' => 'اشتراك سنتين', 'best' => 'أفضل قيمة', 'sar' => 'ريال',
    'saveAnnual' => 'وفّر 350 ريال', 'select' => 'ابدأ الآن',
    'includes' => ['حتى 8 مستخدمين','الإدارة المالية','الفروع والإدارة المركزية','قاعدة بيانات هجينة'],
    'pay' => 'طرق الدفع المتاحة', 'methods' => ['دفع إلكتروني','InstaPay','تحويل بنكي دولي'],
    'faqK' => 'قبل أن تبدأ', 'faqT' => 'إجابات مباشرة.',
    'faqs' => [
      ['هل أحتاج بطاقة دفع للتجربة؟','لا. يمكنك بدء تجربة كاملة لمدة 30 يوماً دون إدخال بطاقة دفع.'],
      ['هل يعمل النظام خارج السعودية؟','نعم. المنصة مصممة لخدمة شركات المقاولات في الدول العربية، مع دعم العربية والإنجليزية والعملات المتعددة. تختلف المتطلبات الضريبية حسب الدولة.'],
      ['هل الأسعار تتغير من لوحة الإدارة؟','نعم. تعرض الصفحة الأسعار مباشرة من واجهة خطط الاشتراك في النظام، وتحتفظ بالقيم الحالية عند تعذر الاتصال.'],
      ['هل يمكن استخدامه من الموقع؟','النظام سحابي ويعمل عبر المتصفح، لذلك يمكن للفرق المصرح لها الوصول من المكتب أو الموقع وفق صلاحياتها.']
    ],
    'finalK' => 'ابدأ من مشروع واحد', 'finalT' => 'ثم شاهد الصورة الكاملة.',
    'finalP' => 'امنح فريقك 30 يوماً داخل نظام واحد، واتخذ قرارك بعد أن ترى عملياتك الحقيقية بوضوح.',
    'talk' => 'تحدث معنا عبر واتساب', 'copyright' => 'منصة ENGINEX ERP لشركات المقاولات والاستشارات الهندسية'
  ],
  'en' => [
    'title' => 'ENGINEX ERP | Construction from tender to collection',
    'description' => 'An Arabic-first ERP connecting tenders, projects, procurement, equipment, claims, and finance in one platform.',
    'nav' => [['Platform','platform'],['Who it serves','roles'],['Pricing','pricing'],['FAQ','faq']],
    'signin' => 'Sign in', 'start' => 'Start your free trial', 'demo' => 'Explore the platform',
    'eyebrow' => 'The operating system for contractors and engineering consultancies',
    'h1a' => 'Every project under control.', 'h1b' => 'Every decision backed by data.',
    'lead' => 'From tender and contract to delivery, claims, and collection—ENGINEX brings teams, operations, and finance into one platform built for how construction works across Arab markets.',
    'trialNote' => 'Full 30-day trial · No payment card required',
    'region' => 'Built for Arab markets', 'regionText' => 'Arabic & English · Multiple currencies · VAT · ZATCA readiness',
    'command' => 'Project command center', 'live' => 'One live operating picture',
    'kpis' => [['Contract value','24.8M'],['Actual cost','17.1M'],['Expected margin','31%']],
    'pulse' => 'One lifecycle. Unbroken data.',
    'stages' => [['01','Tender'],['02','Contract'],['03','Delivery'],['04','Claims'],['05','Collection']],
    'platformK' => 'One platform for the whole project',
    'platformT' => 'Information moves with the project—not between disconnected departments.',
    'platformP' => 'Choose a stage to see how ENGINEX retains the same context from the first opportunity to financial close.',
    'stories' => [
      ['tenders','Tendering & pricing','Start with a structured, approvable bid and turn it into a project without entering the same data again.','Pre-award'],
      ['claims','Claims & approvals','Track entitlements, reviews, and approvals through a clear path connecting delivery to value.','Delivery'],
      ['equipment','Equipment & maintenance','Know where equipment operates, what it costs, and who owns its readiness.','On site'],
      ['reports','Margin & reporting','Bring cost, progress, and cash flow together in one decision-ready picture.','Management'],
      ['zatca','Invoice & tax','Close the loop with connected invoices, tax, and journals, ready for ZATCA requirements.','Finance']
    ],
    'outcomeK' => 'Not disconnected modules', 'outcomeT' => 'A system that makes a project understandable before it becomes late.',
    'outcomes' => [
      ['01','See variance early','Compare plan and actual before an issue turns into lost margin.'],
      ['02','Connect site and finance','Every operating move reaches its financial impact without intermediary files.'],
      ['03','Work from one source','Management, projects, procurement, and finance see the same truth by role.']
    ],
    'fieldK' => 'From office to site', 'fieldT' => 'The view changes by role. The truth does not.',
    'fieldP' => 'Project managers need progress and risk. Finance needs cost and entitlements. Executives need margin and cash flow. ENGINEX gives each role the view it needs in the same system.',
    'rolesK' => 'Built for every decision maker', 'rolesT' => 'Four project perspectives. One operating picture.',
    'roles' => [
      ['Executives','Portfolio, margin, and risk visibility across all projects.','Vision'],
      ['Project managers','Progress, diaries, commitments, and claims in one context.','Control'],
      ['Finance','Costs, revenue, invoices, tax, and traceable reporting.','Accuracy'],
      ['Site & resources','Equipment, maintenance, procurement, and movement tied to project.','Delivery']
    ],
    'arabK' => 'Global technology. Arab context.', 'arabT' => 'Built for the region—not translated for it later.',
    'arabP' => 'Native Arabic alongside English, branch and currency support, and tax invoicing suited to the Saudi market—with one experience wherever your projects operate.',
    'arabTags' => ['Arabic RTL','English LTR','Multi-currency','Multi-branch','VAT','ZATCA'],
    'trust' => [['Role-based access','Clear control over what every user can see and do.'],['Approval workflows','Decisions remain documented inside the process.'],['Isolated company data','Every company operates in its own data workspace.']],
    'priceK' => 'A straightforward launch offer', 'priceT' => 'Start with the full system. Choose only the term.',
    'priceP' => 'No complex menus or hidden modules. Access includes the core functions to operate your company for up to 8 users.',
    'annual' => 'One-year subscription', 'two' => 'Two-year subscription', 'best' => 'Best value', 'sar' => 'SAR',
    'saveAnnual' => 'Save SAR 350', 'select' => 'Start now',
    'includes' => ['Up to 8 users','Financial management','Branches & head office','Hybrid database'],
    'pay' => 'Payment methods', 'methods' => ['Online payment','InstaPay','International transfer'],
    'faqK' => 'Before you start', 'faqT' => 'Direct answers.',
    'faqs' => [
      ['Do I need a card for the trial?','No. Start a complete 30-day trial without entering a payment card.'],
      ['Does it work outside Saudi Arabia?','Yes. The platform is built for contractors across Arab markets, with Arabic, English, and multiple currencies. Tax requirements vary by country.'],
      ['Are prices controlled from admin?','Yes. This page reads prices from the subscription plans API and keeps current fallback values if the connection is unavailable.'],
      ['Can site teams use it?','The platform is cloud-based and works in the browser, so authorized teams can access it from office or site according to their roles.']
    ],
    'finalK' => 'Start with one project', 'finalT' => 'Then see the whole picture.',
    'finalP' => 'Give your team 30 days inside one system and decide after seeing your real operation clearly.',
    'talk' => 'Talk to us on WhatsApp', 'copyright' => 'ENGINEX ERP for contractors and engineering consultancies'
  ]
];
$t = $copy[$lang];
function e(string $value): string { return htmlspecialchars($value, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="<?=e($lang)?>" dir="<?=$ar?'rtl':'ltr'?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?=e($t['title'])?></title>
  <meta name="description" content="<?=e($t['description'])?>">
  <meta name="theme-color" content="#071b2a">
  <link rel="icon" href="assets/favicon.svg">
  <link rel="preload" href="assets/cairo-arabic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/hero-enterprise-v3.jpg" as="image">
  <link rel="stylesheet" href="assets/concept.css">
</head>
<body>
<header class="site-nav" data-nav>
  <a class="brand" href="#top" aria-label="ENGINEX ERP"><img src="assets/brand.svg" alt=""><span>ENGINE<b>X</b><small>ERP</small></span></a>
  <nav><?php foreach ($t['nav'] as $item): ?><a href="#<?=e($item[1])?>"><?=e($item[0])?></a><?php endforeach; ?></nav>
  <div class="nav-actions"><a class="language" href="?lang=<?=$ar?'en':'ar'?>"><?=$ar?'EN':'العربية'?></a><a class="login" href="https://app.enginex2030.com/"><?=e($t['signin'])?></a><a class="button button-small" href="https://app.enginex2030.com/register"><?=e($t['start'])?></a></div>
  <button class="menu" type="button" aria-label="Menu" data-menu><i></i><i></i></button>
</header>

<main id="top">
  <section class="hero">
    <div class="hero-media" aria-hidden="true"></div><div class="hero-grain" aria-hidden="true"></div>
    <div class="hero-copy">
      <p class="overline"><span></span><?=e($t['eyebrow'])?></p>
      <h1><?=e($t['h1a'])?><br><em><?=e($t['h1b'])?></em></h1>
      <p class="hero-lead"><?=e($t['lead'])?></p>
      <div class="hero-actions"><a class="button button-large" href="https://app.enginex2030.com/register"><?=e($t['start'])?><b>↗</b></a><a class="text-link" href="#platform"><?=e($t['demo'])?><span>↓</span></a></div>
      <p class="trial-note"><i>✓</i><?=e($t['trialNote'])?></p>
    </div>
    <aside class="region-note"><b><?=e($t['region'])?></b><span><?=e($t['regionText'])?></span></aside>
    <div class="product-float" aria-label="<?=e($t['command'])?>">
      <div class="product-bar"><div><img src="assets/brand.svg" alt=""><b><?=e($t['command'])?></b></div><span><i></i><?=e($t['live'])?></span></div>
      <div class="product-body"><aside><i></i><i></i><i></i><i></i><i></i></aside><div class="product-main"><div class="metric-row"><?php foreach ($t['kpis'] as $i=>$k): ?><article><span><?=e($k[0])?></span><strong><?=e($k[1])?></strong><small><?=$i===2?'▲ 2.4':'SAR'?></small></article><?php endforeach; ?></div><div class="visual-row"><div class="visual-chart"><span></span><span></span><span></span><span></span><span></span><span></span><b></b></div><div class="visual-ring"><i></i><strong>78%</strong></div></div></div></div>
    </div>
  </section>

  <section class="lifecycle" aria-label="<?=e($t['pulse'])?>"><p><?=e($t['pulse'])?></p><div><?php foreach ($t['stages'] as $s): ?><span><b><?=e($s[0])?></b><?=e($s[1])?></span><?php endforeach; ?></div></section>

  <section class="platform section" id="platform">
    <header class="section-head"><p class="overline dark"><span></span><?=e($t['platformK'])?></p><h2><?=e($t['platformT'])?></h2><p><?=e($t['platformP'])?></p></header>
    <div class="platform-stage">
      <div class="stage-copy" data-story-copy><small><?=e($t['stories'][0][3])?></small><h3><?=e($t['stories'][0][1])?></h3><p><?=e($t['stories'][0][2])?></p><a href="https://app.enginex2030.com/register"><?=e($t['start'])?> <b>↗</b></a></div>
      <div class="stage-screen"><div class="screen-chrome"><i></i><i></i><i></i><span>app.enginex2030.com</span></div><img src="assets/screens/<?=e($t['stories'][0][0])?>.webp" alt="<?=e($t['stories'][0][1])?>" data-story-image></div>
      <div class="stage-tabs" role="tablist"><?php foreach ($t['stories'] as $i=>$story): ?><button type="button" class="<?=$i===0?'active':''?>" data-story="<?=e($story[0])?>" data-kicker="<?=e($story[3])?>" data-title="<?=e($story[1])?>" data-text="<?=e($story[2])?>"><b>0<?=$i+1?></b><span><?=e($story[1])?></span><i></i></button><?php endforeach; ?></div>
    </div>
  </section>

  <section class="outcomes section"><div class="outcome-title"><p class="overline dark"><span></span><?=e($t['outcomeK'])?></p><h2><?=e($t['outcomeT'])?></h2></div><div class="outcome-list"><?php foreach ($t['outcomes'] as $o): ?><article><span><?=e($o[0])?></span><div><h3><?=e($o[1])?></h3><p><?=e($o[2])?></p></div><b>↗</b></article><?php endforeach; ?></div></section>

  <section class="field-story"><div class="field-photo"><img src="assets/project-team.png" alt="<?=e($t['fieldK'])?>" loading="lazy"></div><div class="field-copy"><p class="overline"><span></span><?=e($t['fieldK'])?></p><h2><?=e($t['fieldT'])?></h2><p><?=e($t['fieldP'])?></p><div class="mini-screen"><img src="assets/screens/reports.webp" alt="<?=e($t['stories'][3][1])?>" loading="lazy"></div></div></section>

  <section class="roles section" id="roles"><header class="section-head compact"><p class="overline dark"><span></span><?=e($t['rolesK'])?></p><h2><?=e($t['rolesT'])?></h2></header><div class="role-list"><?php foreach ($t['roles'] as $i=>$r): ?><article><span>0<?=$i+1?></span><h3><?=e($r[0])?></h3><p><?=e($r[1])?></p><b><?=e($r[2])?></b></article><?php endforeach; ?></div></section>

  <section class="arabic-first section"><div class="arabic-copy"><p class="overline"><span></span><?=e($t['arabK'])?></p><h2><?=e($t['arabT'])?></h2><p><?=e($t['arabP'])?></p><div class="arab-tags"><?php foreach ($t['arabTags'] as $tag): ?><span><?=e($tag)?></span><?php endforeach; ?></div></div><div class="arabic-visual"><div class="arch"><img src="assets/hero-construction.png" alt="" loading="lazy"></div><div class="language-card"><span>واجهة العمل</span><strong>العربية</strong><i>↔</i><strong>English</strong></div></div></section>

  <section class="trust section"><div class="trust-line"><?php foreach ($t['trust'] as $i=>$v): ?><article><span>0<?=$i+1?></span><h3><?=e($v[0])?></h3><p><?=e($v[1])?></p></article><?php endforeach; ?></div></section>

  <section class="pricing section" id="pricing"><div class="pricing-intro"><p class="overline dark"><span></span><?=e($t['priceK'])?></p><h2><?=e($t['priceT'])?></h2><p><?=e($t['priceP'])?></p><ul><?php foreach ($t['includes'] as $v): ?><li><i>✓</i><?=e($v)?></li><?php endforeach; ?></ul><div class="payment"><b><?=e($t['pay'])?></b><?php foreach ($t['methods'] as $v): ?><span><?=e($v)?></span><?php endforeach; ?></div></div><div class="price-board"><article><header><span>01</span><h3><?=e($t['annual'])?></h3></header><div class="money"><strong data-price="annual">350</strong><span><?=e($t['sar'])?></span></div><a class="price-action" href="https://app.enginex2030.com/register"><?=e($t['select'])?><b>↗</b></a></article><article class="featured"><div class="best"><?=e($t['best'])?></div><header><span>02</span><h3><?=e($t['two'])?></h3></header><div class="money"><strong data-price="biennial">700</strong><span><?=e($t['sar'])?></span></div><p><?=e($t['saveAnnual'])?></p><a class="price-action" href="https://app.enginex2030.com/register"><?=e($t['select'])?><b>↗</b></a></article></div></section>

  <section class="faq section" id="faq"><header><p class="overline dark"><span></span><?=e($t['faqK'])?></p><h2><?=e($t['faqT'])?></h2></header><div class="faq-list"><?php foreach ($t['faqs'] as $i=>$f): ?><details <?=$i===0?'open':''?>><summary><span>0<?=$i+1?></span><?=e($f[0])?><b>+</b></summary><p><?=e($f[1])?></p></details><?php endforeach; ?></div></section>

  <section class="final-cta"><div><p class="overline"><span></span><?=e($t['finalK'])?></p><h2><?=e($t['finalT'])?></h2><p><?=e($t['finalP'])?></p><div><a class="button button-large" href="https://app.enginex2030.com/register"><?=e($t['start'])?><b>↗</b></a><a class="ghost-button" href="https://wa.me/201147372720"><?=e($t['talk'])?></a></div></div><span class="final-mark">EX</span></section>
</main>

<footer class="site-footer"><a class="brand" href="#top"><img src="assets/brand.svg" alt=""><span>ENGINE<b>X</b><small>ERP</small></span></a><p><?=e($t['copyright'])?></p><div><a href="?lang=<?=$ar?'en':'ar'?>"><?=$ar?'English':'العربية'?></a><a href="https://app.enginex2030.com/"><?=e($t['signin'])?></a></div></footer>
<script src="assets/concept.js" defer></script>
</body>
</html>
