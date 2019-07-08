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
                        // $user->username = 'Ozzie';
                        // $user->password = "Ironman";
                        // $user->first_name = 'Ozzie';
                        // $user->last_name = 'Ozborne';
                        // $user->save();

                        $user = User::find_user_by_id(9);
                        $user->username = 'Ozzie2';
                        $user->password = "Ironman2";
                        $user->first_name = 'Ozzie2';
                        $user->last_name = 'Ozborne2';
                        $user->save();

                        // $user = User::find_user_by_id(4);
                        // $user->delete();




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