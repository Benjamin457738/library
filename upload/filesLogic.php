<?php
header('Content-Type: text/html; charset=utf-8');
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'file_management');

$sql = "SELECT * FROM files";


$result = mysqli_query($conn, $sql);


$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extensionn
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
    
    // summary upload on the server
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $school = $_POST['school'];
    $teacher = $_POST['teacher'];
    $info = $_POST['info'];
    $type = $_POST['filetype'];
    $grade = $_POST['year'];
    $semester = $_POST['semester']; 
    $file_name = $_POST['fileName'];

    if(!$subject||!$date||!$school||!$teacher||!$info||!$type||!$file_name){
        echo '<script language="javascript">';
        echo 'alert("يجب عليك تصحيح الكتابة.")';
        echo '</script>';
        return;
    }

    if (!in_array($extension, ['pdf'])) {
        echo '<script language="javascript">';
        echo 'alert("يجب أن يكون امتداد الملف الخاص بك .pdf")';
        echo '</script>';
    } elseif ($_FILES['myfile']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
        echo "الملف كبير جدًا!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO files (name, size, downloads, subjects, dates, info, school, teacher, filetype, grade, semester, file_name) VALUES ('$filename', $size, 0, '$subject', '$date', '$info', '$school', '$teacher', '$type', '$grade', '$semester', '$file_name')";
            echo($sql);
            $result = mysqli_query($conn, $sql);
            if($result = 1){
                echo '<script language="javascript">';
                echo 'location.href = `/courses.php`';
                echo '</script>';
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}


// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM files WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        
        //This part of code prevents files from being corrupted after download
        ob_clean();
        flush();
        
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
