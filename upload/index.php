<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='UTF-8'>
    <meta name='description' content='WebUni Education Template'>
    <meta name='keywords' content='webuni, education, creative, html'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link href="../img/faicon.ico" rel="shortcut icon" />
	<link rel="stylesheet" href="../css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i"
		rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" href="../css/owl.carousel.css" />
	<link rel="stylesheet" href="../css/style.css" />
	<title>AOUN</title>
</head>

<body>
	<img src="../img/4.png" class="upload-img">
	<!-- Page -->
	<section class="contact-page spad pb-0" style="margin-left: 20%;" >
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>كن عونا وارفق ملفاتك</h2>
							<h4>يمكنك تحميل ملفاتك التعليمية هنا</h4>
						</div>
						<form class="contact-form" action="index.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
							<div class="grade">
							<input type="file" name="myfile" class="myfile">
							<img src="../img/upload.png" alt="file" class="file_img">
							<select name="year">
								<option value="1">الصف الأول ثانوي</option>
								<option value="2">الصف الثاني ثانوي</option>
								<option value="3">الصف الثالث ثانوي</option>
							</select>
							<select name="semester">
								<option value="1">الفصل الدراسي الأول</option>
								<option value="2">الفصل الدراسي الثاني</option>
								<option value="3">الفصل الدراسي الثالث</option>
							</select>
							</div>
							<div class="fileSubjectName">
								<input type="text" name="fileName" placeholder="اسم الملف">
								<select name="subject">
									<option>القرآن الكريم وتفسيره</option>
									<option>الكفايات اللغوية</option>
									<option>اللغة الإنجليزية</option>
									<option>الرياضيات</option>
									<option>التقنية الرقمية</option>
									<option>الأحياء</option>
									<option>التفكير الناقد</option>
									<option>علم البيئة</option>
									<option>الفيزياء</option>
									<option>الحديث</option>
									<option>الكيمياء</option>
									<option>الدراسات الاجتماعية</option>
									<option>التربية الصحية والبدنية</option>
									<option>التوحيد</option>
									<option>الفنون</option>
									<option>اللياقة والثقافة الصحية</option>
									<option>التاريخ</option>
									<option>البحث ومصادر المعلومات</option>
									<option>الجغرافيا</option>
									<option>الفقه</option>
									<option>المهارات الحياتية والأسرية</option>
									<option>المواطنة الرقمية</option>
									<option>علوم الأرض والفضاء</option>
									<option>الدراسات الأدبية</option>
									<option>الدراسات النفسية والاجتماعية</option>
								</select>
							</div>
							<input type="date" name="date" placeholder="Date">
							<div>
							<input type="radio" id="Worksheet" name="filetype" value="الكتاب الدراسي">
							<label for="الكتاب الدراسي">الكتاب الدراسي</label>
							<input type="radio" id="Book" name="filetype" value="مخلص">
							<label for="مخلص">ملخص</label>
							<input type="radio" id="Test form" name="filetype" value="ورقة عمل">
							<label for="ورقة عمل">ورقة عمل</label>
							<input type="radio" id="Summary" name="filetype" value="نموذج اختبار">
							<label for="نموذج اختبار">نموذج اختبار</label>
							</div>
							<input type="text" name="school" placeholder="اسم مدرستك">
							<input type="text" name="teacher" placeholder="اسم المعلم">
							<textarea name="info" placeholder="نبذة عن الملف"></textarea>
							<div class="upload-btn">
							<button class="contact-site-btn" name="save">رفع</button>
							<a class="contact-site-btn" href="../courses.php">تراجع</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/main.js"></script>


	<!-- load for map -->
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>

</body>

</html>