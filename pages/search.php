<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>اختيار السيارة</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<style>
body {
  font-family: 'Roboto', sans-serif;
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

/* توجيه النص إلى اليمين */
select {
  text-align: right;
}
</style>
</head>
<body>

<div class="container">
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
          <option value="">اختر الموديل</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="type" class="form-control">
          <option value="">اختر النوع</option>
        </select>
      </div>
      <div id="carImage" class="text-center">
        <img src="" alt="" class="fade-in">
      </div>
     <!-- <button id="saveButton" class="btn btn-primary">حفظ ومتابعة</button> -->
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var selectedValues = {};

  var carData = {
    "brands": [
      {
        "name": "تويوتا",
        "models": [
          {
            "year": "2024",
            "model": "يارس",
            "type": "واي بلس",
            "value": "72450",
            "image": "تويوتا_يارس_واي بلس_2024.jpg"
          },
          {
            "year": "2023",
            "model": "هايلندر",
            "type": "ال أي بدون دبل",
            "value": "154215",
            "image": "تويوتا_هايلندر_ال أي بدون دبل_2023.jpg"
          },
          {
            "year": "2024",
            "model": "كورولا",
            "type": "فل كامل",
            "value": "86500",
            "image": "تويوتا_كورولا_فل كامل_2024.jpg"
          }
        ]
      },
      {
        "name": "هونداي",
        "models": [
          {
            "year": "2023",
            "model": "اكسنت",
            "type": "سمارت",
            "value": "63825",
            "image": "هونداي_اكسنت_سمارت_2023.jpg"
          },
          {
            "year": "2024",
            "model": "النترا",
            "type": "توربو",
            "value": "87350",
            "image": "هونداي_النترا_توربو_2024.jpg"
          }
        ]
      },
      {
        "name": "نيسان",
        "models": [
          {
            "year": "2023",
            "model": "سنترا",
            "type": "إكسل",
            "value": "73900",
            "image": "نيسان_سنترا_إكسل_2023.jpg"
          },
          {
            "year": "2024",
            "model": "باترول",
            "type": "بلاتينيوم",
            "value": "317500",
            "image": "نيسان_باترول_بلاتينيوم_2024.jpg"
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
            $('#type').append($('<option>').text(model.type).attr('value', model.type));
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
    selectedValues.type = selectedType;
    selectedValues.image = imageUrl;
  });

  // Save button click handler
  $('#saveButton').click(function() {
    // Assuming you want to navigate to the next page with the selected values
    // You can replace the window.location.href with your desired action
    // For demonstration purpose, let's log the selected values
    console.log(selectedValues);
    // Here you can navigate to the next page with the selected values
    // window.location.href = 'nextpage.html?selectedType=' + selectedValues.type + '&selectedImage=' + selectedValues.image;
  });
});
</script>

</body>
</html>
