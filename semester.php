<?php include './upload/filesLogic.php';?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <title>AOUN</title>
    <meta charset='UTF-8'>
    <meta name='description' content='WebUni Education Template'>
    <meta name='keywords' content='webuni, education, creative, html'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Favicon -->
    <link href='img/faicon.ico' rel='shortcut icon' />

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i'
        rel='stylesheet'>

    <!-- Stylesheets -->
    <link rel='stylesheet' href='css/bootstrap.min.css' />
    <link rel='stylesheet' href='css/style.css' />
    <link rel='stylesheet' href='css/book.css' />

</head>

<body>
    <!-- Page Preloder -->
    <div id='preloder'>
        <div class='loader'></div>
    </div>

    <!-- Header section -->
    <header class='header-section'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-3 col-md-3'>
                    <div class='site-logo'>
                    </div>
                    <div class='nav-switch'>
                        <i class='fa fa-bars'></i>
                    </div>
                </div>
                <div class='col-lg-9 col-md-9'>
                    <nav class='main-menu'>
                        <ul>
                            <li><a href='contact.php'>نبذة عنّا</a></li>
                            <li><a href='courses.php'>المواد الدراسية</a></li>
                            <li><a href='index.php'>الصفحة الرئيسية</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header section end -->

    <!-- Page info -->
    <div class='page-info-section set-bg' data-setbg='img/2.png'>
        <div class='container'>
            <div class='site-breadcrumb'>
                <span>فصل دراسي</span>
                <a href='courses.php'>/المراحل الدراسية</a>
                <a href='index.php'>/الصفحة الرئيسية</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- search section -->
    <section class='search-section ss-other-page'>
        <div class='container'>
             <div class='search-warp'>
                <div class='section-title text-white'>
                    <h2><span>بحث وتحميل دورتك الدراسية</span></h2>
                </div>
                <div >
                    <div class='search-bar'>
                        <h4>ابحث عن مادتك</h4>
                        <h4>كن عونًا وارفع ملفاتك</h4>
                    </div>
                    <br>
                    <div sytle="display:flex; align-items:center;">
                        <a href='./upload/index.php' class='site-btn mr-2 ml-4' style="left:190px;">ارفع</a>
                        <button class='site-btn'  onclick='subjectSearch()' style="margin-left:360px;">بحث</button>
                        <input type='text' id='subSearch' class="subjectSearch" onkeypress='subjectsSearch(event)' name='subjects' placeholder='البحث...' value="<?php if(isset($subName)){echo($subName);} ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- search section end -->
    <!-- course section -->
    <section class='course-section spad pb-0'>
    <img src="img/3.png" style="position:absolute; top:443px; z-index:-1;">
        <h3 style="text-align:center; color:rgb(176, 136, 25);margin-top:-20px; margin-bottom:-10px; ">
            <?php if($_GET['grade']==="1"){echo("الصف الأول ثانوي");}
                  if($_GET['grade']==="2"){echo("الصف الثاني ثانوي");}
                  if($_GET['grade']==="3"){echo("الصف الثالث ثانوي");}
            ?>
        </h3>
        <div class='course-warp'>
            <!-- -------container-------- -->
            <div class="book-container">
                <div class="column">
                  <div class="panel__image panel__image--book">
                      <div class="books__book__img">
                        <img src="./img/book/third-s.png" class="book-book-book-img" id="semester-3" name="3" style="filter: contrast(170%);" onclick="onClickSemester_3()">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="panel__image panel__image--book">
                      <div class="books__book__img">
                        <img src="./img/book/second-s.png" class="book-book-book-img" id="semester-2" name="2" style="filter: contrast(150%);" onclick="onClickSemester_2()">
                      </div>
                    </a>
                  </div>
                </div>
              <div class="column">
                <div class="panel__image panel__image--book">
                    <div class="books__book__img">
                      <img src="./img/book/first-s.png" class="book-book-book-img" id="semester-1" name="1" style="filter: contrast(130%);" onclick="onClickSemester_1()">
                    </div>
                  </a>
                </div>
              </div>           
            </div>
    </section>
    <!-- course section end -->
 
    <!--======Javascripts & Jquery======-->
        <script src='js/jquery-3.2.1.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/mixitup.min.js'></script>
        <script src='js/main.js'></script>
        <script>
            function onClickSemester_1() {
                const url = new URL(location.href);
                const semester = document.getElementById('semester-1').name;
                location.href = `subjects.php${url.search}&semester=${semester}`;
            }
            
            function onClickSemester_2() {
                const url = new URL(location.href);
                const semester = document.getElementById('semester-2').name;
                console.log('Grade Semester:', semester);
                location.href = `subjects.php${url.search}&semester=${semester}`;
            }

            function onClickSemester_3() {
                const url = new URL(location.href);
                const semester = document.getElementById('semester-3').name;
                console.log('Grade Semester:', semester);
                location.href = `subjects.php${url.search}&semester=${semester}`;
            }
            function subjectsSearch(e){
                if(e.keyCode === 13){
                    const subName = document.getElementById('subSearch').value
                    location.href = `subjects.php?subjects=${subName}`
                }
            }
            function subjectSearch(){
                const subName = document.getElementById('subSearch').value
                console.log('Button:', subName);
                location.href = `subjects.php?subjects=${subName}`;
            }
        </script>
</body>

</html>