<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>التمويل والبحث عن السيارات</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Roboto', sans-serif;
  text-align: center; /* تمويج النص إلى الوسط */
  direction: rtl; /* توجيه النص إلى اليمين */
  background-color: #f8f9fa; /* لون الخلفية */
}

.container {
  margin-top: 50px;
  display: flex; /* تخطيط العناصر بناءً على صف */
  justify-content: center; /* محاذاة العناصر إلى الوسط أفقياً */
  flex-wrap: wrap; /* التفاف العناصر عندما تصل إلى الحد الأقصى للعرض */
}

.card {
  flex: 1; /* تقسيم المساحة بين البطاقات بالتساوي */
  margin: 20px;
  padding: 20px;
  background-color: #fff; /* لون خلفية البطاقة */
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* ظل البطاقة */
  transition: transform 0.3s ease-in-out; /* تأثير الانتقال */
}

.card:hover {
  transform: scale(1.05); /* تكبير البطاقة عند التحويم */
}

h2 {
  color: #007bff; /* لون العنوان */
  font-size: 1.5rem; /* تصغير حجم العنوان */
}

p {
  font-size: 1rem; /* تصغير حجم النص */
  color: #333; /* لون النص */
}

.main-text {
  flex: 100%; /* امتداد النص على العرض الكامل */
  margin: 20px;
  padding: 20px;
  background-color: #c8e1fd; /* لون خلفية النص الرئيسي */
  border-radius: 10px;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); /* ظل النص الرئيسي */
}

@media screen and (max-width: 992px) {
  .container {
    flex-direction: column; /* تغيير التخطيط إلى عمودي عندما يكون عرض الشاشة أقل من 992 بكسل */
  }

  .card {
    flex: 1 1 50%; /* تقسيم المساحة بنسبة 50% لكل بطاقة عندما يكون عرض الشاشة أقل من 992 بكسل */
  }
}
</style>
</head>
<body>

<div class="container">
  <div class="main-text">
    <h2>كيف تحصل على تمويل سيارتك</h2>
    <p>بناء على وضعك الائتماني سنقدم لك أفضل عرض تمويلي وأقل سعر سيارة.</p> 
  </div>
  
  <div class="card">
    <h2>ابحث عن سيارتك</h2>
    <p>ابحث عن سيارتك الجديدة بسهولة.</p>
  </div>
  
  <div class="card">
    <h2>اختر من المعارض</h2>
    <p>اختر سيارتك من خلال العديد من المعارض المتنوعة والمنتشرة بأنحاء المملكة.</p>
  </div>
  
  <div class="card">
    <h2>اكتشف العروض التمويلية</h2>
    <p>عروض تمويلية مختلفة من جميع بنوك المملكة، تناسب ميزانيتك الشهرية.</p>
  </div>
  
  <div class="card">
    <h2>استلم سيارتك الجديدة</h2>
    <p>مبروك عليك سيارتك الجديدة خلال 48 ساعة من تقديم الطلب.</p>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
