<div class="container">
<section id="dashboard" >
  
                <h3 class="fw-bold" style="color:#21DB00"><i
                    class="uil uil-chart-bar fs-4 me-2 "></i>Dashboard</h3>
                    <div class="cover_image " style="background-image: url(http://localhost/MVC_Planet.Dev/public/assets/img/cover.jpg);background-size:cover; border-radius:10px"  >
                    <div class="container mb-4">
                        <div class="row">
                            <div class="col-md-12 p-5 pb-5 text-white">
                                <h5 class="fw-bolder">Welcome !</h5>
                                <p class="fs-4 fw-bold"><?= $_SESSION["name"]?></p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta ab tempore quo.<br>
                                   
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque tenetur quod cumque?
                                </p>
                                <h6 class="fw-bolder">Search an Article here </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 d-flex justify-content-around">
                    <div class="col-lg-4 col-md-5 col-11 " >
                        <div class="p-3 shadow-sm d-flex bg-white justify-content-around align-items-center rounded border">
                            <div>                      
                                <h3 class="fs-2 mycolor">
                                <?= $states["categories"]?>
                                </h3>

                                <p class="fs-5 text-black">Categories</p>
                            </div>    
                           
                            <i class="uil uil-edit-alt fs-3 mycolor box rounded py-2  px-3"></i>          
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-11">
                        <div class="p-3 shadow-sm d-flex bg-white justify-content-around align-items-center rounded border">
                            <div>
                         

                                <h3 class="fs-2 mycolor">
                                   <?= $states["admins"]?>
                                </h3>

                                <p class="fs-5 text-black">Admins</p>
                            </div>
                            <i class="uil uil-book-reader fs-3 mycolor box rounded py-2  px-3 "></i>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5 col-11">
                        <div class="p-3  shadow-sm d-flex bg-white justify-content-around align-items-center rounded  border"> 
                            <div>
                                <h3 class="fs-2 mycolor"><?= $states["articles"]?></h3>
                                <p class="fs-5 text-black">Articles</p>
                            </div>
                            <i class="uil uil-bookmark fs-3 mycolor rounded py-2  px-3 box"></i>
                            
                        </div>
                    </div>

                    
                    
                </div>

                  <section class="mt-5 ms-3 justify-content-between gap-3">
                  <p class="fs-5 ms-2 mycolor">New Articles:</p>
                  <div class=" table-responsive mt-2">
                  <table class="table border-secondary text-center table-hover text-white bg-white" id="articles1">
                                            <thead>
                                            <tr class="top-0 position-sticky bg-light">
                                                <td class="mycolor fw-bold ">Title</td>
                                                <td class="mycolor fw-bold">Categorie</td>
                                                <td class="mycolor fw-bold">Content</td>
                                                <td class="mycolor fw-bold">Actions</td>
                                            </tr>

                                            </thead>
                                            
                                            <?php   
                                             foreach($articles as $article){ ?>
                                                <tr class="bg-light border-bottom-0">
                                                    <td class="text-dark"><?= $article->title?></td>
                                                    <td class="text-dark"><?= $article->categorie->name?></td>
                                                    <td class="text-dark" style="min-width:70px;"><button type="button" onclick="fillShowArticle(<?= $article->id?>)" data-bs-toggle="modal" data-bs-target="#view-Art"class="btn btn-primary btn-sm" style="width:100px">View Content</button></td>
                                                    <td class="text-dark" style="min-width:140px;">
                                                    
                                                      <form action="" method="post"><input type="hidden" name="id_Art" value="<?= $article->id?>"><button type="button" class="btn btn-success btn-sm me-2" style="width:60px" onclick="fillEditArticle(`<?= $article->id?>`)"data-bs-toggle="modal" data-bs-target="#editArticle">Edit</button><button type="submit" name="deleteArt" class="btn btn-danger btn-sm" style="width:60px">Delete</button></form></td>
                                                </tr>
                                               
                                                <?php }?>
                                           
                                           </table>
                         </div>
                      
                     
                  </section>
                </section>
                </div>
                <script src="http://localhost/MVC_Planet.Dev/public/assets/js/articles.js"></script>