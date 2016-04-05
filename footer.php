
     <footer style="background:#0e0b0a; margin-top:3%;">
        <div class="ui stackable two column grid"> 
        <div style=" color:white; font-size:8pt; min-height: 70px; padding:15px 0 4% 4%;" class="ten wide column">
           <!--Texto Izquierdo del footer-->
           <div class="ui list">
              <div class="item">
                <i class="users icon"></i>
                <div class="content">
                  Serena Marmol - Derechos Reservados.
                </div>
              </div>
              <div class="item">
                <i class="marker icon"></i>
                <div class="content">
                  Pan de Azucar, Coquimbo
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
                  <a href="http://www.serenamarmol.cl">serena Marmol</a>
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
// en el segundo parametro de la funcion setInterval se puede setear el tiempo de las imagenes giratorias de los jefes(esta en milisegundos)
    // seteado en 5 seg = 5000
var tiempo = setInterval(jefes, 5000);
function jefes()
    {
     $('.shape').shape('flip left');    
    }    
    
var pag = ["","index","empresa","trabajos","clientes","contactos","catalogo"]
var cont = ["","Home","Empresa","Trabajos","Clientes","Contactos","Catalogo"]  
var URLactual = window.location;
    for(var i = 1;i<7;i++)
    {
  if(URLactual == url+pag[i]+".php")
  {
      $("#"+pag[i]+"").addClass('active');
      $("title").text(cont[i]);    
}else{
      $("#"+pag[i]+"").removeClass('active');    
} 
    }
</script>
</body>
</html>