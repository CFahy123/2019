            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        

                        <?php

                        // $new_photo = new Photo();
                        // $new_photo->title = "check";
                        // $new_photo->photo_id = 8;
                        // $new_photo->size = 125;
                        // $new_photo->save();

                        $photo = Photo::find_by_id(11);
                        echo $photo->title;

                        $user = User::find_by_id(2);
                        echo $user->username;


                        // $photos = Photo::find_all();
                        // //print_r($users);
                        // foreach ($photos as $photo) {
                        //     echo $photo->title . "<br>";
                        // }

                         echo SITE_ROOT;
                        
                            
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