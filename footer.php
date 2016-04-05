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