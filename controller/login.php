<?php

if(isset($_POST['username'])&& isset($_POST['password']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    login($username,$password);       
}
else{
    header('Location: ../view/welcome.php');
}

// Fungsi untuk login
function login($username1,$password1)
{
 include "connect.php";
 $result = pg_query($conn,"SELECT username, created_by, password, jenis_user
 FROM public.user_pmdk WHERE username='$username1' AND password='$password1'");
 $rows = pg_num_rows($result);
//  echo $rows;
if($rows==1)
{
    session_start();
    while ($row=pg_fetch_assoc($result)) {
        $_SESSION['username']=$row['username'];
        $_SESSION['jenis_user']=$row['jenis_user'];
    }
    
    if($_SESSION['jenis_user']=='admin')
    {
        header('Location: ../view/admin/admin.php');
    }
    else if($_SESSION['jenis_user']=='siswa')
    {
        header('Location: ../view/siswa/siswa.php');
    }
    else if($_SESSION['jenis_user']=='sekolah')
    {
        header('Location: ../view/sekolah/sekolah.php');
    }
    else
    {
        session_destroy();
    }
}
else
{
    header('Location: ../view/welcome.php');
}

}

function logout()
{
    
}

?>