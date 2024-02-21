<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Selector</title>
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

.form-container {
  max-width: 500px;
  margin: 0 auto;
}
</style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="dropdown">
        <select id="carBrand" class="form-control">
          <option value="">Select Car Brand</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="year" class="form-control">
          <option value="">Select Year</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="model" class="form-control">
          <option value="">Select Model</option>
        </select>
      </div>
      <div class="dropdown">
        <select id="type" class="form-control">
          <option value="">Select Type</option>
        </select>
      </div>
      <div id="carImage" class="text-center">
        <img src="" alt="" class="fade-in">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 form-container">
      <form id="carForm">
        <div class="form-group">
          <label for="fullName">Full Name</label>
          <input type="text" class="form-control" id="fullName" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender</label>
          <input type="text" class="form-control" id="gender" required>
        </div>
        <div class="form-group">
          <label for="phoneNumber">Phone Number (Saudi Arabia)</label>
          <input type="tel" class="form-control" id="phoneNumber" pattern="[+][9][6][6]\s[5]\d{8}" required>
        </div>
        <div class="form-group">
          <label for="city">City</label>
          <select id="city" class="form-control" required>
            <option value="">Select City</option>
            <!-- Add Saudi Arabia cities here -->
          </select>
        </div>
        <div class="form-group">
          <label for="salaryBank">Salary Bank</label>
          <select id="salaryBank" class="form-control" required>
            <option value="">Select Bank</option>
            <!-- Add Saudi Arabia banks here -->
          </select>
        </div>
        <div class="form-group">
          <label for="section">Section</label>
          <select id="section" class="form-control" required>
            <option value="">Select Section</option>
            <option value="local">Local</option>
            <option value="government">Government</option>
            <option value="retired">Retired</option>
            <option value="military">Military</option>
          </select>
        </div>
        <div class="form-group">
          <label for="salaryAmount">Salary Amount</label>
          <input type="number" class="form-control" id="salaryAmount" required>
        </div>
        <div class="form-group">
          <label for="installmentDuration">Installment Duration (months)</label>
          <select id="installmentDuration" class="form-control" required>
            <option value="">Select Duration</option>
            <option value="12">12</option>
            <option value="24">24</option>
            <option value="36">36</option>
            <option value="48">48</option>
            <option value="60">60</option>
          </select>
        </div>
        <div class="form-group">
          <label for="firstBatch">First Batch</label>
          <input type="number" class="form-control" id="firstBatch" required>
        </div>
        <div class="form-group">
          <label for="nationality">Nationality</label>
          <input type="text" class="form-control" id="nationality" required>
        </div>
        <div class="form-group">
          <label for="commitments">Commitments</label>
          <select id="commitments" class="form-control" required>
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
        <div id="commitmentsType" class="form-group" style="display: none;">
          <label for="commitmentsKind">Type of Commitments</label>
          <select id="commitmentsKind" class="form-control">
            <option value="">Select</option>
            <option value="bank">Bank</option>
            <option value="construction">Construction</option>
          </select>
        </div>
        <div class="form-group">
          <label for="trafficViolations">Traffic Violations</label>
          <select id="trafficViolations" class="form-control" required>
            <option value="">Select</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>
        <div id="trafficViolationsAmount" class="form-group" style="display: none;">
          <label for="trafficViolationsAmountInput">Traffic Violations Amount</label>
          <input type="number" class="form-control" id="trafficViolationsAmountInput">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  var carData = {
    "brands": [
      {
        "name": "Brand1",
        "models": [
          {
            "year": "2022",
            "model": "Model1",
            "type": "Type1","value":"100000",
            "image": "brand1_model1_type1.jpg"
          },
          {
            "year": "2023",
            "model": "Model2",
            "type": "Type2","value":"80000",
            "image": "brand1_model2_type2.jpg"
          },
          // Add more models for Brand1 as needed
        ]
      },
      {
        "name": "Brand2",
        "models": [
          {
            "year": "2022",
            "model": "Model3",
            "type": "Type3","value":"90000",
            "image": "brand2_model3_type3.jpg"
          },
          // Add more models for Brand2 as needed
        ]
      },
      // Add more brands as needed
    ]
  };

  // Populate car brands dropdown
  $.each(carData.brands, function(key, value) {
    $('#carBrand').append($('<option>').text(value.name).attr('value', value.name));
  });

  // Update year dropdown based on selected brand
  $('#carBrand').change(function() {
    var selectedBrand = $(this).val();
    $('#year').empty().append($('<option>').text('Select Year').attr('value', ''));
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
    $('#model').empty().append($('<option>').text('Select Model').attr('value', ''));
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
    $('#type').empty().append($('<option>').text('Select Type').attr('value', ''));
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
  });

  // Form submission handler
  $('#carForm').submit(function(event) {
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
    };
    
    // Display form data
    $('#formDataDisplay').html(`
      <h3>This offer price is for you: ${formData.fullName}</h3>
      <h4>Type of the car is: ${$('#type').val()}</h4>
      <h4>The value is: ${$('#type option:selected').data('value')}</h4>
      <img src="${$('#carImage img').attr('src')}" alt="Car Image" class="img-fluid">
    `);
  });

  // Show/hide commitments type dropdown based on user selection
  $('#commitments').change(function() {
    if ($(this).val() === 'yes') {
      $('#commitmentsType').show();
    } else {
      $('#commitmentsType').hide();
    }
  });

  // Show/hide traffic violations amount input based on user selection
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
