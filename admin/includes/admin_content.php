            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        

                        <?php

                        //  $new_user = new User();
                        //  $new_user->username = "theAnswer";
                        //  $new_user->password = "sixers";
                        //  $new_user->first_name = "Allen";
                        //  $new_user->last_name = "Iverson";

                        // $new_user->create();

                        // $user = User::find_user_by_id(1);
                        // $user->last_name ="Williams";
                        // $user->update();

                        // $sql = "DELETE FROM users WHERE id= " . 5;
                        // echo $sql;

                        $user = User::find_user_by_id(3);
                        $user->delete();



                        
            

                
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