<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>

                        <?php 
                            // $user = new User();
                            // $result_set = $user->find_all_user();

                            // while($row = mysqli_fetch_assoc($result_set)) {
                            //     echo $row['username'] . "<br>";
                            // }
                            //Changing the above to uae Static method
                             $user = User::find_user_by_id(1);

                            
                                echo $user['username'] . "<br>";
                            

                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->