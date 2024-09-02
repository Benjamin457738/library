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
                <span>المراحل الدراسية</span>
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
        <div class='course-warp'>
            <!-- -------container-------- -->
            <div class="book-container">
                <div class="column">
                  <div class="panel__image panel__image--book">
                      <div class="books__book__img">
                        <img src="./img/book/third-g.png" class="book-book-book-img" id='grade-3' name="3" style="filter: contrast(170%);" onclick="onClickGrade_3()">
                      </div>
                    </a>
                  </div>
                </div>
                <div class="column">
                  <div class="panel__image panel__image--book">
                      <div class="books__book__img">
                        <img src="./img/book/second-g.png" class="book-book-book-img" id='grade-2' name="2" style="filter: contrast(150%);" onclick="onClickGrade_2()">
                      </div>
                    </a>
                  </div>
                </div>
              <div class="column">
                <div class="panel__image panel__image--book">
                    <div class="books__book__img">
                      <img src="./img/book/first-g.png" class="book-book-book-img" id='grade-1' name="1" style="filter: contrast(130%);" onclick="onClickGrade_1()">
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
            function onClickGrade_1() {
                const grade = document.getElementById('grade-1').name
                console.log('Grade value:', grade);
                location.href = `semester.php?grade=${grade}`;
            }
            function onClickGrade_2() {
                const grade = document.getElementById('grade-2').name
                console.log('Grade value:', grade);
                location.href = `semester.php?grade=${grade}`;
            }

            function onClickGrade_3() {
                const grade = document.getElementById('grade-3').name
                console.log('Grade value:', grade);
                location.href = `semester.php?grade=${grade}`;
            }

            function subjectsSearch(e){
                if(e.keyCode === 13){
                    const subName = document.getElementById('subSearch').value
                    location.href = `subjects.php?subjects=${subName}`
                }
            }
            function subjectSearch(){
                    const subName = document.getElementById('subSearch').value
                    location.href = `subjects.php?subjects=${subName}`
            }
        </script>
</body>

</html>