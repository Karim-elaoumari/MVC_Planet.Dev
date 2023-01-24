
let search = document.getElementById('search');
search.addEventListener('input',()=>{
        sendData(search.value);
})
let articleslist = document.getElementById("articles1");

function sendData($value){
    articleslist.innerHTML =`
    <tr class="top-0 position-sticky bg-light">
        <td class="mycolor fw-bold ">Title</td>
        <td class="mycolor fw-bold">Categorie</td>
        <td class="mycolor fw-bold">Content</td>
        <td class="mycolor fw-bold">Actions</td>
    </tr>`;
const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
   if(this.readyState===4 && this.status===200){
    articles =JSON.parse(this.responseText);
    articles.forEach(myFunction);

    function myFunction(article) {
        articleslist.innerHTML +=`
        <tr class="bg-light border-bottom-0">
        <td class="text-dark">${article.article_title}</td>
        <td class="text-dark">${article.categorie}</td>
        <td class="text-dark"><button type="button" data-bs-toggle="modal" data-bs-target="#view-Art"class="btn btn-primary btn-sm">full info</button></td>
        <td class="text-dark"> <form action="" method="post"><input type="hidden" name="id_Art" value="${article.article_id}"><button type="button" class="btn btn-success btn-sm me-2" style="width:60px" onclick="fillEditArticle(${article.article_id})"data-bs-toggle="modal" data-bs-target="#editArticle">Edit</button><button type="submit" name="deleteArt" class="btn btn-danger btn-sm" style="width:60px">Delete</button></form></td>
    </tr>`;
}
   }
  }
 
  xhr.open("POST","", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("searchArt="+$value);
}
document.getElementById("categoriess").addEventListener("change", function() {
  let  selectedValue = this.value;
  sendcategorie(selectedValue);
});
function sendcategorie(value){
    articleslist.innerHTML =`
    <tr class="top-0 position-sticky bg-light">
        <td class="mycolor fw-bold ">Title</td>
        <td class="mycolor fw-bold">Categorie</td>
        <td class="mycolor fw-bold">Content</td>
        <td class="mycolor fw-bold">Actions</td>
    </tr>`;
const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
   if(this.readyState===4 && this.status===200){
    articles =JSON.parse(this.responseText);
    articles.forEach(myFunction);

    function myFunction(article) {
        articleslist.innerHTML +=`
        <tr class="bg-light border-bottom-0">
        <td class="text-dark">${article.article_title}</td>
        <td class="text-dark">${article.categorie}</td>
        <td class="text-dark"><button type="button" data-bs-toggle="modal" data-bs-target="#view-Art"class="btn btn-primary btn-sm">full info</button></td>
        <td class="text-dark"> <form action="" method="post"><input type="hidden" name="id_Art" value="${article.article_id}"><button type="button" class="btn btn-success btn-sm me-2" style="width:60px" onclick="fillEditArticle(${article.article_id})"data-bs-toggle="modal" data-bs-target="#editArticle">Edit</button><button type="submit" name="deleteArt" class="btn btn-danger btn-sm" style="width:60px">Delete</button></form></td>
    </tr>`;
}
   }
  }
  xhr.open("POST","", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("filterArt="+value);
}
function fillEditArticle(id){
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function(){
   if(this.readyState===4 && this.status===200){
    article =JSON.parse(this.responseText);
    document.getElementById("titleEdit").value = article.article_title;
    document.getElementById("categorieEdit").value = article.categorie_id;
    tinymce.get('contentEdit').setContent(article.article_content);
    document.getElementById("idOfEdit").value = article.article_id;
    document.getElementById("oldCover").value = article.article_id;
   }
  }
  xhr.open("POST","", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("getOneArt="+id);
}
function fillShowArticle(id){
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
     if(this.readyState===4 && this.status===200){
      article =JSON.parse(this.responseText);
      document.getElementById("showTitle").innerText = article.article_title;
      document.getElementById("showContent").innerHTML= article.article_content;
      document.getElementById("coverShow").setAttribute("src",'http://localhost/MVC_Planet.Dev/public/assets/img/'+article.article_cover);
     }
    }
    xhr.open("POST","", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("getOneArt="+id);
  }