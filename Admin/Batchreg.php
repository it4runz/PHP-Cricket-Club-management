<?php
include('hed.php');
?>
    <!--//sub-heard-part-->
    <div class="graph-visual tables-main">

        <h2 class="inner-tittle">Batch Registration</h2>
        <div class="graph">
            <div class="tables" style="color:black;">

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact No</th>
                            <th>Batch Type</th>

                        </tr>
                    </thead>
                    <?php
			$con = mysqli_connect('localhost','root','','cricket club management system');
			$sq="select * from batchreg";
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
                                <?php echo $r['batchtype'];?>
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