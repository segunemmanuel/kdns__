<?php

function set_message($msg){
    if(!empty($msg)) {
        $_SESSION['message']= $msg;
    }
    else{
        $msg="";
    }

}

function display_message(){
    if(isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}


// FUNCTION TO CREATE URL REDIRECTS


function redirect($location){
    header("Location:$location");
}

// FUNCTION TO QUERY CONNECTION FROM DB
function query($sql){
    global $connection;
    return  mysqli_query($connection, $sql);
}



// FUNCTION TO QUERY DB RESULT AND LOG ERRORS

function confirm($result){
    global $connection;
    if(!$result){
        die("Error". mysqli_error($connection));
    }
}

// FUNCTION TO PREVENT SQL INJECTIONS
function espace_string($string){
    global $connection;
    return mysqli_real_escape_string($connection,$string);

}

// FUNCTION TO DISPLAY DB AS ARRAY
function fetch_array($result){
    return mysqli_fetch_array($result);
}

//   FETCh JOBS FROM DB

function get_jobs(){
    global $connection;

$result=query("SELECT * FROM gigs");
confirm($result);
while($row=fetch_array($result)){

    $gig_id=$row['user_id'];
$gig_job=$row['user_job'];
$gig_company=$row['company'];
$gig_date=$row['date'];
$salary_min=number_format($row['salary_min'],0);
$salary_max=number_format($row['salary_max'],0);
$get_gigs=<<<DELIMITER
<tr>
<td><input type="checkbox" class="muted"></td>
<td>$gig_job</td>
<td>$gig_company</td>
<td>$gig_date</td>
<td> $salary_min - $salary_max</td>
<td>
<a href="../resources/delete.php?id=$gig_id" class="btn btn-warning get_job">Delete</a></td>
</tr>
DELIMITER;
echo $get_gigs;
};
}



function delete_jobs(){
    global $connection;
      $the_gig_id=espace_string($_GET['id'],$connection);
      $result=query("DELETE FROM gigs WHERE user_id={$the_gig_id} ");
    //  $delete=confirm($result);     
     if($result){
        set_message("Deleted");
     redirect("../public/index.php?gigs");

        }
        
        else{
 
            set_message("Unsuccessful");
            redirect('Location:../public/index.php?gigs');

        }
        
  
}


function insert_gigs_basic_info(){
 
$max=$_POST['max'];
$min=$_POST['min'];
$date=date("Y-m-d",strtotime($_POST['date']));


$query = query("INSERT INTO gigs(user_job,company,date,salary_min,salary_max,country,state,tag,address) VALUES('{$_SESSION['role']}','{$_SESSION['company']}','{$date}',{$min},{$max},'{$_SESSION['country']}','{$_SESSION['state']}','{$_SESSION['tags']}','{$_SESSION['address']}')");
confirm($query);


if($query){
    set_message("Created");
 redirect("../public/index.php?basic");
    }
    else{

        set_message("Unsuccessful");
        redirect('../public/index.php?basic');

    }
}



function insert_gigs_basic_infos(){
  $_SESSION['role']=$_POST['role'];
   $_SESSION['company']=$_POST['company'];
    $_SESSION['country']=$_POST['country'];
    $_SESSION['state']=$_POST['state'];
   $_SESSION['address']=$_POST['address'];
    $_SESSION['tags']=$_POST['tags'];
     
}
    



?>