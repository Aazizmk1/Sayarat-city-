<!DOCTYPE html>
<?php
// Connect to the database
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'car_db';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
/*
$sql = "SELECT DISTINCT model FROM cars_details";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT DISTINCT full_name FROM customers";
$result2 = mysqli_query($conn, $sql2);

$row = mysqli_fetch_assoc($result);
$row2 = mysqli_fetch_assoc($result2);
*/
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and sanitize form data
        $cus_name = isset($_POST['fullName']) ? htmlspecialchars($_POST['fullName']) : "";
        $phone_num = isset($_POST['phoneNumber']) ? htmlspecialchars($_POST['phoneNumber']) : "";
        $bankname = isset($_POST['salaryBank']) ? htmlspecialchars($_POST['salaryBank']) : "";
        $salary = isset($_POST['salaryAmount']) ? htmlspecialchars($_POST['salaryAmount']) : "";
        if((isset($_POST['salaryBank']) ? htmlspecialchars($_POST['salaryBank']) : "")=="Alrajhi"){
			$nsba = 0.01;
		}
		else $nsba = 0.02;
		$first_payment_customer = isset($_POST['firstBatch']) ? htmlspecialchars($_POST['firstBatch']) : "";//الاسم
        $num_months = isset($_POST['installmentDuration']) ? htmlspecialchars($_POST['installmentDuration']) : "";
        $detection = isset($_POST['detuctionamunt']) ? htmlspecialchars($_POST['detuctionamunt']) : "";//قيمة الاستقطاع الشهرية
        $nsba_eltzamat = isset($_POST['nesbacommitments']) ? htmlspecialchars($_POST['nesbacommitments']) : "";
} else {
        // If form data is not submitted, display a message
        echo "<p>No data submitted.</p>";
}
//from data base cars
$carValue = 100000;
$car_type = "كامري";
//from data base banks
$nsbat_altameen = 0.02;
//calculations
$carValue_m3_d3m = $carValue + ($carValue * 0.13);//بدل ال13 بالمية هنا نربطها بالبنك حسب اذا كان مع دعم او لا
$total_car_cost = $carValue_m3_d3m + 
$last_payment_bank = $carValue * 0.45;
$first_payment_must_bank;
$num_year = $num_months / 12; 
$last_payment;
$bank_mrabha = $carValue * $num_year * $nsba;
$pay_month_avalable = ($salary * $nsba_eltzamat) - $detection;
$qst_muta7 = ($salary * $nsba_eltzamat) - $detection;//قيمة القسط المتاح
$tameen_amount = $nsbat_altameen * $num_year * $carValue;//قيمة التأمين
$total_car_cost = $carValue_m3_d3m + $bank_mrabha + $tameen_amount;//القيمة الاجمالية للسيارة
$first_payment_must_bank = $total_car_cost - (($qst_muta7 * $num_months) + $last_payment_bank);//الدفعة الالزامي من البنك

?>

<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحة العروض المتاحة لك</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');

	/* Custom Styles */
    body {
      direction: rtl;
      font-family: 'Cairo', sans-serif;
      background-color: #f8f9fa;
    }
    .container {
      padding: 50px;
    }
    .offer-card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-bottom: 20px;
    }
    .offer-details {
      margin-bottom: 20px;
    }
    .offer-details h4 {
      color: #007bff; /* Blue color for headings */
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="text-center">صفحة العروض المتاحة لك</h2>
  
  <div class="offer-card">
    <div class="offer-details">
      <h4>معلومات العميل</h4>
      <p><strong>الاسم : </strong><span><?php echo $cus_name; ?></span></p>
      <p><strong>رقم الجوال : </strong><span><?php echo $phone_num; ?></span></p>
      <p><strong>اسم السيارة والموديل : </strong><span><?php echo $car_type; ?></span></p>
    </div>
    <div class="offer-details">
      <h4>العرض الرئيسي</h4>
      <p><?php echo $bankname ?></p>
      <p>الدفعة الاولى : <span><?php echo $first_payment_must_bank; ?></span></p>
      <p>القسط : <span>1720</span></p>
      <p>عدد الاقساط : <span><?php echo $num_months; ?></span></p>
      <p>الدفعة الاخيرة : <span><?php echo $last_payment_bank; ?></span></p>
    </div>
  </div>
  <h2 class="text-center">تصفح العروض الاخرى</h2>
  <div class="row">
    <div class="col-md-4 col-xs-12">
      <div class="offer-card">
        <div class="offer-details">
          <p>البنك الاهلي :</p>
          <p>الدفعة الاولى : <span><?php echo $first_payment_customer ?></span></p>
          <p>القسط : <span>1700</span></p>
          <p>عدد الاقساط : <span><?php echo $num_months; ?></span></p>
          <p>الدفعة الاخيرة : <span><?php echo $last_payment_bank; ?></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="offer-card">
        <div class="offer-details">
          <p>البنك الفرنسي :</p>
          <p>الدفعة الاولى : <span><?php echo $first_payment_customer ?></span></p>
          <p>القسط : <span>1800</span></p>
          <p>عدد الاقساط : <span><?php echo $num_months; ?></span></p>
          <p>الدفعة الاخيرة : <span><?php echo $last_payment_bank; ?></span></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="offer-card">
        <div class="offer-details">
          <p>البنك الرياض :</p>
          <p>الدفعة الاولى : <span><?php echo $first_payment_customer ?></span></p>
          <p>القسط : <span>2000</span></p>
          <p>عدد الاقساط : <span><?php echo $num_months; ?></span></p>
          <p>الدفعة الاخيرة : <span><?php echo $last_payment_bank; ?></span></p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
