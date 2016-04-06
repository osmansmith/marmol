<footer style="background:#0e0b0a; margin-top:2%;">
  <div class="ui stackable two column grid"> 

<!--Texto Izquierdo del footer-->

  <div class="ui list">
    <div style="color:white; font-size:9pt; min-height: 70px; margin-top:15px; padding-left:4em;" class="one  column"> 
          <div class="item">
            <i class="users icon"></i>
              Serena Marmol® - Derechos Reservados 2012.
          </div>

          <div class="item">
            <i class="marker icon"></i>
            Pan de Azucar, Coquimbo; Chile.
          </div>

          <div class="item">
            <i class="mail icon"></i>
            <a href="mailto:ventas@cuscarisun.com">contacto@dominio.cl</a>
          </div>

          <div class="item">
            <i class="linkify icon"></i>
            Desarrollado por <a href="http://www.cuscarisun.com" id="copyfot"> Cuscarisun.com</a>
          </div>
    </div>
  </div>

<!--Contenido Derecho del footer--> 
    <div style=" min-height: 70px; text-align:right; padding-top: 40px;" class="two rigth column">
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
 
<script src="dist/semantic.min.js"></script>
<script>

var url = "http://localhost/marmol/";
$('.ui.dropdown').dropdown();
$('.shape').shape('repaint');

// en el segundo parametro de la funcion setInterval se puede setear el tiempo de las imagenes giratorias de los jefes(esta en milisegundos)
    // seteado en 5 seg = 5000
var tiempo = setInterval(jefes, 5000);
function jefes()
    {       
     $('.shape')
  .shape('set next side', '.second.side')
  .shape('flip left');  
    };    
  
var pag = ["index","trabajos","contactos","marmol","granito","cuarzo"];
var cont = ["Home","Trabajos","Contactos","Mármol","Granito","Cuarzo"];    
var URLactual = window.location;
    
    for (var i = 0; i<6; i++){
    
    if (URLactual == url+pag[i]+".php"){
          $("#"+pag[i]+"").addClass('active');
          $("title").text(cont[i]);    
        }
    else  {
          $("#"+pag[i]+"").removeClass('active');
          }  
    }   

// Funcion de jvascript funcion de imagenes (06imagenes)

     $("#mostrar").attr("src","img/01.jpg");
     $("#mostrar_cuarzo_1").attr("src","img/01.jpg");
     $("#mostrar_cuarzo_2").attr("src","img/01.jpg");
    
// menu de imagenes para cuarzo 1
         
 $("#img_01_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/01.jpg");});  
 $("#img_02_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/02.jpg");}); 
 $("#img_03_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/03.jpg");}); 
 $("#img_04_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/04.jpg");}); 
 $("#img_05_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/05.jpg");}); 
 $("#img_06_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/06.jpg");}); 
 $("#img_07_1").click(function(e){ e.preventDefault();$('.autumn.leaf2').transition('scale').transition('scale');
 $("#mostrar_cuarzo_1").attr("src","img/07.png");}); 
   
  // menu de imagenes para cuarzo 2    
    
 $("#img_01_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/01.jpg");});  
 $("#img_02_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/02.jpg");}); 
 $("#img_03_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/03.jpg");}); 
 $("#img_04_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/04.jpg");}); 
 $("#img_05_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/05.jpg");}); 
 $("#img_06_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/06.jpg");}); 
 $("#img_07_2").click(function(e){ e.preventDefault();$('.autumn.leaf3').transition('scale').transition('scale');
 $("#mostrar_cuarzo_2").attr("src","img/07.png");}); 
    
   
   // codigo para menu de imagenes 1 "#mostrar"
    
 $("#img_01").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/01.jpg");});  
 $("#img_02").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/02.jpg");}); 
 $("#img_03").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/03.jpg");}); 
 $("#img_04").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/04.jpg");}); 
 $("#img_05").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/05.jpg");}); 
 $("#img_06").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/06.jpg");}); 
 $("#img_07").click(function(e){ e.preventDefault();$('.autumn.leaf').transition('scale').transition('scale');
 $("#mostrar").attr("src","img/07.png");}); 

</script>
</body>
</html>