<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>اختيار السيارة</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 
<style>
@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');

body {
  font-family: 'Cairo', sans-serif;
}

.container {
  margin-top: 50px;
}

.dropdown {
  margin-bottom: 20px;
}

img {
  max-width: 100%;
  display: none;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.fade-in {
  animation: fadeIn 1s ease-in-out forwards;
}

.form-container {
  max-width: 500px;
  margin: 0 auto;
}

/* Right align text */
.text-right {
  text-align: right;
}
select {
  text-align: right;
}
</style>
</head>
<body>
<div class="container">
  <h2 style="text-align:center;margin-bottom: 20px;">اختر السيارة من هنا</h2>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="dropdown">
        <select id="carBrand" class="form-control">
          <option value="">اختر ماركة السيارة</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="year" class="form-control">
          <option value="">اختر السنة</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="model" class="form-control">
          <option value="">اختر النوع</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="type" class="form-control">
          <option value="">اختر الفئة</option>
        </select>
      </div>
      <div id="carImage" class="text-center">
        <img src="" alt="" class="fade-in">
      </div>
    </div>
  </div>
</div>

<div class="container">
 <h2 style="text-align:center;margin-bottom: 20px;">قم بتعبئة النموذج التالي</h2>
  <div class="row justify-content-center">
    <div class="col-md-6 form-container">
      <form id="carForm" action="lastpage.php" method="post">
        <div class="form-group text-right">
          <label for="fullName">الاسم الكامل</label>
          <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="form-group text-right">
          <label for="gender">الجنس</label>
          <select id="gender" class="form-control" name="gender" required>
            <option value="">اختر الجنس</option>
            <option value="male">ذكر</option>
            <option value="female">أنثى</option>
          </select>
        </div>
        <div class="form-group text-right">
          <label for="phoneNumber">رقم الهاتف (السعودية)</label>
          <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber"  pattern="[0][5][0-9]{8}" placeholder="أدخل رقم هاتف مكون من 10 أرقام يبدأ بـ 05" required>
          <small id="phoneNumberHelp" class="form-text text-muted">الرجاء إدخال رقم هاتف مكون من 10 أرقام يبدأ بـ 05.</small>
        </div>
        <div class="form-group text-right">
          <label for="city">المدينة</label>
          <select id="city" class="form-control" name="city" required>
            <option value="">اختر المدينة</option>
            <option value="Riyadh">الرياض</option>
            <option value="Jeddah">جدة</option>
            <option value="Dammam">الدمام</option>
            <option value="Al Khobar">الخبر</option>
          </select>
        </div>
        <div class="form-group text-right">
          <label for="salaryBank">بنك الراتب</label>
          <select id="salaryBank" class="form-control" name="salaryBank" required>
            <option value="">اختر البنك</option>
            <option value="Alrajhi">الراجحي</option>
            <option value="ANB">الأهلي</option>
            <option value="Riyadh Bank">مصرف الرياض</option>
          </select>
        </div>
        <div class="form-group text-right">
          <label for="section">جهة العمل</label>
          <select id="section" class="form-control" name="section" required>
            <option value="">اختر القسم</option>
            <option value="local">قطاع خاص</option>
            <option value="government">حكومي</option>
            <option value="retired">متقاعد</option>
            <option value="military">عسكري</option>
          </select>
        </div>
        <div class="form-group text-right">
          <label for="salaryAmount">مبلغ الراتب</label>
          <input type="number" class="form-control" id="salaryAmount" name="salaryAmount" required>
        </div>
        <div class="form-group text-right">
          <label for="installmentDuration">مدة القسط (بالشهور)</label>
          <select id="installmentDuration" class="form-control" name="installmentDuration" required>
            <option value="">اختر المدة</option>
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="36">36</option>
            <option value="48">48</option>
            <option value="60">60</option>
          </select>
        </div>
        <div class="form-group text-right">
          <label for="firstBatch">الدفعة الأولى</label>
          <input type="number" class="form-control" id="firstBatch" name="firstBatch" required>
        </div>
        <div class="form-group text-right">
          <label for="nationality">الجنسية</label>
          <select id="nationality" class="form-control" name="nationality" required>
            <option value="">اختر</option>
            <option value="yes">سعودي</option>
            <option value="no">مقيم</option>
          </select>
        </div>
        <div class="form-group text-right">
          <label for="nesbacommitments">التزامات</label>
          <select id="nesbacommitments" class="form-control" name="nesbacommitments" required>
            <option value="">اختر</option>
            <option value="0.45">بنكية</option>
            <option value="0.65">عقارية</option>
			<option value="0.45">لايوجد</option>
          </select>
        </div>
		<div class="form-group text-right">
          <label for="detuctionamunt">قيمة الاستقطاع</label>
          <input type="number" class="form-control" id="detuctionamunt" name="detuctionamunt">
        </div>
        <div class="form-group text-right">
          <label for="trafficViolations">مخالفات المرور</label>
          <select id="trafficViolations" class="form-control" required>
            <option value="">اختر</option>
            <option value="yes">نعم</option>
            <option value="no">لا</option>
          </select>
        </div>
        <div id="trafficViolationsAmount" class="form-group text-right" style="display: none;">
          <label for="trafficViolationsAmountInput">قيمة المخالفات</label>
          <input type="number" class="form-control" id="trafficViolationsAmountInput">
        </div>
        <button type="submit" class="btn btn-primary" style="padding:20px 100px 20px 100px; margin-left:50px;" value="Submit">إرسال</button>
      </form>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center" id="formDataDisplay"></div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var carData = {
    "brands": [
      {
        "name": "الماركة 1",
        "models": [
          {
            "year": "2022",
            "model": "الموديل 1",
            "type": "النوع 1",
            "value": "100000",
            "image": "brand1_model1_type1.jpg"
          },
          {
            "year": "2023",
            "model": "الموديل 2",
            "type": "النوع 2",
            "value": "80000",
            "image": "brand1_model2_type2.jpg"
          }
        ]
      },
      {
        "name": "الماركة 2",
        "models": [
          {
            "year": "2022",
            "model": "الموديل 3",
            "type": "النوع 3",
            "value": "90000",
            "image": "brand2_model3_type3.jpg"
          }
        ]
      }
    ]
  };

  // Populate car brands dropdown
  $.each(carData.brands, function(key, value) {
    $('#carBrand').append($('<option>').text(value.name).attr('value', value.name));
  });

  // Update year dropdown based on selected brand
  $('#carBrand').change(function() {
    var selectedBrand = $(this).val();
    $('#year').empty().append($('<option>').text('اختر السنة').attr('value', ''));
    $.each(carData.brands, function(key, value) {
      if (value.name === selectedBrand) {
        $.each(value.models, function(index, model) {
          $('#year').append($('<option>').text(model.year).attr('value', model.year));
        });
      }
    });
  });

  // Update model dropdown based on selected year
  $('#year').change(function() {
    var selectedBrand = $('#carBrand').val();
    var selectedYear = $(this).val();
    $('#model').empty().append($('<option>').text('اختر الموديل').attr('value', ''));
    $.each(carData.brands, function(key, value) {
      if (value.name === selectedBrand) {
        $.each(value.models, function(index, model) {
          if (model.year === selectedYear) {
            $('#model').append($('<option>').text(model.model).attr('value', model.model));
          }
        });
      }
    });
  });

  // Update type dropdown based on selected model
  $('#model').change(function() {
    var selectedBrand = $('#carBrand').val();
    var selectedYear = $('#year').val();
    var selectedModel = $(this).val();
    $('#type').empty().append($('<option>').text('اختر النوع').attr('value', ''));
    $.each(carData.brands, function(key, value) {
      if (value.name === selectedBrand) {
        $.each(value.models, function(index, model) {
          if (model.year === selectedYear && model.model === selectedModel) {
            $('#type').append($('<option>').text(model.type).attr('value', model.type).data('value', model.value));
          }
        });
      }
    });
  });

  // Show car image when all dropdowns are selected
  $('#type').change(function() {
    var selectedBrand = $('#carBrand').val();
    var selectedYear = $('#year').val();
    var selectedModel = $('#model').val();
    var selectedType = $(this).val();
    var imageUrl = '';
    $.each(carData.brands, function(key, value) {
      if (value.name === selectedBrand) {
        $.each(value.models, function(index, model) {
          if (model.year === selectedYear && model.model === selectedModel && model.type === selectedType) {
            imageUrl = model.image;
          }
        });
      }
    });
    $('#carImage img').attr('src', imageUrl);
    $('#carImage img').attr('alt', imageUrl.split('.').slice(0, -1).join('.'));
    $('#carImage img').show();
  });

  // Form submission handler
  /*$('#carForm').submit(function(event) {
    event.preventDefault();
    var formData = {
      fullName: $('#fullName').val(),
      gender: $('#gender').val(),
      phoneNumber: $('#phoneNumber').val(),
      city: $('#city').val(),
      salaryBank: $('#salaryBank').val(),
      section: $('#section').val(),
      salaryAmount: $('#salaryAmount').val(),
      installmentDuration: $('#installmentDuration').val(),
      firstBatch: $('#firstBatch').val(),
      nationality: $('#nationality').val(),
      commitments: $('#commitments').val(),
      commitmentsType: $('#commitmentsKind').val(),
      trafficViolations: $('#trafficViolations').val(),
      trafficViolationsAmount: $('#trafficViolationsAmountInput').val()
    };*/
    /*
    // Display form data
    $('#formDataDisplay').html(`
      <h3 class="text-right">سعر العرض لك: ${formData.fullName}</h3>
      <h4 class="text-right">نوع السيارة: ${$('#type option:selected').text()}</h4>
      <h4 class="text-right">القيمة: ${$('#type option:selected').data('value')}</h4>
      <img src="${$('#carImage img').attr('src')}" alt="${$('#carImage img').attr('alt')}" class="fade-in">
    `);*/
  //});
  // Show/hide commitments type dropdown based on commitments selection
  /*$('#commitments').change(function() {
    if ($(this).val() === 'yes') {
      $('#commitmentsKind').show();
    } else {
      $('#commitmentsKind').hide();
    }
  });*/

  // Show/hide traffic violations amount input based on traffic violations selection
  $('#trafficViolations').change(function() {
    if ($(this).val() === 'yes') {
      $('#trafficViolationsAmount').show();
    } else {
      $('#trafficViolationsAmount').hide();
    }
  });
});
</script>

</body>
</html>
