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
                            
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0" style="font-size:30px;">Recent Quotation</h3>
                                <div class="col-md-3 col-sm-3 col-xs-6 ms-auto" >
                                    <p> Sorted by: 
                                    <select class="form-select shadow-none row border-top" >
                                        <option>Date (newest)</option>
                                        <option>Date (oldest)</option>
                                        <option>Pending</option>
                                        <option>Accepted</option>
                                        <option>Rejected</option>

                                    </select>
                                    </p>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-6 ms-auto" >
                                    <a class="btn btn-light" href="quotationadd.php" > 
                                        <span><i class="fas fa-plus" aria-hidden="true"></i></span>
                                        <span class="hide-menu">Add Quotation</span></a>

                                </div>

                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No.</th>
                                            <th class="border-top-0">Quotation ID</th>
                                            <th class="border-top-0">Service ID</th>
                                            <th class="border-top-0">Date </th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $i = 1;
                                            while ($row = mysqli_fetch_array($result)){

                                                echo "<tr>";
                                                echo "<td> ".$i++."</td>";
                                                echo "<td> ".$row['q_quotationID']."</td>";
                                                echo "<td> ".$row['q_serviceID']."</td>";
                                                echo "<td> ".$row['q_date']."</td>";
                                                echo "<td> ".$row['q_statusID']."</td>";
                                                echo "<td>";
                                                    echo "<a href = 'quotationmodify.php?id=".$row['q_quotationID']."' class='btn btn-warning'> Modify </a> &nbsp";
                                                    echo "<a href = 'quotationcancel.php?id=".$row['q_quotationID']."' class='btn btn-danger'> Cancel </a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Real Homes WP Theme
                                                <a class="qview" href="quotationadd.php" > 
                                                    <i class="fas fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                            <td>
                                                <a class="qedit"href="quotationmodify.php" > 
                                                    <i class="fas fa-edit" aria-hidden="true"></i>
                                                </a> &nbsp
                                                <a class="qcancel"href="quotationcancel.php" > 
                                                    <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                                </a>
                                            </td>



                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td>EXTENDED</td>
                                            <td class="txt-oflo">April 19, 2021</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td>TAX</td>
                                            <td class="txt-oflo">April 20, 2021</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 21, 2021</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td>SALE</td>
                                            <td class="txt-oflo">April 23, 2021</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Helping Hands WP Theme</td>
                                            <td>MEMBER</td>
                                            <td class="txt-oflo">April 22, 2021</td>
                                            <td><span class="text-success">$64</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                <!-- ============================================================== -->
                <!-- End Table -->
                <!-- ============================================================== -->






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
<?php include 'footer.php'?>