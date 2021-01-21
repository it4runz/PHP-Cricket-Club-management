<?php
include('hed.php');
?>
    <script>
        function getapproval(id) {

        }
    </script>
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">

        <h2 class="inner-tittle">Ground Booking</h2>
        <div class="graph">
            <div class="tables" style="color:black;">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Purpose</th>
                            <th>Date</th>
                            <th>No Of Day</th>
                            <th>To Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php

			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from groundbooking";
			$sq1=mysqli_query($con,$sq);
			while($r=mysqli_fetch_array($sq1))
			{

			?>
                        <tr>
                            <th>
                                <?php echo $r['id'];?>
                            </th>
                            <th>
                                <?php echo $r['name'];?>
                            </th>
                            <th>
                                <?php echo $r['email'];?>
                            </th>
                            <th>
                                <?php echo $r['contactno'];?>
                            </th>
                            <th>
                                <?php echo $r['purpose'];?>
                            </th>
                            <th>
                                <?php echo $r['date'];?>
                            </th>
                            <th>
                                <?php echo $r['noofday'];?>
                            </th>
                            <th>
                                <?php echo $r['todate'];?>
                            </th>
                            <th>
                                <?php echo $r['amount'];?>
                            </th>
                            <th>
                                <?php if($r['status']==0) echo '<button class="btn-primary" onclick="getapproval('.$r["id"].')">Pending</button>'; else
			echo '<button class="btn-success">Approved</button>';?>
                            </th>

                        </tr>
                        <?php }?>

                </table>
            </div>

        </div>

    </div>
    </div>
    <!--//graph-visual-->
    </div>
    <!--//outer-wp-->

    </div>
    </div>
    <!--//content-inner-->

    <?php
include("sidebar.php");
?>

        </body>

        </html>