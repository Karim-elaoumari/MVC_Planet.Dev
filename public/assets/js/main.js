






tinymce.init({
    selector: "textarea",
    plugins: 'link image',
    toolbar: 'undo redo | bold italic | alignleft aligncenter alignright |color| link image',
    content_css: 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
    });
var sideBar = document.getElementById("wrapper");
var toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    sideBar.classList.toggle("toggled");
};
count=0;
function addArticle(){
    stopeTiny();
    let firstForm = document.getElementById("article-form");
    // clone the first form
    let newForm = firstForm.cloneNode(true);
    let div = newForm.children;
    // clean the values of the input fields in the new form
    let inputs = newForm.getElementsByTagName("input");
    for (let i = 0; i < inputs.length; i++) {
      inputs[i].value = "";
    }
    
    newForm.innerHTML+=`<button type="button" class="btn btn-danger btn-sm mt-2" onclick="deleteArticle(this)">Delete</button>`;
    // append the new form to the page
    document.getElementById("fullForm").appendChild(newForm);
    startTiny();

}
function deleteArticle(element){
    element.parentNode.remove();
}

function startTiny(){
    tinymce.init({
        selector: 'textarea',
        plugins: 'link image',
        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright |color| link image',
        content_css: 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
        });

}
function stopeTiny(){
    tinymce.remove('textarea');
}


function showArticleContent(value,cover,title){
    console.log("ezfcqsdf");
    document.getElementById("showContent").innerHTML=value;
    document.getElementById("coverShow").setAttribute("src",'http://localhost/MVC_Planet.Dev/public/assets/img/'+cover);
    document.getElementById("showTitle").innerText=title;

}




