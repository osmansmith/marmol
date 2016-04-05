<?php include_once "head.php";?>

<!-- Contenido de la pagina-->
<?php include_once "head.php";?>
<style>
/*
This CSS is really just for this demo page
But take a look at the comments to see how I set padding
and borders on the images
*/
html body{
    margin:0;
    padding:0;
    background-color:rgb(230, 230, 230);
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
}
a{
    color:#09F;
    text-decoration:none;
}
.header{
    padding:0;
    background-color: #272D35;
}
.header h1{
    font-size: 14px;
    color: rgb(164, 177, 190);
    display:inline-block;
    font-weight:bold;
    margin:0;
    padding:10px;
}
.header h1 a{
    color:#41505A;
}
.header h1 a:hover{
    color:#09F;
}
.header nav{
    background-color:rgb(65, 68, 75);
    padding:40px;
    border-bottom:1px solid #CCC;
    margin-bottom:0px;
}
.header nav a{
    display: inline-block;
    padding: 4px 6px;
    margin-right:10px;
    background-color:#09F;
    color:#FFF;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 1px rgba(0,0,0,0.1);
    -moz-box-shadow: 0 3px 1px rgba(0,0,0,0.1);
    box-shadow: 0 3px 1px rgba(0,0,0,0.1);
    text-shadow:0 2px 1px rgba(0,0,20,0.1);
}
.Example_Details{
    padding:20px;
    color:#272D35;
    font-size:14px;
    background-color: #FFFFFF;
    margin-top:0;
}
h1.instance-header{
    font-size: 14px;
    padding:20px;
    margin-bottom:10px;
    margin-top: 30px;
}
a.return{
    font-size:12px;
    display:inline-block;
    padding:12px 10px 10px 10px;
    float:right;
    text-transform: uppercase;
    color:#41505A;
}
a.return:hover{
    color:#09F;
}
.footnote{
    color:#999;
    padding:10px;
    font-size:12px;
}
.Collage{

    /*This is where you set the padding you want between the images*/
    padding:10px;

}
.Collage img{
    margin:0;
    padding:0;
    display:inline-block;
    vertical-align:bottom;
    opacity:1;

    /*This is where you set the border you want for the image*/
    border:6px solid #FFF;
}


/* In this example, this is the main item being resized */
.Image_Wrapper{
    /* to get the fade in effect, set opacity to 0 on the first element within the gallery area */
    opacity:0;
    -moz-box-shadow:0px 2px 4px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow:0px 2px 4px rgba(0, 0, 0, 0.1);
    box-shadow:0px 2px 4px rgba(0, 0, 0, 0.1);
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}

.Caption{
    font-size:14px;
    font-weight:normal;
    font-family:arial;
}
.Caption_Content{
    /* padding:10px; */
    color:#FFF;
    padding:20px;
}
</style>
<!-- Contenido de la pagina-->
 <section class="Collage effect-parent">
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it">
 <a><img src="img/01.jpg" width="350" height="150"></a></div>
 
 <div class="Image_Wrapper">
 <a><img src="img/02.jpg" width="320" height="180"></a></div>
 
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="img/03.jpg" width="320" height="300"></a></div>
 
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="img/04.jpg" width="472" height="500"></a></div>
 
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="img/05.jpg" width="540" height="360"></a></div>
 
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it"><a><img src="img/06.jpg" width="800" height="600"></a></div>
 
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="img/07.jpg" width="400" height="120"></a></div>
 
 <div class="Image_Wrapper" data-caption="This is some data <u>with</u>html in it This is some data <u>with</u>html in it. Also a really long sentence with a <a href='http://www.bbc.co.uk'>link</a> in it"><a><img src="img/08.jpg" width="300" height="300"></a></div>
 
 </section>


<?php include_once "footer.php";?>

<?php include_once "footer.php";?>