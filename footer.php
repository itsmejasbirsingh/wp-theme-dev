
			<!-- Footer -->
			<footer class="footer-back navbar navbar-inverse">
			<div class="row">
				<div class="col-sm-4">
					<h2>Footer Content</h2>
          			<p>Here you can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
					
					<h5>Links</h5>

            <?php 
								wp_nav_menu(array(
									'theme_location' => 'second',
									'container' => false,
									)
								);
							?>
				</div>
			</div>
    <div class="text-center">© 2018 Copyright:
      <a href="https://google.com/"> google.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
			
		
	
	</div><!-- .container -->
	
	<?php wp_footer(); ?>
	
	</body>
</html>