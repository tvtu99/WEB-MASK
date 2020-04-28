<?php
include("funconnect.php");
global $conn;
db_connect();
if(isset($_POST['id'])){
    $id=$_POST['id'];
  
$sql="SELECT kt.TenKhauTrang, kt.KhauTrangID FROM khautrang kt ,hieukhautrang hkt WHERE kt.HieuKhauTrangID=hkt.HieuKhauTrangID AND hkt.HieuKhauTrangID='{$id}'";
    $query=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($query)){
       $kt=$row['KhauTrangID'];
       $khautrang=$row['TenKhauTrang'];
       echo "<option value='$kt'>$khautrang</option>";
    }
    
 }

 if(isset($_POST['hktid'])){
    if($_POST['hktid'] !=''){
    $hktid=$_POST['hktid'];
    $sql="SELECT kt.TenKhauTrang, kt.KhauTrangID,kt.NUOCSX,kt.Gia,kt.SoLuong,hkt.TenHieuKT FROM khautrang kt ,hieukhautrang hkt WHERE kt.HieuKhauTrangID=hkt.HieuKhauTrangID AND hkt.HieuKhauTrangID='{$hktid}'";
    $query=mysqli_query($conn,$sql);
   //  $kq=mysqli_fetch_array($query,MYSQLI_ASSOC);
   //  echo count($kq);
   //  echo $kq['TenKhauTrang'];

   while($row=mysqli_fetch_assoc($query)){
       echo "<tr>";
       echo '<td>' . $row['KhauTrangID'] . '</td>';
       echo '<td>'. $row['TenKhauTrang'] . '</td>';
       echo '<td>' . $row['TenHieuKT'] . '</td>';
       echo '<td >' . $row['NUOCSX'] . '</td>';
       echo '<td >' . $row['Gia'] . '</td>';
       echo '<td>' . $row['SoLuong'] . '</td>';
       echo '<td><b style="font-size:20px"><a href="EditUs.php?id=' . $row['userid'] . ' "  ><i class="lnr lnr-pencil"></i></a></b>
               <b style="font-size:20px; margin-left:12%"><a  href="deleteUs.php?id=' . $row['userid'] . '"   ><i class="lnr lnr-trash"></i></a></b></td>';
       echo "</tr> ";


   };
}else{
   $sql="SELECT *FROM khautrang";
   $query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
   echo "<tr>";
   echo '<td>' . $row['KhauTrangID'] . '</td>';
   echo '<td>'. $row['TenKhauTrang'] . '</td>';
   echo '<td>'. $row['HieuKhauTrangID'] . '</td>';
   echo '<td >' . $row['NUOCSX'] . '</td>';
   echo '<td >' . $row['Gia'] . '</td>';
   echo '<td>' . $row['SoLuong'] . '</td>';
   echo '<td><b style="font-size:20px"><a href="EditUs.php?id=' . $row['KhauTrangID'] . ' "  ><i class="lnr lnr-pencil"></i></a></b>
           <b style="font-size:20px; margin-left:12%"><a  href="deleteUs.php?id=' . $row['KhauTrangID'] . '"   ><i class="lnr lnr-trash"></i></a></b></td>';
   echo "</tr> ";


};


}
}
?>