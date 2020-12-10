<?php
require_once('config.php')
?>
<?php
    
    
if(isset($_POST)){
    
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $major = $_POST['major'];
    $minor = $_POST['minor'];
    $organizations= $_POST['organizations'];
    
    $sql = "INSERT INTO Students (firstname, lastname, email, major, minor, organizations) VALUES (?,?,?,?,?,?)";
    $stminsert = $db->prepare($sql);
    $result = $stminsert->execute  ([$firstname, $lastname, $email, $major,$minor, $organizations]);
    if($result){
        echo 'Successfully saved.';    
    }else{
        echo 'Their were errors while saving data';
    }
}else {
    echo 'No Data';
}
