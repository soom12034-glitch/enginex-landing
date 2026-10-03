# دليل تعديل صفحة ENGINEX ورفعها

هذا الدليل خاص بمستودع صفحة الهبوط:

    git@github.com:soom12034-glitch/enginex-landing.git

لا ترفع تعديلات صفحة الهبوط إلى مستودع البرنامج الرئيسي.

## 1. تعديل النصوص

افتح الملف:

    site-config.php

يمكنك تعديل النصوص الموجودة بين علامتي الاقتباس، مثل:

    'h1' => 'أدر دورة المشروع كاملة.',
    'h1b' => 'وشاهد أثرها المالي فوراً.',
    'lead' => 'النص التعريفي...',

- القسم ar للنصوص العربية.
- القسم en للنصوص الإنجليزية.
- لا تغيّر أسماء المفاتيح مثل h1 وlead.
- احفظ الملف بترميز UTF-8.

### تعديل صور معرض النظام

كل عنصر في tabs يتكون من:

    ['projects', 'عنوان التبويب', 'وصف التبويب']

الكلمة الأولى هي اسم الصورة داخل assets/screens دون الامتداد. الأسماء المتاحة حالياً:

- projects
- claims
- reports
- equipment
- zatca
- journal
- tenders

لا يوجد تبويب «حساب الكميات» في الصفحة.

## 2. استبدال الصور

### صورة الواجهة الرئيسية

استبدل الملف التالي بصورة جديدة لها نفس الاسم:

    assets/hero-enterprise-v3.jpg

المقاس المقترح: 1920 × 1080، بصيغة JPG، وحجم أقل من 500 KB.

عند استخدام الاسم نفسه لن تحتاج إلى تعديل PHP أو CSS.

### صور النظام المتحركة

استبدل الصور داخل:

    assets/screens/

استخدم نفس أسماء الملفات ونفس امتداد WebP، مثل:

    assets/screens/projects.webp

المقاس المقترح: 1280 × 720، وحجم أقل من 250 KB.

## 3. تعديل الأسعار

لا تعدّل الأسعار داخل ملفات صفحة الهبوط.

استخدم لوحة الإدارة العليا:

    https://app.enginex2030.com/admin-plans

صفحة الهبوط تقرأ تلقائياً:

- السعر السنوي.
- سعر السنتين المحسوب.
- نسبة خصم السنتين.

## 4. الرفع من موقع GitHub

1. افتح https://github.com/soom12034-glitch/enginex-landing.
2. افتح site-config.php.
3. اضغط رمز القلم Edit this file.
4. عدّل النص ثم اضغط Commit changes.
5. لتغيير صورة: افتح مجلد assets أو assets/screens.
6. اختر Add file ثم Upload files.
7. ارفع الصورة بالاسم نفسه، ثم اضغط Commit changes.

## 5. الرفع بواسطة Git

من PowerShell داخل مجلد الصفحة:

    cd "C:\Users\User\Documents\Codex\2026-10-02\new-chat\outputs\enginex-php"
    git pull origin main
    git status
    git add site-config.php assets/
    git commit -m "Update landing content and images"
    git push origin main

راجع دائماً نتيجة git status قبل git add حتى لا ترفع ملفات غير مقصودة.

## 6. النشر في Coolify

بعد اكتمال الرفع إلى GitHub:

1. افتح لوحة Coolify.
2. افتح مشروع enginex2030.
3. افتح التطبيق enginex-landing.
4. اختر Deploy أو Redeploy.
5. انتظر حتى تصبح الحالة Running / Healthy.
6. افتح https://enginex2030.com/?lang=ar وجرّب النسختين العربية والإنجليزية.

التطبيق الحالي لا يعتمد على النشر التلقائي، لذلك رفع الملفات إلى GitHub وحده لا يغيّر الموقع حتى تنفذ Redeploy في Coolify.

## 7. الرجوع إلى نسخة سابقة

من صفحة المستودع في GitHub افتح Commits، واختر النسخة الصحيحة. لا تحذف المستودع أو مشروع Coolify للرجوع إلى إصدار سابق.
