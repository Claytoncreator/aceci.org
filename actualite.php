<?php
include("menu.php");
?>
<html lang="en">
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Actualite</h2>
                     <p>Nouvelle Actualite sont Disponible</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          
                                          <p>

<?php
$affichmedecin=$conn->query("select*from actualite");
?>
										  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
										  
										  </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          
                                          <p>
										  
  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
									  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
												  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          
                                          <p>									

										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
										  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
		</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                      
  
  <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
		 </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                         
                                          <p>  <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
		 </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                       
                                          <p>
										    <p>
										  <?php
include("menu.php");
?>	
<?php
$affichmedecin=$conn->query("select*from actualite");
?>
  <table >
	<tr>

</tr>
<?php
while($bdmedecins=$affichmedecin->fetch())
{
?>
<tr>
<td>
<?php echo $bdmedecins["actualite"]; ?>
</td>
<?php
}
?>
</table>
		
										  
										  </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      </div>
     
         
   </body>
</html>