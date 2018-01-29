<?php 
session_start();
include"connect.php";

if (isset($_SESSION['user'])&& isset($_SESSION['pass'])==true){

$sql="SELECT * FROM user WHERE Uname='$_SESSION[user]'AND Upass='$_SESSION[pass]'";
if ($res=mysqli_query($link,$sql)){
  if (mysqli_num_rows($res)==1){

}
else{
  header('location:Qaddhahome.php');
}
}
else{
   header('location:Qaddhahome.php');
}

}
else{
  header('location:Qaddhahome.php');
}
?>
<?php include"Qheader.php";?>
 <title>قدّها: ملف المستخدم</title>
            <div id="page-inner">
            <div class="panel-body">
              <div class="row">
                <?php
        $uid = $_SESSION['user'];
        $sql = "SELECT * FROM goal WHERE G_status='public' and U_name='$uid'";
        if ($result = mysqli_query($link,$sql)){
 
            while($row = mysqli_fetch_array($result))
            {
                ?>
<div class="container-fluid text-center" >
    <h2 align="center" style=" font-family:Droid Arabic Naskh,Roboto;">Timeline</h2>
        <div class="row">
    <div class="col-sm-4" >
        <div class="card">
                  <div class="card-block">
                    <h3 class="card-title" style="font-family:Lalezar,Roboto;"><?php echo $row['Gname']; ?></h3>
                    <p class="card-text"  style="font-size:16px; font-family:Droid Arabic Naskh,Roboto;"></p>
                    <!-- AddToAny BEGIN -->
       <a class="a2a_dd" href="https://www.addtoany.com/share">
    <img src="https://static.addtoany.com/buttons/share_save_171_16.png" width="171" height="16" border="0" alt="Share"/></a>
 
                  </div><!--end card-->
                </div>
            </div><!--end col .4-->
  </div><!--end row-->
</div>
<?php
            }
        }
     ?>
 
          </div><!--end row-->
        </div>
      </div><!--end pannel-->
      <script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
</body>
</html>