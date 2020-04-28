
<?php 
session_start();
if(!isset($_SESSION['log_users'])){
    header('Location:login.php');
}

 ?>
<?php $page='kt'; ?>
<?php
include("navbar.php");
?>
    <?php
include("sidebar.php");
?>

<?php 
   function fill_htk(){
    require_once('funconnect.php');
    global $conn;
    db_connect();
    $output='';
    $sql="select*from hieukhautrang";
    $mysql=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($mysql)){
       
        $output .='<option value="'.$row["HieuKhauTrangID"].'">'.$row["TenHieuKT"].'</option>';
       
    }
    return $output;
    
   }
 ?>
 <?php 
 function fill_kt(){
    require_once('funconnect.php');
    global $conn;
    db_connect();
    
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
 ?>
 
 <!-- THONG BAO hiện ra khi click vào nút Thêm-->
 <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Mask</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <form action="">
                    <i class="fa fa-table" aria-hidden="true"></i> &nbsp<a href="AddUser.php">Thêm bằng form</a></br></br>
                    <i class="lnr lnr-file-empty"></i> &nbsp<a href="Exec.php">Thêm bằng file Excel</a></br>
                    
                    </form> 
                    <?php
                        include("Exec.php");
                     ?>
                </div>

            </div>
        </div>
    </div>
        <!-- main -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="panel">
                        <div class="panel-head">
                            <h3 class="home-page">
                                Mask Mangement
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col">
                               
                                <div class="TongQ">
                                    <b>Tất cả( <?php 
                                                  require_once('funconnect.php');
                                                  global $conn;
                                                  db_connect();
                                                  $sql="SELECT SUM(SoLuong)from khautrang";
                                                  $mysql=mysqli_query($conn,$sql);
                                                  $sl=mysqli_fetch_array($mysql);
                                                 echo $sl[0];
                                                //  foreach($mysql as $mysql){
                                                //      echo $mysql[0];
                                                //  }
                                                  
                                                  
                                              ?>   )</b><a href="">Mask</a> 
                                   
                                </div>
               
                                <div class="col-7 d-flex justify-content-end align-items-center" style="margin-left:auto" >
                                    <button class="btn btn-primary " data-toggle="modal" data-target="#myModal" name="btnGui">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Thêm 
                                </div>
                                <div class="rowmask">
                               
                                <div class="form-group row"  method="post">
                                      <label  class="col-sm-2 col-form-label">Thương Hiệu</label>
                                      <div class="hkt" >
                                         
                                         <select id="HieuKhauTrang1"  class="form-control" name="HieuKhauTrang1" method="post" >
                                              <option value="" >Tất cả</option>
                                             
                                               <?php echo fill_htk(); ?>
                                          </select>
                                        
                                      </div> 
                                </div>
                                <div class="form-group row"  method="post">
                                      <div class="table table-hover" id="khautrang" name="khautrang">
                                            <table   style='width:inherit; margin-top:50px'>
                                                <thead >
                                                    <tr>
                                                            <th >Mã Khẩu Trang</th>
                                                            <th>Tên Khẩu Trang</th>
                                                            <th>Thương Hiệu</th>
                                                            <th>Nước SX</th>
                                                            <th>Gía </th>
                                                            <th>Số Lượng</th>
                                                            <th>Operation</th>
                                                        </tr>       
                                                    </thead>
                                                    <tbody id="kt" method="post">
                                                        <?php
                                                        fill_kt();
                                                        
                                                        ?>
                                                    </tbody>

                                            </table>      
         
                                        </div>
                                
                                 </div>
                            </div>    
                           
                        </div>

                    </div>



                </div>


            </div>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/style.js"></script>
            <script src="../js/fontawesome.min.js"></script>
            <script src="../js/all.js"></script>
            <!-- <script>
               $(document).ready(function(){
               $('#HieuKhauTrang1').change(function(){
                   var hkt_id=$(this).val();
                   $.ajax({
                        url:"load.php",
                        method:"POST",
                        data:{htkid:htk_id},
                        success:function(data){
                            $('tbody').html(data);
                        }
                   });
               })
               });
            </script> -->
            </body>

            </html>