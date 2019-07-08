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

                        // $user = new User();
                        // $user->username = 'nchomksy';
                        // $user->password = "pizza";
                        // $user->first_name = 'noam';
                        // $user->last_name = 'chomsky';
                        // $user->save();

                         $users = User::find_all();
                         print_r($users);
                        

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