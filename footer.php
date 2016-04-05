
     <footer style="background:#0e0b0a; margin-top:3%;">
        <div class="ui stackable two column grid"> 
        <div style=" color:white; font-size:8pt; min-height: 70px; padding:10px 0 4% 4%; margin-bottom:15px;" class="ten wide column">
           <!--Texto Izquierdo del footer-->
           <div class="ui list">
              <div class="item">
                <i class="users icon"></i>
                <div class="content">
                  Serena Marmol® - Derechos Reservados 2012.
                </div>
              </div>
              <div class="item">
                <i class="marker icon"></i>
                <div class="content">
                  Pan de Azucar, Coquimbo; Chile.
                </div>
              </div>
              <div class="item">
                <i class="mail icon"></i>
                <div class="content">
                  <a href="mailto:jack@semantic-ui.com">contacto@serenamarmol.cl</a>
                </div>
              </div>
              <div class="item">
                <i class="linkify icon"></i>
                <div class="content">
                  Desarrollado por <a href="http://www.cuscarisun.com">Cuscarisun.com</a>
                </div>
              </div>
              <div class="ui vertical divider" style="heigth: 10px;"></div>
            </div>
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
$('.shape').shape();
// en el segundo parametro de la funcion setInterval se puede setear el tiempo de las imagenes giratorias de los jefes(esta en milisegundos)
    // seteado en 5 seg = 5000
var tiempo = setInterval(jefes, 5000);
function jefes()
    {       
     $('.shape')
  .shape('set next side', '.second.side')
  .shape('flip left');  
    };    
    
var pag = ["","index","empresa","trabajos","clientes","contactos","catalogo","marmol","granito","cuarzo"];
var cont = ["","Home","Empresa","Trabajos","Clientes","Contactos","Catalogo","Mármol","Granito","Cuarzo"];    
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
                'allowPartialLastRow':true
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
        resizeTimer = setTimeout(collage, 100);
    });

    // Funcion de jvascript funcion de imagenes (06imagenes)

    $("#mostrar").attr("src","img/01.jpg");
    
       $("#img_01").click(function(e){
        e.preventDefault();
           $('.autumn.leaf')
               .transition('scale')
               .transition('scale');
        $("#mostrar").attr("src","img/01.jpg");
    });  
   
   
    $("#img_02").click(function(e){
        e.preventDefault();
          $('.autumn.leaf')
               .transition('scale')
               .transition('fade down');
        $("#mostrar").attr("src","img/02.jpg");
    });
    $("#img_03").click(function(e){
        e.preventDefault();
          $('.autumn.leaf')
               .transition('scale')
               .transition('fade left');
        $("#mostrar").attr("src","img/03.jpg");
    });
    $("#img_04").click(function(e){
        e.preventDefault();
          $('.autumn.leaf')
               .transition('scale')
               .transition('fade right');
        $("#mostrar").attr("src","img/04.jpg");
    });
    $("#img_05").click(function(e){
        e.preventDefault();
          $('.autumn.leaf')
               .transition('scale')
               .transition('horizontal flip');
        $("#mostrar").attr("src","img/05.jpg");
    });
    $("#img_06").click(function(e){
        e.preventDefault();
          $('.autumn.leaf')
               .transition('scale')
               .transition('vertical flip');
        $("#mostrar").attr("src","img/06.jpg");

    });
     $("#img_07").click(function(e){
        e.preventDefault();
          $('.autumn.leaf')
               .transition('scale')
               .transition('vertical flip');
        $("#mostrar").attr("src","img/07.png");

    });
    

  

</script>

</body>
</html>