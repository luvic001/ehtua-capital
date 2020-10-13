<section class="section faded-background" id="portfolio">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 d-block mb-3">
				<p class="breadc mb-0 trn">/ Portfólio</p>
				<hr>
			</div>
			<div class="col-md-3">
				<h2 class="section-title with-after trn">Investimentos no Brasil</h2>
			</div>
			<div class="col-md-7 cards-section justify-content-between mb-3">
				<?php 
				$images = [ 
					'opmax.png' => 'Opmax', 
					'moviva.png' => 'Moviva', 
					'invest-image.png' => 'InvestImage', 
					'shark-tank.png' => 'Shark Tank Brasil' 
				]; 
				foreach ($images as $image => $label):
				?>
				<figure class="d-flex align-items-center justify-content-center mb-3">
					<img 
						src="<?php ___(get_image($image)) ?>" 
						alt="<?php ___( $label ) ?>">
				</figure>
				<?php 
				endforeach;
				?>
			</div>
			<div class="col-md-10 mb-4">
				<hr>
			</div>
			<div class="col-md-3">
				<h2 class="section-title with-after trn">Investimentos no Exterior</h2>
			</div>
			<div class="col-md-7 cards-section justify-content-start mb-3">
				<figure class="d-flex align-items-center justify-content-center">
					<img 
						src="<?php ___(get_image('wert-solutions.png')) ?>" 
						alt="Wert Solutions">
				</figure>
			</div>
		</div>
	</div>
</section>