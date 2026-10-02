<?php
declare(strict_types=1);
$lang = ($_GET['lang'] ?? 'ar') === 'en' ? 'en' : 'ar';
$ar = $lang === 'ar';

$c = [
'ar' => [
'title'=>'ENGINEX ERP | منصة تشغيل وربحية شركات المقاولات',
'desc'=>'نظام ERP هندسي سحابي يربط المناقصات وحصر الكميات والمشروعات والمستخلصات والمحاسبة في منصة واحدة لجميع الدول العربية.',
'nav'=>[['المنظومة','system'],['داخل النظام','product'],['الاشتراك والدفع','pricing'],['الأسئلة','faq']],
'signin'=>'دخول المنصة','start'=>'ابدأ 30 يوماً مجاناً',
'notice'=>'عرض الإطلاق متاح الآن — اشتراك سنوي يبدأ من 350 ريال',
'eyebrow'=>'نظام تشغيل هندسي ومالي واحد','hero1'=>'اعرف ربحية مشروعك','hero2'=>'قبل أن يفوت وقت القرار.',
'heroText'=>'من تسعير المناقصة وحصر الكميات، إلى العقد والتنفيذ والمستخلص والقيد المحاسبي. ENGINEX يحوّل دورة المشروع كاملة إلى بيانات مترابطة وقرار واضح.',
'explore'=>'شاهد النظام من الداخل','nocard'=>'لا تتطلب التجربة بطاقة دفع','actual'=>'واجهة المشروعات الفعلية',
'proof'=>[['01','المناقصة وحصر الكميات'],['02','العقد والميزانية'],['03','التنفيذ والمستخلصات'],['04','المحاسبة والربحية']],
'sysK'=>'عمود فقري واحد للمشروع','sysT'=>'كل رقم يصل إلى مكانه. مرة واحدة.',
'sysP'=>'لا تنسخ البيانات بين ملفات منفصلة. كل خطوة تحفظ مصدرها ومسؤولها وأثرها المالي، لتعرف أين يقف المشروع فعلاً.',
'outcomes'=>[
['المناقصة تصبح مشروعاً','حوّل بنود العرض والكميات إلى عقد وميزانية دون إعادة إدخال.'],
['التنفيذ يظهر فوراً','اربط المواد والمعدات والمشتريات ونسب الإنجاز بمركز التكلفة الصحيح.'],
['المستخلص يصنع أثراً مالياً','المراجعة والاعتماد يحافظان على المسار حتى الأثر المحاسبي.'],
['الربحية ليست تخميناً','قارن BOQ والميزانية والتكلفة الفعلية من شاشة قرار واحدة.']],
'prodK'=>'منتج حقيقي، لا صور دعائية','prodT'=>'شاهد كيف يعمل فريقك داخل ENGINEX.','prodP'=>'لقطات مباشرة من النظام. اختر وحدة لتشاهد واجهة العمل ومسارها.',
'tabs'=>[
['projects','المشروعات','مركز التجميع الذي يربط العقد والميزانية والكميات واليوميات.'],
['qto','حصر الكميات','توثيق القياسات والأبعاد وتحويلها إلى جداول كميات قابلة للمراجعة.'],
['claims','المستخلصات','مراجعة واعتماد المستحقات قبل إنشاء الأثر المحاسبي.'],
['reports','التقارير','تحليل موحّد للمشروعات والميزانيات والمشتريات والقيمة المكتسبة.'],
['zatca','الفوترة والضريبة','إدارة الفواتير الضريبية ومتطلبات السوق السعودي.']],
'archK'=>'منظومة تغطي التشغيل بالكامل','archT'=>'ما يحتاجه المقاول. وما تحتاجه الإدارة.',
'groups'=>[
['المشروعات والتسليم',['المناقصات والتسعير','حصر الكميات وBOQ','العقود والمستخلصات','اليوميات ونسب الإنجاز']],
['المال والقرار',['الميزانيات ومراكز التكلفة','المحاسبة والقيود','الرواتب','التقارير ولوحات القيادة']],
['الموارد والتوريد',['المواد والمخزون','المشتريات والموردون','المعدات والتشغيل','الصيانة والخدمات']],
['الحوكمة والامتثال',['الفواتير والضرائب','الصلاحيات والاعتمادات','سجل تدقيق كامل','الفروع والإدارة المركزية']]],
'regK'=>'بُني للعالم العربي','regT'=>'لغة السوق ومرونة كل بلد.',
'regP'=>'واجهة عربية أصلية مع الإنجليزية، وإعدادات مرنة للعملات والضرائب والفروع. وللسوق السعودي، يدعم النظام مسار الفوترة الإلكترونية ومتطلبات ZATCA.',
'regPoints'=>['واجهة RTL عربية كاملة','عملات وضرائب قابلة للتهيئة','فروع وإدارة مركزية','صلاحيات وعزل بيانات وسجل تدقيق'],
'priceK'=>'اشتراك واضح، بلا مفاجآت','priceT'=>'ابدأ بكامل المنظومة لمدة 30 يوماً.','priceP'=>'جرّب أولاً دون بطاقة. بعد ذلك اختر مدة الاشتراك والطريقة الأنسب للدفع.',
'annual'=>'سنة واحدة','biennial'=>'سنتان','currency'=>'ريال','term'=>'لكامل المدة','choice'=>'اختيار مرن',
'features'=>['حتى 8 مستخدمين','الفروع والإدارة المركزية','قاعدة بيانات هجينة','الإدارة المالية مشمولة','إمكانية إضافة فروع'],
'subscribe'=>'أنشئ حسابك واختر الخطة','trial'=>'التجربة الكاملة 30 يوماً · دون بطاقة دفع',
'how'=>'كيف يتم الاشتراك؟','steps'=>[
['1','أنشئ مساحة العمل','سجّل بيانات المنشأة وابدأ التجربة مباشرة.'],
['2','اختر المدة','سنة بـ350 ريال أو سنتان بـ700 ريال.'],
['3','اختر الدفع','دفع إلكتروني آمن، InstaPay أو تحويل بنكي دولي.'],
['4','تفعيل الاشتراك','بعد التحقق من الدفع يُفعّل الاشتراك على حساب المنشأة.']],
'payT'=>'طرق الدفع المتاحة','payP'=>'اختر الطريقة الأنسب لك. تبدأ خطوات الاشتراك من إنشاء الحساب لضمان ربط الدفع بمنشأتك.',
'online'=>'الدفع الإلكتروني','onlineP'=>'انتقل من حسابك إلى صفحة دفع آمنة لإتمام العملية وتتبع حالة الاشتراك.',
'insta'=>'InstaPay — مصر','instaP'=>'رابط دفع مباشر للمستخدمين في مصر.','openInsta'=>'فتح InstaPay',
'bank'=>'تحويل بنكي دولي','bankP'=>'متاح للعملاء من مختلف الدول. استخدم بيانات الحساب أدناه ثم أرسل إثبات التحويل.',
'details'=>'عرض بيانات التحويل','holder'=>'اسم المستفيد','bankName'=>'البنك','account'=>'رقم الحساب','send'=>'إرسال إثبات الدفع عبر واتساب',
'tax'=>'رقم التسجيل الضريبي المصري: 630-910-491',
'faqK'=>'قبل أن تبدأ','faqT'=>'إجابات مباشرة على أسئلة الشراء.',
'faqs'=>[
['هل يعمل ENGINEX خارج السعودية؟','نعم. المنصة موجهة لشركات المقاولات والاستشارات في جميع الدول العربية، مع إعدادات مرنة للعملة والضرائب والفروع.'],
['هل السعر يشمل الوحدات المالية؟','نعم. الخطة الحالية تشمل الإدارة المالية والفروع والإدارة المركزية وحتى 8 مستخدمين، مع إمكانية إضافة فروع حسب الحاجة.'],
['هل أستطيع التجربة قبل الدفع؟','نعم. تحصل على تجربة كاملة لمدة 30 يوماً ولا تحتاج إلى بطاقة دفع لبدئها.'],
['كيف يتم تفعيل الاشتراك؟','أنشئ حساب المنشأة، ثم اختر الخطة وطريقة الدفع. يُربط الدفع بحسابك ويُفعّل الاشتراك بعد التحقق.'],
['هل البيانات والصلاحيات منفصلة بين المنشآت؟','يدعم النظام عزل بيانات المنشآت، وصلاحيات حسب الدور، واعتمادات وسجل تدقيق للعمليات.']],
'ctaT'=>'مشروعك التالي يستحق نظاماً يرى الصورة كاملة.','ctaP'=>'ابدأ التجربة، أدخل مشروعاً واحداً، وشاهد الفرق في وضوح التكلفة والقرار.',
'contact'=>'تحدث مع فريق ENGINEX','footer'=>'منصة تشغيل هندسية ومالية لشركات المقاولات والاستشارات في العالم العربي.','rights'=>'جميع الحقوق محفوظة.'
],
'en' => [
'title'=>'ENGINEX ERP | Operating system for profitable construction',
'desc'=>'A cloud engineering ERP connecting tenders, quantity takeoff, projects, claims and accounting for contractors across Arab markets.',
'nav'=>[['The system','system'],['Inside ENGINEX','product'],['Plans & payment','pricing'],['FAQ','faq']],
'signin'=>'Sign in','start'=>'Start 30 days free',
'notice'=>'Launch offer available now — annual access from SAR 350',
'eyebrow'=>'One engineering and financial operating system','hero1'=>'Know project margin','hero2'=>'while there is still time to act.',
'heroText'=>'From tender pricing and quantity takeoff to contracts, delivery, claims, and the final journal entry. ENGINEX turns the full project cycle into connected data and clear decisions.',
'explore'=>'See the product inside','nocard'=>'No payment card required for the trial','actual'=>'Actual projects workspace',
'proof'=>[['01','Tender & quantity takeoff'],['02','Contract & budget'],['03','Delivery & claims'],['04','Accounting & margin']],
'sysK'=>'One project backbone','sysT'=>'Every number arrives where it belongs. Once.',
'sysP'=>'Stop copying information between disconnected files. Every step retains its source, owner, and financial impact, so you always know where the project stands.',
'outcomes'=>[
['A tender becomes a project','Move bid items and quantities into the contract and budget without re-entry.'],
['Delivery becomes visible','Connect materials, equipment, procurement, and progress to the right cost center.'],
['A claim creates financial impact','Review and approval preserve the trail through to accounting.'],
['Margin is no longer a guess','Compare BOQ, budget, and actual cost from one decision screen.']],
'prodK'=>'A real product, not stock mockups','prodT'=>'See how your team works inside ENGINEX.','prodP'=>'Direct captures from the system. Choose a module to inspect its workspace and flow.',
'tabs'=>[
['projects','Projects','The hub connecting contracts, budgets, quantities, and site diaries.'],
['qto','Quantity takeoff','Document measurements, then turn them into reviewable quantity tables.'],
['claims','Claims','Review and approve entitlements before creating accounting impact.'],
['reports','Analytics','Unified insight across projects, budgets, procurement, and earned value.'],
['zatca','Tax & invoicing','Manage tax invoices and Saudi electronic invoicing requirements.']],
'archK'=>'Full operating coverage','archT'=>'What contractors run. What management needs.',
'groups'=>[
['Projects & delivery',['Tenders and pricing','Quantity takeoff & BOQ','Contracts and claims','Diaries and progress']],
['Finance & decisions',['Budgets and cost centers','Accounting and journals','Payroll','Reports and dashboards']],
['Resources & procurement',['Materials and inventory','Purchasing and suppliers','Equipment and utilization','Maintenance and service']],
['Governance & compliance',['Invoices and tax','Roles and approvals','Complete audit trail','Branches and head office']]],
'regK'=>'Built for Arab markets','regT'=>'Native language. Local flexibility.',
'regP'=>'Native Arabic RTL plus English, with configurable currencies, taxes, and branches. For Saudi Arabia, the platform supports electronic invoicing and ZATCA workflows.',
'regPoints'=>['Complete native Arabic RTL','Configurable currency and tax','Branches and head office','Roles, tenant isolation, and audit trail'],
'priceK'=>'Clear plans, no surprises','priceT'=>'Start with the complete system for 30 days.','priceP'=>'Try it first without a payment card. Then choose your term and preferred payment method.',
'annual'=>'One year','biennial'=>'Two years','currency'=>'SAR','term'=>'for the full term','choice'=>'Flexible choice',
'features'=>['Up to 8 users','Branches and head office','Hybrid database','Finance included','Add branches as needed'],
'subscribe'=>'Create your account & choose','trial'=>'Full 30-day trial · no payment card',
'how'=>'How subscription works','steps'=>[
['1','Create your workspace','Register the company and begin the trial immediately.'],
['2','Choose a term','One year for SAR 350 or two years for SAR 700.'],
['3','Choose payment','Secure online payment, InstaPay, or international bank transfer.'],
['4','Activate','Your company subscription is activated after payment verification.']],
'payT'=>'Available payment methods','payP'=>'Choose what works for you. Subscription starts by creating an account so payment is linked to your company.',
'online'=>'Online payment','onlineP'=>'Continue from your account to a secure checkout and track subscription status.',
'insta'=>'InstaPay — Egypt','instaP'=>'A direct payment link for customers in Egypt.','openInsta'=>'Open InstaPay',
'bank'=>'International bank transfer','bankP'=>'Available across markets. Use the details below, then send your transfer receipt.',
'details'=>'View transfer details','holder'=>'Account holder','bankName'=>'Bank','account'=>'Account number','send'=>'Send payment proof on WhatsApp',
'tax'=>'Egyptian tax registration: 630-910-491',
'faqK'=>'Before you start','faqT'=>'Straight answers to buying questions.',
'faqs'=>[
['Does ENGINEX work outside Saudi Arabia?','Yes. It is designed for contractors and engineering consultancies across Arab countries, with flexible currency, tax, and branch settings.'],
['Does the plan include finance?','Yes. The current plan includes finance, branches and head-office management, and up to 8 users, with more branches available as needed.'],
['Can I try it before paying?','Yes. You receive a complete 30-day trial and do not need a payment card to start.'],
['How is the subscription activated?','Create the company account, select a plan and payment method, and the subscription is linked and activated after verification.'],
['Are company data and permissions isolated?','The platform supports tenant data isolation, role-based permissions, approvals, and an operational audit trail.']],
'ctaT'=>'Your next project deserves a system that sees the whole picture.','ctaP'=>'Start the trial, enter one project, and experience clearer cost and decision-making.',
'contact'=>'Talk to the ENGINEX team','footer'=>'An engineering and financial operating platform for contractors and consultants across the Arab world.','rights'=>'All rights reserved.'
]];
$t = $c[$lang];
function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="<?= e($lang) ?>" dir="<?= $ar ? 'rtl' : 'ltr' ?>">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="<?= e($t['desc']) ?>"><meta name="theme-color" content="#071525">
<meta property="og:title" content="<?= e($t['title']) ?>"><meta property="og:description" content="<?= e($t['desc']) ?>">
<title><?= e($t['title']) ?></title><link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
<link rel="preload" href="assets/screens/projects.webp" as="image" fetchpriority="high"><link rel="stylesheet" href="assets/style.css">
</head>
<body>
<a class="skip" href="#main"><?= $ar ? 'انتقل للمحتوى' : 'Skip to content' ?></a>
<div class="announcement"><a href="#pricing"><?= e($t['notice']) ?> <span>↗</span></a></div>
<header class="site-header" id="top"><div class="container nav-shell">
<a class="brand" href="?lang=<?= e($lang) ?>" aria-label="ENGINEX ERP"><img src="assets/brand.svg" alt=""><span>ENGINE<b>X</b><small>ERP</small></span></a>
<nav class="desktop-nav"><?php foreach($t['nav'] as $n): ?><a href="#<?= e($n[1]) ?>"><?= e($n[0]) ?></a><?php endforeach; ?></nav>
<div class="nav-actions"><a class="lang" href="?lang=<?= $ar?'en':'ar' ?>"><?= $ar?'EN':'عربي' ?></a><a class="signin" href="https://app.enginex2030.com/"><?= e($t['signin']) ?></a><a class="button compact" href="https://app.enginex2030.com/register"><?= e($t['start']) ?></a><button class="menu-toggle" aria-controls="mobileNav" aria-expanded="false"><span></span><span></span></button></div>
</div><nav class="mobile-nav" id="mobileNav"><?php foreach($t['nav'] as $n): ?><a href="#<?= e($n[1]) ?>"><?= e($n[0]) ?></a><?php endforeach; ?><a href="https://app.enginex2030.com/register"><?= e($t['start']) ?></a></nav></header>

<main id="main">
<section class="hero"><div class="blueprint"></div><div class="container hero-grid">
<div class="hero-copy reveal"><p class="eyebrow"><span></span><?= e($t['eyebrow']) ?></p><h1><?= e($t['hero1']) ?><br><em><?= e($t['hero2']) ?></em></h1><p class="hero-lead"><?= e($t['heroText']) ?></p><div class="hero-actions"><a class="button" href="https://app.enginex2030.com/register"><?= e($t['start']) ?></a><a class="text-action" href="#product"><?= e($t['explore']) ?> <b>↓</b></a></div><p class="trial-note"><span>✓</span><?= e($t['nocard']) ?></p></div>
<div class="product-stage reveal"><div class="stage-orbit"></div><figure class="product-window"><div class="window-bar"><i></i><i></i><i></i><span>cloud.enginex2030.com</span></div><img src="assets/screens/projects.webp" width="1280" height="720" alt="<?= e($t['actual']) ?>"><figcaption><span class="pulse"></span><?= e($t['actual']) ?></figcaption></figure><div class="float-stat stat-a"><strong>15+</strong><span><?= $ar?'وحدة تشغيلية':'operating modules' ?></span></div><div class="float-stat stat-b"><strong>AR / EN</strong><span><?= $ar?'ثنائي اللغة':'bilingual' ?></span></div></div>
</div><div class="container lifecycle"><?php foreach($t['proof'] as $i=>$p): ?><div><b><?= e($p[0]) ?></b><span><?= e($p[1]) ?></span></div><?php if($i<3): ?><i>→</i><?php endif; ?><?php endforeach; ?></div></section>

<section class="section system" id="system"><div class="container"><header class="section-head reveal"><p class="eyebrow dark"><span></span><?= e($t['sysK']) ?></p><h2><?= e($t['sysT']) ?></h2><p><?= e($t['sysP']) ?></p></header><div class="outcome-grid"><?php foreach($t['outcomes'] as $i=>$o): ?><article class="outcome reveal"><div class="outcome-index">0<?= $i+1 ?></div><div><h3><?= e($o[0]) ?></h3><p><?= e($o[1]) ?></p></div></article><?php endforeach; ?></div></div></section>

<section class="section product" id="product"><div class="container"><header class="section-head light reveal"><p class="eyebrow"><span></span><?= e($t['prodK']) ?></p><h2><?= e($t['prodT']) ?></h2><p><?= e($t['prodP']) ?></p></header><div class="product-demo reveal"><div class="demo-tabs" role="tablist"><?php foreach($t['tabs'] as $i=>$tab): ?><button role="tab" aria-selected="<?= $i===0?'true':'false' ?>" data-screen="<?= e($tab[0]) ?>" data-copy="<?= e($tab[2]) ?>"><?= e($tab[1]) ?></button><?php endforeach; ?></div><div class="demo-frame"><img id="demoImage" src="assets/screens/projects.webp" width="1280" height="720" loading="lazy" alt="<?= e($t['tabs'][0][1]) ?>"><div class="demo-caption"><span>ENGINEX / <b id="demoTitle"><?= e($t['tabs'][0][1]) ?></b></span><p id="demoCopy"><?= e($t['tabs'][0][2]) ?></p></div></div></div></div></section>

<section class="section architecture"><div class="container"><header class="section-head reveal"><p class="eyebrow dark"><span></span><?= e($t['archK']) ?></p><h2><?= e($t['archT']) ?></h2></header><div class="module-matrix"><?php foreach($t['groups'] as $i=>$g): ?><article class="module-group reveal"><span>0<?= $i+1 ?></span><h3><?= e($g[0]) ?></h3><ul><?php foreach($g[1] as $m): ?><li><?= e($m) ?></li><?php endforeach; ?></ul></article><?php endforeach; ?></div></div></section>

<section class="region-band"><div class="container region-grid"><div class="region-copy reveal"><p class="eyebrow"><span></span><?= e($t['regK']) ?></p><h2><?= e($t['regT']) ?></h2><p><?= e($t['regP']) ?></p><ul><?php foreach($t['regPoints'] as $p): ?><li><span>✓</span><?= e($p) ?></li><?php endforeach; ?></ul></div><figure class="region-screen reveal"><img src="assets/screens/zatca.webp" width="1280" height="720" loading="lazy" alt="ZATCA"><figcaption><strong>ZATCA</strong><span><?= $ar?'جاهزية الفوترة الإلكترونية للسوق السعودي':'Saudi electronic invoicing readiness' ?></span></figcaption></figure></div></section>

<section class="section pricing" id="pricing"><div class="container"><header class="section-head center reveal"><p class="eyebrow dark"><span></span><?= e($t['priceK']) ?></p><h2><?= e($t['priceT']) ?></h2><p><?= e($t['priceP']) ?></p></header>
<div class="price-layout"><?php foreach([['annual','350',$t['annual'],false],['biennial','700',$t['biennial'],true]] as $plan): ?><article class="plan <?= $plan[3]?'plan-dark':'' ?> reveal"><div class="plan-top"><div><span class="plan-label">ENGINEX ERP</span><h3><?= e($plan[2]) ?></h3></div><?= $plan[3]?'<span class="two-years">02</span>':'<span class="plan-badge">'.e($t['choice']).'</span>' ?></div><div class="amount"><strong data-price="<?= $plan[0] ?>"><?= $plan[1] ?></strong><span><?= e($t['currency']) ?><small><?= e($t['term']) ?></small></span></div><ul><?php foreach($t['features'] as $f): ?><li><span>✓</span><?= e($f) ?></li><?php endforeach; ?></ul><a class="button full <?= $plan[3]?'orange':'' ?>" href="https://app.enginex2030.com/register"><?= e($t['subscribe']) ?></a><p class="microcopy"><?= e($t['trial']) ?></p></article><?php endforeach; ?></div>
<div class="subscribe-flow reveal"><h3><?= e($t['how']) ?></h3><div class="flow-steps"><?php foreach($t['steps'] as $s): ?><article><b><?= e($s[0]) ?></b><h4><?= e($s[1]) ?></h4><p><?= e($s[2]) ?></p></article><?php endforeach; ?></div></div>
<div class="payments reveal"><header><div><span>PAYMENT</span><h3><?= e($t['payT']) ?></h3></div><p><?= e($t['payP']) ?></p></header><div class="payment-grid">
<article><div class="payment-icon">⌁</div><h4><?= e($t['online']) ?></h4><p><?= e($t['onlineP']) ?></p><a href="https://app.enginex2030.com/register"><?= e($t['subscribe']) ?> ↗</a></article>
<article><div class="payment-icon">IP</div><h4><?= e($t['insta']) ?></h4><p><?= e($t['instaP']) ?></p><a href="https://ipn.eg/S/soom12002/instapay/3dl0ok" target="_blank" rel="noopener"><?= e($t['openInsta']) ?> ↗</a></article>
<article class="bank-card"><div class="payment-icon">IBAN</div><h4><?= e($t['bank']) ?></h4><p><?= e($t['bankP']) ?></p><details><summary><?= e($t['details']) ?><span>+</span></summary><dl><div><dt><?= e($t['holder']) ?></dt><dd>Hesham Mamdouh Sadek Abd El Rahman</dd></div><div><dt><?= e($t['bankName']) ?></dt><dd>Mashreq Bank</dd></div><div><dt><?= e($t['account']) ?></dt><dd>059102587779</dd></div><div><dt>IBAN</dt><dd>EG760046010200000059102587779</dd></div></dl></details><a href="https://wa.me/201147372720" target="_blank" rel="noopener"><?= e($t['send']) ?> ↗</a></article>
</div><p class="tax-number"><?= e($t['tax']) ?></p></div></div></section>

<section class="section faq" id="faq"><div class="container faq-layout"><header class="section-head reveal"><p class="eyebrow dark"><span></span><?= e($t['faqK']) ?></p><h2><?= e($t['faqT']) ?></h2></header><div class="faq-list reveal"><?php foreach($t['faqs'] as $i=>$f): ?><details <?= $i===0?'open':'' ?>><summary><?= e($f[0]) ?><span>+</span></summary><p><?= e($f[1]) ?></p></details><?php endforeach; ?></div></div></section>
<section class="closing"><div class="blueprint"></div><div class="container closing-inner reveal"><span>ENGINEX ERP</span><h2><?= e($t['ctaT']) ?></h2><p><?= e($t['ctaP']) ?></p><div><a class="button" href="https://app.enginex2030.com/register"><?= e($t['start']) ?></a><a class="button outline" href="https://wa.me/201147372720" target="_blank" rel="noopener"><?= e($t['contact']) ?></a></div></div></section>
</main>
<footer class="footer"><div class="container footer-main"><div><a class="brand footer-logo" href="#top"><img src="assets/brand.svg" alt=""><span>ENGINE<b>X</b><small>ERP</small></span></a><p><?= e($t['footer']) ?></p></div><div><h3><?= $ar?'المنصة':'Platform' ?></h3><?php foreach($t['nav'] as $n): ?><a href="#<?= e($n[1]) ?>"><?= e($n[0]) ?></a><?php endforeach; ?></div><div><h3><?= $ar?'الحساب':'Account' ?></h3><a href="https://app.enginex2030.com/register"><?= e($t['start']) ?></a><a href="https://app.enginex2030.com/"><?= e($t['signin']) ?></a><a href="mailto:support@enginex2030.com">support@enginex2030.com</a></div><div><h3><?= $ar?'الدفع والدعم':'Payment & support' ?></h3><a href="https://wa.me/201147372720">WhatsApp</a><a href="https://ipn.eg/S/soom12002/instapay/3dl0ok">InstaPay</a><span><?= e($t['tax']) ?></span></div></div><div class="container footer-bottom"><span>© <?= date('Y') ?> ENGINEX ERP. <?= e($t['rights']) ?></span><span>enginex2030.com</span></div></footer>
<script src="assets/app.js" defer></script>
</body></html>
