<div class="container px-4">
<section id="dashboard" >
  
                <h3 class="fw-bold" style="color:#21DB00"><i
                    class="uil uil-chart-bar fs-4 me-2 "></i>Dashboard</h3>
                    <div class="cover_image " style="background-image: url(http://localhost/MVC_Planet.Dev/public/assets/img/cover.jpg);background-size:cover; border-radius:10px"  >
                    <div class="container mb-4">
                        <div class="row">
                            <div class="col-md-12 p-5 pb-5 text-white">
                                <h5 class="fw-bolder">Welcome !</h5>
                                <p class="fs-4 fw-bold">Hanane Hanane</p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta ab tempore quo.<br>
                                   
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque tenetur quod cumque?
                                </p>
                                <h6 class="fw-bolder">Search an Article here </h6>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 d-flex justify-content-around">
                    <div class="col-lg-3 col-md-5 col-11 " >
                        <div class="p-3 shadow-sm d-flex bg-white justify-content-around align-items-center rounded border">
                            <div>                      
                                <h3 class="fs-2 mycolor">
                                   10
                                </h3>

                                <p class="fs-5 text-black">Authors</p>
                            </div>    
                           
                            <i class="uil uil-edit-alt fs-3 mycolor box rounded py-2  px-3"></i>          
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3 shadow-sm d-flex bg-white justify-content-around align-items-center rounded border">
                            <div>
                         

                                <h3 class="fs-2 mycolor">
                                   40
                                </h3>

                                <p class="fs-5 text-black">Users</p>
                            </div>
                            <i class="uil uil-book-reader fs-3 mycolor box rounded py-2  px-3 "></i>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3  shadow-sm d-flex bg-white justify-content-around align-items-center rounded  border"> 
                            <div>
                                <h3 class="fs-2 mycolor">100</h3>
                                <p class="fs-5 text-black">Articals</p>
                            </div>
                            <i class="uil uil-bookmark fs-3 mycolor rounded py-2  px-3 box"></i>
                            
                        </div>
                    </div>

                    
                    <div class="col-lg-3 col-md-5 col-11">
                        <div class="p-3  shadow-sm d-flex bg-white justify-content-around align-items-center rounded border"> 
                            <div>

                                <h3 class="fs-2 mycolor">3
                                   
                                </h3>

                                <p class="fs-5 text-black">Today Articals</p>
                            </div>
                            <i class="uil uil-download-alt fs-3 mycolor  rounded py-2  px-3 box"></i>
                        </div>
                    </div>
                </div>

                  <section class="mt-5 ms-3 justify-content-between gap-3">
                  <p class="fs-5 ms-2 mycolor">New Articles:</p>
                  <div class=" table-responsive mt-2">
                                           <table class="table border-secondary text-center table-hover ">
                                            <tr class="top-0 position-sticky bg-light">
                                                <td class="mycolor fw-bold ">Title</td>
                                                <td class="mycolor fw-bold">Categorie</td>
                                                <td class="mycolor fw-bold">Content</td>
                                                <td class="mycolor fw-bold">Actions</td>
                                            </tr>
                                            <?php   
                                            foreach($res as $article){ ?>
                                            <tr class="bg-light border-bottom-0">
                                                <td class="text-dark"><?= $article["article_title"]?></td>
                                                <td class="text-dark"><?= $article["categorie"]?></td>
                                                <td class="text-dark"><button type="button" class="btn btn-primary btn-sm">View Content</button></td>
                                                <td class="text-dark"><button type="button" class="btn btn-success btn-sm">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                            </tr>
                                            <?php } ?>
                                           </table>
                         </div>
                      
                     
                  </section>
                </section>
                </div>
