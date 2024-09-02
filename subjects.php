<?php include './upload/filesLogic.php';?>
<?php
// connect to the database
$conn = mysqli_connect( 'localhost', 'root', '', 'file_management' );

if ( isset( $_GET['grade'] ) && isset( $_GET['semester'] )) {

    # code...
    $grade = $_GET['grade'];
    $semester = $_GET['semester'];

    // $sql = 'SELECT * FROM files';
    if ( $grade ) {
        # code...
        $sql="SELECT*FROM files WHERE grade='$grade' AND semester='$semester'";
    }
    $result = mysqli_query( $conn, $sql );


}

if(isset($_GET['subjects'])){
    $subName = $_GET['subjects'];
    
    $sql="SELECT*FROM files WHERE subjects LIKE '%$subName%'";
    $result = mysqli_query($conn, $sql);
}

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM files WHERE id=$id");
    // $result_del = mysqli_query($conn, "DELETE FROM files WHERE id=$id");
}


$conn->close();
?>

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
                <span>المواد الدراسية </span>
                <a href='courses.php'>/فصل دراسي</a>
                <a href='courses.php'>/المراحل الدراسية</a>
                <a href='index.php'>/الصفحة الرئيسية</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->

    <!-- search section -->
    <section class='search-section ss-other-page'>
    <img src="img/3.png" style="position:absolute; top:443px; z-index:-1;">
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
                    <form sytle="display:flex; align-items:center;">
                        <a href='./upload/index.php' class='site-btn mr-2 ml-4' style="left:190px;">ارفع</a>
                        <button class='site-btn'  onclick='subjectSearch()' style="margin-left:360px;">بحث</button>
                        <input type='text' id='subSearch' class="subjectSearch" onkeypress='subjectsSearch(event)' name='subjects' placeholder='البحث...' value="<?php if(isset($subName)){echo($subName);} ?>">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- search section end -->
    <!-- course section -->
    <section class='course-section spad pb-0'>
    <h3 style="text-align:center; color:gold;  margin-bottom:100px; font-family:Arial, Helvetica, sans-serif;">
        <?php if(isset($grade)&&isset($semester)){
                if($grade==="1"){echo("الصف الأول");}
                if($grade==="2"){echo("الصف الثاني");}
                if($grade==="3"){echo("الصف الثالث");}
                echo(" ");
                echo("-");
                echo(" ");
                if($semester==="1"){echo("الفصل الدراسي الأول");}
                if($semester==="2"){echo("الفصل الدراسي الثاني");}
                if($semester==="3"){echo("الفصل الدراسي الثالث");}
            }
            ?>
        </h3>
        <div class='course-warp'>
            <div class='row course-items-area'>
                <!-- course -->
                
                    <?php
                        if ( isset($result->num_rows) &&  $result->num_rows > 0 ) {
                            // output data of each row
                            while( $row = $result->fetch_assoc() ) {
                            echo "<div class='course-list-map'>
                                  <div class='course-item'>
                                   <a href='#demo-modal?id=".$row['id']."'><img src='img/courses/7.png' class='course-img'></a>
                                   <div class='course-info'>
                                    <div class='course-text'>
                                        <h5>".$row['subjects'].
                                        "</h5>
                                    </div>
                                    </div>
                                    </div>
                                    </div>";

                            // modal page
                            echo '<div id="demo-modal?id='.$row["id"].'" class="modal">
                            <div class="modal__content">
                                <h3 style="text-align:center;">'.$row['subjects'].'</h3>
                                <hr>
                                <br>
                                <div class="modal_h5">
                                <h5>المدرسة: '.$row['school'].'</h5>
                                <h5>المعلم: '.$row['teacher'].'</h5>
                                </div>
                                <br>
                                <div class="modal_h5">
                                <h5>النوع: '.$row['filetype'].'</h5>
                                <h5>التاريخ: '.$row['dates'].'</h5>
                                </div>
                                <br>
                                <div class="modal_h5">
                                <h5>الصف: '.$row['grade'].'</h5>
                                <h5>الفصل الدراسي: '.$row['semester'].'</h5>
                                </div>
                                <hr>
                                <br>
                                <h6>'.$row['info'].'</h6>
                                <br>
                                <div class="modal_button">
                                <button class="modal_btn"><a href="/upload/uploads/'.$row['name'].'">للمعاينة</a></button>                                
                                <button class="modal_btn"><a href="/upload/downloads.php?file_id='.$row['id'].'">تنزيل</a></button>
                                </div>
                                <br>                                              
                                <a href="#" class="modal__close">&times;</a>
                            </div>
                        </div>';
                            }
                        } else {
                            echo '<h3 class="emptyMessage">ليس لديك أي بيانات. يرجى المحاولة مرة أخرى!</h3>';
                        }
                    ?>                
            </div>
    </section>
    <!-- course section end -->

    <!--======Javascripts & Jquery======-->
        <script src='js/jquery-3.2.1.min.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/mixitup.min.js'></script>
        <script src='js/main.js'></script>
</body>

</html>