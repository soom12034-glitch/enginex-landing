<?php
declare(strict_types=1);
$lang = ($_GET['lang'] ?? 'ar') === 'en' ? 'en' : 'ar';
$ar = $lang === 'ar';
$APP = 'https://app.enginex2030.com';
$c = $ar ? [
  'title' => 'ENGINEX ERP | من المناقصة إلى التحصيل', 'nav' => [['المنظومة','flow'],['داخل النظام','control'],['الاشتراك والدفع','pricing'],['الأسئلة','payment']],
  'login' => 'دخول', 'start' => 'ابدأ تجربتك المجانية', 'dl' => 'تحميل التطبيق', 'note' => '30 يوماً كاملة · دون بطاقة دفع',
  'h1' => 'مشروعك كله، على صفحة واحدة.', 'lead' => 'ENGINEX يربط المناقصة والعقد والتنفيذ والمستخلص والتحصيل في نظام واحد، مصمم لشركات المقاولات والاستشارات الهندسية في العالم العربي.',
  'see' => 'شاهد دورة المشروع',
  'pk' => 'المشكلة', 'p' => ['المناقصة في ملف، والعقد في آخر، والتكلفة عند المحاسب.','تعرف أن المشروع تأخر بعد أن يتأخر، وأن الهامش ضاع بعد أن يضيع.','وكل إدارة تملك نسخة مختلفة من الحقيقة.'],
  'fk' => 'الحل', 'ft' => 'دورة واحدة. سياق واحد.',
  's' => [['tenders','المناقصة','ابدأ بعرض منظم وقابل للاعتماد، ثم حوّله إلى مشروع دون إعادة إدخال البيانات.'],
          ['projects','التنفيذ','تابع المشروعات والعقود والتقدم في مكان واحد يراه الجميع وفق صلاحياتهم.'],
          ['claims','المستخلص','تابع المستحقات والمراجعات والاعتمادات بمسار واضح يربط التنفيذ بالقيمة.'],
          ['equipment','الموقع','اعرف أين تعمل المعدات، وما صُرف عليها، ومن المسؤول عن جاهزيتها، مع المشتريات والمخزون.'],
          ['zatca','التحصيل','أغلق الدورة بفواتير وضريبة وقيود مترابطة، مع جاهزية لمتطلبات ZATCA.']],
  'ck' => 'التحكم', 'ct' => 'كل قرار موثّق. كل شخص يرى ما يخصه.',
  'cl' => [['الصلاحيات','تحكم واضح في ما يراه وينفذه كل مستخدم.'],['الاعتمادات','القرار يُتخذ داخل العملية لا في رسائل منفصلة.'],['سجل التدقيق','من فعل ماذا ومتى، محفوظ داخل النظام.']],
  'rk' => 'أينما تعمل', 'rt' => 'تطبيق Windows، أو المتصفح، أو شاشة الهاتف الرئيسية.',
  'pr' => 'السعر', 'pt' => 'كامل المنظومة. اختر المدة فقط.', 'pp' => 'حتى 8 مستخدمين، بلا وحدات مخفية.',
  'y1' => 'اشتراك سنة', 'y2' => 'اشتراك سنتين', 'sar' => 'ريال', 'save' => 'وفّر 350 ريال', 'pay' => 'دفع إلكتروني · InstaPay · تحويل بنكي دولي',
  'ft2' => 'ابدأ بمشروع واحد.', 'fp' => 'امنح فريقك 30 يوماً داخل نظام واحد، ثم قرّر.', 'wa' => 'تحدث معنا عبر واتساب',
  'desc' => 'منصة ERP عربية تربط المناقصات والمشروعات والمشتريات والمعدات والمستخلصات والمحاسبة في نظام واحد.'
] : [
  'title' => 'ENGINEX ERP | From tender to collection', 'nav' => [['Platform','flow'],['Inside the system','control'],['Subscription & payment','pricing'],['FAQ','payment']],
  'login' => 'Sign in', 'start' => 'Start your free trial', 'dl' => 'Download the app', 'note' => 'Full 30 days · No payment card',
  'h1' => 'Your whole project, on one page.', 'lead' => 'ENGINEX connects tender, contract, delivery, claims, and collection in one system built for contractors and engineering consultancies across Arab markets.',
  'see' => 'See the project lifecycle',
  'pk' => 'The problem', 'p' => ['The tender sits in one file, the contract in another, the cost with accounting.','You learn a project is late after it is late, and the margin is gone after it is gone.','Every department holds a different version of the truth.'],
  'fk' => 'The answer', 'ft' => 'One lifecycle. One context.',
  's' => [['tenders','Tender','Start with a structured, approvable bid and turn it into a project without re-entering data.'],
          ['projects','Delivery','Follow projects, contracts, and progress in one place everyone sees by permission.'],
          ['claims','Claims','Track entitlements, reviews, and approvals on a clear path from delivery to value.'],
          ['equipment','Site','Know where equipment works, what it costs, and who owns its readiness, with procurement and stock.'],
          ['zatca','Collection','Close the loop with connected invoices, tax, and journals, ready for ZATCA requirements.']],
  'ck' => 'Control', 'ct' => 'Every decision on record. Everyone sees what is theirs.',
  'cl' => [['Permissions','Clear control over what each user can see and do.'],['Approvals','Decisions happen inside the process, not in side messages.'],['Audit log','Who did what and when, kept inside the system.']],
  'rk' => 'Wherever you work', 'rt' => 'Windows app, browser, or your phone’s home screen.',
  'pr' => 'Price', 'pt' => 'The full system. Choose only the term.', 'pp' => 'Up to 8 users, no hidden modules.',
  'y1' => 'One year', 'y2' => 'Two years', 'sar' => 'SAR', 'save' => 'Save SAR 350', 'pay' => 'Online payment · InstaPay · International transfer',
  'ft2' => 'Start with one project.', 'fp' => 'Give your team 30 days inside one system, then decide.', 'wa' => 'Talk to us on WhatsApp',
  'desc' => 'An Arabic-first ERP connecting tenders, projects, procurement, equipment, claims, and finance in one system.'
];
function e(string $v): string { return htmlspecialchars($v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="<?=$lang?>" dir="<?=$ar?'rtl':'ltr'?>">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title><?=e($c['title'])?></title><meta name="description" content="<?=e($c['desc'])?>"><meta name="robots" content="noindex,follow">
<meta name="theme-color" content="#061a29"><link rel="icon" href="assets/favicon.svg">
<link rel="preload" href="assets/cairo-arabic.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/hero-enterprise-v3.webp" as="image" type="image/webp" fetchpriority="high">
<link rel="stylesheet" href="assets/rx.css">
</head>
<body>
<div class="promo"><span><?= $ar ? 'عرض الإطلاق الآن — اشتراك سنوي يبدأ من 350 ريال ↗' : 'Launch offer — annual plans start at SAR 350 ↗' ?></span></div>
<header class="bar" data-bar>
  <a class="logo" href="#top"><img src="assets/brand.svg" alt="" width="36" height="36"><span>ENGINE<b>X</b></span></a>
  <nav><?php foreach ($c['nav'] as $n): ?><a href="#<?=$n[1]?>"><?=e($n[0])?></a><?php endforeach; ?><a href="install.html?lang=<?=$lang?>"><?=e($c['dl'])?></a></nav>
  <div class="bar-end"><a data-lang href="?lang=<?=$ar?'en':'ar'?>"><?=$ar?'EN':'العربية'?></a><a href="<?=$APP?>/owner-login"><?=e($c['login'])?></a><a class="btn sm" href="<?=$APP?>/register"><?=e($c['start'])?></a></div>
</header>

<main id="top">
<section class="hero">
  <div class="hero-in">
    <h1><?=e($c['h1'])?></h1>
    <p class="lead"><?=e($c['lead'])?></p>
    <div class="acts"><a class="btn" href="<?=$APP?>/register"><?=e($c['start'])?></a><a class="link" href="#flow"><?=e($c['see'])?></a></div>
    <p class="note"><?=e($c['note'])?></p>
  </div>
  <figure class="frame hero-frame"><div class="chrome"><i></i><i></i><i></i><span>app.enginex2030.com</span></div><img src="assets/screens/projects.webp" alt="<?=e($c['s'][1][1])?>" width="1280" height="720" fetchpriority="high"></figure>
</section>

<section class="problem" id="problem">
  <div class="section-intro"><p class="kick"><?=e($c['pk'])?></p><h2><?= $ar ? 'ما الذي يحتاجه المقاول؟' : 'What does a contractor need?' ?></h2><p><?= $ar ? 'منصة واحدة تجمع دورة العمل كاملة، وتمنح الإدارة صورة دقيقة في كل لحظة.' : 'One platform for the full lifecycle, giving leadership a clear view at every moment.' ?></p></div>
  <div class="need-grid"><?php foreach ($c['p'] as $i => $line): ?><article class="need-card"><b>0<?= $i + 1 ?></b><h3><?= $ar ? ['المشروعات والتسليم','المال والقرار','الحوكمة والامتثال'][$i] : ['Projects and delivery','Finance and decisions','Governance and compliance'][$i] ?></h3><p><?=e($line)?></p></article><?php endforeach; ?></div>
</section>

<section class="flow" id="flow">
  <header class="flow-head"><p class="kick"><?=e($c['fk'])?></p><h2><?=e($c['ft'])?></h2></header>
  <?php foreach ($c['s'] as $s): ?>
  <article class="scene">
    <div class="dim"><span><?=e($s[1])?></span></div>
    <div class="scene-copy"><h3><?=e($s[1])?></h3><p><?=e($s[2])?></p></div>
    <figure class="frame"><div class="chrome"><i></i><i></i><i></i><span>app.enginex2030.com</span></div><img src="assets/screens/<?=$s[0]?>.webp" alt="<?=e($s[1])?>" width="1280" height="720" loading="lazy"></figure>
  </article>
  <?php endforeach; ?>
</section>

<section class="control" id="control">
  <div class="control-copy">
    <p class="kick"><?=e($c['ck'])?></p><h2><?=e($c['ct'])?></h2>
    <dl><?php foreach ($c['cl'] as $x): ?><dt><?=e($x[0])?></dt><dd><?=e($x[1])?></dd><?php endforeach; ?></dl>
    <p class="where"><b><?=e($c['rk'])?>.</b> <?=e($c['rt'])?> <a href="install.html?lang=<?=$lang?>"><?=e($c['dl'])?></a></p>
  </div>
  <figure class="frame"><div class="chrome"><i></i><i></i><i></i><span>app.enginex2030.com</span></div><img src="assets/screens/reports.webp" alt="" width="1280" height="720" loading="lazy"></figure>
</section>

<section class="price" id="pricing">
  <header><p class="kick"><?=e($c['pr'])?></p><h2><?=e($c['pt'])?></h2><p><?=e($c['pp'])?></p></header>
  <div class="rows">
    <a class="row offer-image" href="<?=$APP?>/register"><img src="assets/gallery/enginex-scene-06.jpg" alt="<?=e($ar ? 'اشتراك سنة — 550 ريال' : 'One-year subscription — SAR 550')?>" loading="lazy"></a>
    <a class="row hot offer-image" href="<?=$APP?>/register"><img src="assets/gallery/enginex-scene-06-two-years.png" alt="<?=e($ar ? 'اشتراك سنتين — 1100 ريال' : 'Two-year subscription — SAR 1100')?>" loading="lazy"></a>
    <p class="pay"><?=e($c['pay'])?></p>
  </div>
</section>

<section class="payment" id="payment">
  <header class="section-intro"><p class="kick"><?= $ar ? 'الدفع والاشتراك' : 'Payment and subscription' ?></p><h2><?= $ar ? 'ابدأ خلال دقائق' : 'Start in minutes' ?></h2><p><?= $ar ? 'اختر المدة، اربط طريقة الدفع، وفعّل اشتراكك مباشرة.' : 'Choose a term, connect a payment method, and activate your subscription.' ?></p></header>
  <div class="payment-grid">
    <?php $steps = $ar ? [['01','أنشئ مساحة العمل','سجّل بيانات منشأتك وابدأ التجربة مباشرة.'],['02','اختر المدة','سنوي 350 ريال أو سنتان 700 ريال.'],['03','اختر الدفع','دفع إلكتروني آمن أو InstaPay أو تحويل بنكي.'],['04','فعّل الاشتراك','بعد التحقق من الدفع يُفعّل الاشتراك على حساب المنشأة.']] : [['01','Create your workspace','Enter your company details and start immediately.'],['02','Choose a term','Annual SAR 350 or two years for SAR 700.'],['03','Choose payment','Secure online payment, InstaPay, or bank transfer.'],['04','Activate subscription','Your workspace activates after payment verification.']]; foreach ($steps as $step): ?><article class="step-card"><b><?=e($step[0])?></b><h3><?=e($step[1])?></h3><p><?=e($step[2])?></p></article><?php endforeach; ?>
  </div>
</section>

<section class="final">
  <h2><?=e($c['ft2'])?></h2><p><?=e($c['fp'])?></p>
  <div class="acts"><a class="btn dark" href="<?=$APP?>/register"><?=e($c['start'])?></a><a class="link" href="https://wa.me/201147372720"><?=e($c['wa'])?></a></div>
</section>
</main>
<script src="assets/rx.js" defer></script>
</body>
</html>
