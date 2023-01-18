<div class="container-fluid px-4">
<section id="doctors">
                   
                    
                        <div class="d-flex justify-content-between mycolor">
                            <p class="fs-5 ms-2">All Articles(3)</p>
                            <form class="input-group ms-5" style="width:500px;" method="post"action="">
                                <input type="search" name="search_data" class="form-control   rounded" placeholder="Search Article Title or categorie" style="height:30px" />
                                <button type="submit" name="search_doc" class="btn btn-secondary  text-black ms-2 rounded button1 btn-sm border-0" style="height:30px">search</button>
                            </form>
                            <a href='addArticles' class="btn text-black button1 rounded-pill"   style="height:30px"><i class="uil uil-plus text-black" onclick=""></i>&emsp; Add Article</a>
                        </div>
                         <form  class="w-100 d-flex justify-content-around border align-items-center py-2 shadow-sm mt-4"action="" method="post">
                            <div>
                                <label class="text-white">Article : </label>
                                <select class="rounded border-0 button1 px-4 ms-2" name="doctor_id">
                                    <option value="">Categorie</option>
                                    
                                     <option value="regt">grez</option>
                                   
                                </select>
                            </div>
                            <button type="submit" name="filter_app" class="btn text-black button1 rounded-pill"><i class="uil uil-filter me-2 text-black"></i></i>Filter</button>
                        </form>
                         <div class="card-body table-responsive mt-2" style="height: 60vh; overflow: scroll;">
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
                                                <td class="text-dark"><button type="button" class="btn btn-primary btn-sm">full info</button></td>
                                                <td class="text-dark"><button type="button" class="btn btn-success btn-sm">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                            </tr>
                                            <?php } ?>
                                           </table>
                         </div>
</section>
</div>
