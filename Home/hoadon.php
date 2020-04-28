<!-- Tạo nút tạo hóa đơn,lưu mã hóa đơn,insert từng cthd -->
<?php 
session_start();
if(!isset($_SESSION['log_users'])){
    header('Location:login.php');
}

 ?>
<?php $page='hoadon'; ?>
<?php
include("navbar.php");

?>
<?php
include("sidebar.php");
?>
 
        <!-- main -->
        <div class="main">
            
            <div class="main-content">
            <h3 class="page-title" style="margin-top: 0;margin-bottom: 30px;font-weight: 300;padding-left: 15px;">Bill</h3>
                <div class="container-fluid">
                    
                  
                    <div class="panel">
                        
                        <!-- <div class="panel-head">
                            <h3 class="home-page">
                             Bill 
                            </h3>
                        </div>
                         -->
                        <div class="panel-body">
                       
                                    <!-- <div class="form-group row">
                                        <label  class="col-sm-5 col-form-label">Số Lượng</label>
                                        <div >
                                            <select id="TenKhauTrang"  class="form-control" name="TenKhauTrang"  >
                                            <option value="">0</option>  
                                            </select>
                                            
                                        </div> 

                                    </div>  -->
                                   

                            <div class="row">
                              
                                <div class="col-md-4">
                                    <h5 style="font-size: 18px;font-weight: 300;padding-top: 20px;padding-bottom: 20px;">
                                            
                                      Customer Information
                                    </h5> 
                                    <span class="badge badge-default" style="font-size: 14px;font-weight: 400; ">Họ Tên</span>
                                    <input class="form-control mr-sm-2" type="text" style="margin-bottom:10px" placeholder="Name">
                                    <span class="badge badge-default" style="font-size: 14px;font-weight: 400;">Địa Chỉ</span>
                                    <input class="form-control mr-sm-2" type="text"  style="margin-bottom:10px" placeholder="Adress">
                                    <span class="badge badge-default" style="font-size: 14px;font-weight: 400;">Điện thoại</span>
                                    <input class="form-control mr-sm-2" type="text"  style="margin-bottom:10px" placeholder="Phone">
                                    <span class="badge badge-default" style="font-size: 14px;font-weight: 400;">Ngày Sinh</span>

                                    <div class="input-group">
                                        <input type="date" placeholder="Phone">   
                                    </div>
                                </div>

                                <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row"  >
                                            <label  class="col-md-12" >Tên Khẩu Trang</label>
                                            <div class="hkt" >
                                                <select id="TenKhauTrang"  class="form-control" name="ten"  >
                                                    <?php 
                                                        require('funconnect.php');
                                                        global $conn;
                                                        db_connect();
                                                        $sql="SELECT * FROM `khautrang`";
                                                        $mysql=mysqli_query($conn,$sql);
                                                        while($row=mysqli_fetch_array($mysql)){
                                                            ?>
                                                            <option value="<?php echo $row['KhauTrangID']; ?>"><?php echo $row['TenKhauTrang'] ?></option>
                                                            <?php
                                                        }
                                                    ?>   
                                                </select>
                                            </div>
                                            <!-- end htk --> 
                                        </div>  
                                    
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group row">
                                            <label  class="col-md-12 col-form-label"> Số Lượng</label>
                                            <div class="hkt col-12">
                                                <input type="text" name="" id="">
                                            </div>                                    
                                        </div>
                                         

                                    </div>
                                    <div class="col-md-3">
                                            <button type="button" class="btn btn-primary" style="margin-top:15px;margin-left:80px">
                                                Thêm
                                            </button>
                                        </div> 
                                </div>
                               
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Product
                                                </th>
                                                <th>
                                                    Payment Taken
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    TB - Monthly
                                                </td>
                                                <td>
                                                    01/04/2012
                                                </td>
                                                <td>
                                                    Default
                                                </td>
                                            </tr>
                                            <tr class="table-active">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    TB - Monthly
                                                </td>
                                                <td>
                                                    01/04/2012
                                                </td>
                                                <td>
                                                    Approved
                                                </td>
                                            </tr>
                                            <tr class="table-success">
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    TB - Monthly
                                                </td>
                                                <td>
                                                    02/04/2012
                                                </td>
                                                <td>
                                                    Declined
                                                </td>
                                            </tr>
                                            <tr class="table-warning">
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    TB - Monthly
                                                </td>
                                                <td>
                                                    03/04/2012
                                                </td>
                                                <td>
                                                    Pending
                                                </td>
                                            </tr>
                                            <tr class="table-danger">
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    TB - Monthly
                                                </td>
                                                <td>
                                                    04/04/2012
                                                </td>
                                                <td>
                                                    Call in to confirm
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    <button type="button" class="btn btn-success" id="btn-success" style="margin-left:83%">
                                       Thanh Toán
                                    </button>
                                
                                </div>
                                
                                    
                            </div>

                                                                          
                                </div>
                                
                        
                            

            </div>
        
           
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.min.js"></script>
            <script src="../js/style.js"></script>
            <script src="../js/fontawesome.min.js"></script>
            <script src="../js/all.js"></script>
            </body>

            </html>