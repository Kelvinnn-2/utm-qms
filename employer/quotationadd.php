<?php include 'header.php'; 
//Retrieve booking (JOIN)
$sql = "SELECT * FROM tb_quotation 
        LEFT JOIN tb_service ON tb_quotation.q_serviceID = tb_service.s_serviceID
        LEFT JOIN tb_status ON tb_quotation.q_statusID = tb_status.st_statusID
        WHERE st_statusID != 5
        ";

$result = mysqli_query($con, $sql);

?> 


            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                        <h4 class="page-title"> 
                            <a href="quotation.php" style="color:black;">Quotation</a>
                            /
                            <a href="quotationadd.php" style="color:black;">Add new Quotation</a>
                        </h4>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            
                        <form method="POST" action="quotationaddprocess.php"> 
                            <div class="d-md-flex mb-3">                              
                                <div class="left">                     
                                    <p> 
                                        Ref :
                                        <?php ?>
                                    </p>  

                                    <p> 
                                        Ref No :
                                        <?php ?>

                                    </p>
                                    <br>

                                    <p>
                                        <b> M/S : </b>
                                        <?php echo"<br><br><br><br>"?>
                                    </p>

                                    <p>
                                        <b> RE : 
                                        <?php ?>
                                        </b>
                                    </p>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-6 ms-auto">
                                    <p>
                                        <b> Date :  
                                        <?php ?>
                                        </b>
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover" id="emptbl">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0">Description</th>
                                            <th class="border-top-0">Qty</th>
                                            <th class="border-top-0">Unit Price </th>
                                            <th class="border-top-0">Amount (RM)</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td id="col0">
                                                2. 
                                            </td>
                                            
                                            <td class="txt-oflo" id="col1">
                                                <input type="text" placeholder="item" class="form-control mt-0" required>

                                            </td>
                                            <td style="width:300px;" id="col2">
                                                <input type="number" placeholder="quantity" class="form-control" style="width:140px; float: left; " required>
                                                
                                            
                                                <select type="select" class="form-control" style="width:100px; " required>
                                                    <option value="" disabled selected hidden>type</option>
                                                    <option value="1">nos</option> 
                                                    <option value="2">lot</option>
                                                    <option value="3">unit</option>
                                                    <option value="4">set</option>
                                                </select> 

                                            </td>

                                            <td id="col3">
                                                <input type="text" placeholder="unit price" class="form-control" style="width:100px;" required>
                                            </td>
                                            <td id="col4">
                                                <input type="text" placeholder="Amount" class="form-control" style="width:100px;">
                                            </td>


                                           
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <table> 
                                <tr> 
                                    <td><input type="button" value="Add Row" onclick="addRows()" /></td> 
                                    <td><input type="button" value="Delete Row" onclick="deleteRows()" /></td> 
                                    <td><input type="submit" value="Submit" /></td> 
                                </tr>  
                            </table> 
                        </form>

                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-6 ms-auto" >
                            <a class="btn btn-light" href="quotationadd.php" > 
                                <span><i class="fas fa-plus" aria-hidden="true"></i></span>
                                <span class="hide-menu">Add Item</span></a>

                        </div>


                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->

        <script type="text/javascript">
function addRows(){ 
    var table = document.getElementById('emptbl');
    var rowCount = table.rows.length;
    var cellCount = table.rows[0].cells.length; 
    var row = table.insertRow(rowCount);
    for(var i =0; i <= cellCount; i++){
        var cell = 'cell'+i;
        cell = row.insertCell(i);
        var copycel = document.getElementById('col'+i).innerHTML;
        cell.innerHTML=copycel;
        
    }
}
function deleteRows(){
    var table = document.getElementById('emptbl');
    var rowCount = table.rows.length;
    if(rowCount > '2'){
        var row = table.deleteRow(rowCount-1);
        rowCount--;
    }
    else{
        alert('There should be atleast one row');
    }
}
</script>
<?php include 'footer.php'?>