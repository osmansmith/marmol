 asfasgasgagsa
     <footer style="background:#0e0b0a; margin-top:3%;">
        <div class="ui stackable two column grid"> 
        <div style=" color:white; font-size:8pt; min-height: 70px; padding:15px 0 4% 4%;" class="ten wide column">
           <!--Texto Izquierdo del footer-->
           <p>Nuestros Productos consisten en Mármol,<br>Granito y Cuarzo, Muebles a Medida</p>
            </div>
        <div style=" min-height: 70px; padding:20px; text-align: right;" class="four wide column">
           <!--Contenido Derecho del footer-->  
<button class="ui circular facebook icon button">
  <i class="facebook icon"></i>
</button>
<button class="ui circular twitter icon button">
  <i class="twitter icon"></i>
</button>
<button class="ui circular linkedin icon button">
  <i class="linkedin icon"></i>
</button>
<button class="ui circular google plus icon button">
  <i class="google plus icon"></i>
</button>        
            </div>
         </div> 
     </footer>
     
    </div>

 
<script src="dist/semantic.min.js"></script>

<script>
var url = "http://localhost/marmol/";
$('.ui.dropdown').dropdown();
// en el segundo parametro de la funcion setInterval se puede setear el tiempo de las imagenes giratorias de los jefes(esta en milisegundos)
    // seteado en 4 seg = 4000
var tiempo = setInterval(jefes, 4000);
function jefes()
    {
     $('.shape').shape('flip left');    
    }    
    
var pag = ["","index","empresa","trabajos","clientes","contactos","catalogo","marmol","granito","cuarzo"]
var cont = ["","Home","Empresa","Trabajos","Clientes","Contactos","Catalogo","Mármol","Granito","Cuarzo"]
var num = 1;    
var URLactual = window.location;
    for(var i = 1;i<10;i++)
    {
  if(URLactual == url+pag[i]+".php")
  {
      $("#"+pag[i]+"").addClass('active');
      $("title").text(cont[i]);    
}else{
      $("#"+pag[i]+"").removeClass('active');    
} 
    }   
     $('.Collage').collagePlus();   $(window).load(function () {
        $(document).ready(function(){
            collage();
            $('.Collage').collageCaption();
        });
    });


    // Here we apply the actual CollagePlus plugin
    function collage() {
        $('.Collage').removeWhitespace().collagePlus(
            {
                'fadeSpeed'     : 2000,
                'targetHeight'  : 200,
                'effect'        : 'effect-2',
                'direction'     : 'vertical',
                'allowPartialLastRow':false
            }
        );
    };

    // This is just for the case that the browser window is resized
    var resizeTimer = null;
    $(window).bind('resize', function() {
        // hide all the images until we resize them
        $('.Collage .Image_Wrapper').css("opacity", 0);
        // set a timer to re-apply the plugin
        if (resizeTimer) clearTimeout(resizeTimer);
        resizeTimer = setTimeout(collage, 200);
    });
    
</script>


</body>
</html>