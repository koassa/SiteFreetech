  <header class="row">
	  <div class="col-md-4 col-sm-12">
	      <div class="row">
		  <div class="col-md-6 col-sm-6">
		  	

		  	<?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img class="img-responsive " 
		  	style="height:190px;"  src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

		  </div>		  
		  <div class="col-md-6 col-sm-6 marge-logo" >
			    <a href="#">
			    	<h1 >Institut </br>FreeTech</h1>
			    </a>
			    </br>
			    </br>
			   <p class="slogan" >Le bon usage des TIC au service de tous !</p> </br>        
		   </div>
	    	</div>    
  	   </div>
    	   <div class=" col-md-8 hidden-xs hidden-sm" style="background-color:rgb(214, 214, 231);height:170px; ">
    	   	<center style="padding-top:45px;"> <h3>Espace pub </h3></center>
    	   </div>
  </header>

  <div class="row" style="margin:20px -12px 60px -12px" >
      
		
        <!-- le menu -->
            <!-- nav class="col-md-8 col-md-offset-2 hidden-xs hidden-sm navbar navbar-inverse"-->
              
                <!--?php print render($page['menu']); ?-->
                
                
              <?php if ($main_menu): ?>
      <div id="main-menu" class="col-md-8 col-md-offset-2 hidden-xs hidden-sm navbar navbar-inverse">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('nav' , 'nav-justified'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
        
      </div> <!-- /#main-menu -->
    <?php endif; ?>
              
             
                   
    </div>

	<div class="row ">
	<!-- block gauche sup -->
	  <div class="col-md-2 ">
	  
	  <?php if ($page['gauche_sup']): ?>
      <div id="gauche_sup" class="navbar-left form-inline">
      
        <?php print render($page['gauche_sup']); ?>
        <!-- block-search-form -->
      </div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>
		
		
	  </div>
	  <!-- block milieu sup -->
	  	<div class="col-md-10 ">
<?php print render($page['milieu_sup']); ?>
		    <div class="row">
			    <div class="col-md-4 "><mark class="mark">Dernières études </mark>
				<div class="bord2"><br>
					  <div>
						  <ul class="forme">
							<li>Développement sur terminaux mobiles</li>
						  </ul>
					  </div>
				</div>
			    </div>
			    
		    	    <div class="col-md-4 "><mark class="mark">Dernières applications </mark>

				<div class="bord2"><br>
					   <div>
						   <ul class="forme">
							<li>Développement sur terminaux mobiles</li>
						  </ul>
					  </div>
				  </div>
		    	    </div>
		    	    
			    <div class="col-md-4 "><mark class="mark">Projet R&D</mark>
				<div class="bord2"><br>
					 <div>
						 <ul class="forme">
							<li>Développement sur terminaux mobiles</li>
						  </ul>
					  </div>
				  </div>
			    </div>
		    </div>

		  </div>
		  <!-- block gauche -->
	  
	</div>
	<!-- fin de la premiere partie -->
	<div class="row ">
	  	<div class="col-md-2 hidden-xs hidden-sm">

<?php print render($page['gauch_sub']); ?>
	    	    <form class="form-horizontal" role="form">
			<div class="row ">
			    <div class="col-md-12">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="login">
			      
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			 </div>
	 
			 <div class="row ">
			   <div class="col-md-12">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="mot de passe">
			      
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			</div>

	  		<button type="submit" class="btn btn-default">Connexion</button>
		    </form>

	  	</div>
		  <div class="col-md-8 ">
		  <?php print render($page['milieu_sub']); ?>
		  
		  <mark class="mark">Actu </mark>
			<div class="bord2"><br>
			  Actu
			</div>
		  </div>
		  <div class="col-md-2 " style="font-size:12px; padding:5px">
		  <?php print render($page['droit_sub']); ?>
			<div class="a">
				<p>Lorem ipsum dolor <br><small><a href="">a link</a></small></p>
				<p>Lorem ipsum dolor <br><small><a href="">a link</a></small></p>
				<p>Lorem ipsum dolor <br><small><a href="">a link</a></small></p>
			</div>
			<form class=" navbar-left " role="search">
			  <div class="row">
			    <div class="col-md-12">
			    <div class="input-group">
			      <input type="text" class="form-control" placeholder="Newsletter">
			      <span class="input-group-btn">
				<button class="btn btn-default" type="button">OK</button>
			      </span>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			  </div>
			</form>
		  </div>
	</div>



       <!-- FOOTER -->
    <footer>
       <!--div class="footer">
       <div id="footer">
  		<?php print render($page['footer']); ?> 
	</div> 
<!-- end div#footer -->

        <p class="pull-right"><a href="#">Back to top</a></p>
        <p style="text-align: center;"><?php print render($page['footer']); ?> </p>
         
        </div>
</footer>
