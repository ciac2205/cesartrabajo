

$(document).ready(function(){
  $("#btnBuscar").click(function(){
    var busqueda= $("#buscar").val();
    console.log(busqueda);
    $.get("https://www.googleapis.com/books/v1/volumes?q="+busqueda, 
    function(data, status){
    console.log(status);
    console.log(data);
    $("#resultado h2").html(data.items[0].volumeInfo.title);
     $("#resultado h3").html(data.items[0].volumeInfo.authors[0]);
     $("#resultado i").html("ISBN "+ data.items[0].volumeInfo.industryIdentifiers[0].identifier);
     $("#resultado p").html(data.items[0].volumeInfo.description);
     $("#resultado img").attr("src",data.items[0].volumeInfo.imageLinks.thumbnail);
    });
});
});
function limpiar(){
    
    document.getElementById("tabla").innerHTML="";
}

function imprimir(){
    var cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
  var text = "";

  for (var i = 0; i < cars.length; i++) {
    text =text+ "<h1>"+cars[i]+"</h1>" + "<hr>";
  }
  document.getElementById("tabla").innerHTML =text; 
    
}

function mostrar(){
    $("a").hide();
    
    var a= document.getElementsByTagName("li");
    for(var i=0; i<a.length;i++){
    a[i].style.zIndex= "";
    console.log(a[i].innerHTML);
    }
}