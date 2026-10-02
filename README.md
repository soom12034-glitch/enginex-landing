# ENGINEX PHP landing page

صفحة هبوط ثنائية اللغة (العربية والإنجليزية) مبنية بـ PHP، ولا تحتاج إلى قاعدة بيانات.

## التشغيل محلياً

من داخل هذا المجلد، شغّل:

```bash
php -S localhost:8080
```

ثم افتح `http://localhost:8080` للعربية أو `http://localhost:8080/?lang=en` للإنجليزية.

## الرفع على الاستضافة

ارفع `index.php` ومجلد `assets` إلى مجلد الموقع العام مثل `public_html`. تتطلب الصفحة PHP 7.4 أو أحدث.

روابط التسجيل وواتساب والبريد موجودة داخل `index.php` ويمكن تعديلها مباشرة.

## النشر على Coolify

ارفع محتويات هذا المجلد إلى مستودع Git، ثم أنشئ Application جديداً في Coolify واختر Dockerfile كطريقة البناء.

- Base Directory: `/`
- Dockerfile Location: `/Dockerfile`
- Ports Exposes: `80`
- Healthcheck Path: `/`
- Domain: الدومين المطلوب مثل `https://enginex2030.com`

لا تحتاج الصفحة إلى قاعدة بيانات أو Volume أو متغيرات بيئة. بعد حفظ الإعدادات اضغط Deploy.
