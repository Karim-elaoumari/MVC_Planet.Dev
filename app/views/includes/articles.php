<div class="container px-4 ">
<section id="doctors">
                   

                        <div class="d-flex justify-content-between mycolor">
                        <p class="fs-5 ms-2 mycolor">All Articles(3)</p>
                           
                            <a href='addArticles' class="btn text-black button1 rounded-pill"   style="height:30px"><i class="uil uil-plus text-black" onclick=""></i>&emsp; Add Article</a>
                        </div>
                        
                         <form  class="w-100 d-flex justify-content-around border align-items-center py-2 shadow-sm mt-4"action="" method="post">
                            <div style="min-width:140px">

                                <select class="rounded border-0 button1 px-4 ms-2" name="doctor_id">
                                <option value="">Categorie</option>
                                <?php  
                                $cati = array();
                                foreach($res as $article){ 
                                    if(!in_array($article["categorie"],$cati)) 
                                    {
                                        array_push($cati,$article["categorie"]);
                                      ?>
                                     <option value="<?= $article["categorie"]?>"><?= $article["categorie"]?></option>
                                     <?php }} ?>
                                </select>
                            </div>
                            <form class="input-group " method="post"action="">
                                <input type="search" id="search"  name="search_data" class="form-control rounded " placeholder="Search Article Title or categorie" style="height:30px;max-width:500px;" />
                        </form>
                        </form>
                         <div class="card-body table-responsive mt-2" style="">
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
                                                <td class="text-dark" style="min-width:70px;"><button type="button" data-bs-toggle="modal" data-bs-target="#view-Art"class="btn btn-primary btn-sm">full info</button></td>
                                                <td class="text-dark" style="min-width:140px;"><button type="button" class="btn btn-success btn-sm">Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm">Delete</button></td>
                                            </tr>
                                            <?php } ?>
                                           </table>
                         </div>
                         
</section>
<script>
    let search = document.getElementById('search');
    search.addEventListener('input',()=>{
        sendData(search.value);
    })
function sendData($value){
const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
   if(this.readyState===4 && this.status===200){
    articles =(this.responseText);
    console.log(articles);
   }
  }
 
  xhr.open("POST","", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("searchArt="+$value);
} 
</script>
</div>
