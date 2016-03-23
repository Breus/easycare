<?php /* Template Name: EasyCare Custom Homepage*/ ?>	
<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main-custom" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				do_action( 'storefront_page_before' );
				?>
				<div class="onzekenmerken">
						<div class="page-titel"> <h1> WIJ STAAN GARANT VOOR </h1> </div>
							<div class="garantie">
									<div class="garantie-img"> <img src="http://bgc-testomgeving.nl/easycare/wp-content/themes/storefront/images/geldd.jpg" /> </div>
										<div class="garantie-titel"> Goede prijs </div>
										<div class="garantie-tekst"> Onze prijzen zijn altijd vergelijkbaar met 
												de prijzen uit de voor jou bekende winkels of zelfs goedkoper! Kortom, 
												meer gemak voor een lagere of zelfde prijs!  </div>
								</div>
								<div class="garantie">
										<div class="garantie-img"> <img src="http://bgc-testomgeving.nl/easycare/wp-content/themes/storefront/images/blije-mensen.jpg" /> </div>
										<div class="garantie-titel"> Gemak </div>
										<div class="garantie-tekst"> Je huis niet meer uit om toiletartikelen te kopen.
												Niet meer in de douche staan en al voor de vijfde keer naar die lege shampoofles grijpen. 
												Nooit meer naar de drogisterij hoeven fietsen. Met EasyBox! </div>
								</div>
								<div class="garantie">
										<div class="garantie-img"> <img src="http://bgc-testomgeving.nl/easycare/wp-content/themes/storefront/images/klantgericht.jpg" /> </div>
										<div class="garantie-titel"> Klantgericht </div>
										<div class="garantie-tekst"> Heb je vragen, problemen of klachten over het product? 
												Wij zijn er voor je! Je kunt contact met ons opnemen via een telefoontje, 
												W'appje, tweet of een berichtje op onze Facebookpagina. </div>
								</div>
								<div class="garantie">
										<div class="garantie-img"> <img src="http://bgc-testomgeving.nl/easycare/wp-content/themes/storefront/images/verantwoord.jpg" /> </div>
										<div class="garantie-titel"> Verantwoord  </div>
										<div class="garantie-tekst"> Als bedrijf streven we ernaar om zo goed mogelijk 
												met het milieu om te gaan. De verpakkingen zijn daarom van duurzaam karton 
												en de bezorging gaat met [idee]. </div>
								</div>
					</div>
						<div class="bestel-direct1">
								<a href="http://www.bgc-testomgeving.nl/easycare/shop/"> <button value="Ik ben benieuwd"> IK BEN BENIEUWD! </button> </a>
								
				</div>
				<div class="sequence">
						<div class="page-titel"> <h1> HOE HET WERKT </h1> </div>
						<div class="sequence_item" id="sequence_item1">
									<div class="sequence_inner"></div>
							</div>
							<div class="sequence_item" id="sequence_item2">
									<div class="sequence_inner"></div>
							</div>
							<div class="sequence_item" id="sequence_item3">
									<div class="sequence_inner"></div>
							</div>
							<div class="sequence_item" id="sequence_item4">
									<div class="sequence_inner"></div>
							</div>
						<div class="sequence_titles">
								<div class="sequence_title"> Stel zelf je box samen</div>
									<div class="sequence_title"> Kies je betaalmethode </div>
									<div class="sequence_title"> Nodig je vrienden uit </div>
									<div class="sequence_title"> Pas aan naar wens </div>
								
						</div>
						
				</div>
				<?php
				/**
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
