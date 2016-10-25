
 <section class="portfolio" id="portfolio">
 	 <div class="background_portfolio">
      <div class="title text-center wow animated fadeInUp"><h1>My Latest <strong>Work</strong></h1></div>
      
      <div class="title text-center wow animated fadeInUp">
      <div class="container">
      	
        <div class="portfoliofilter">
          <a href="javascript:void(0)" data-filter="*" class="current" style="outline:none;">
            <div class="def-btn filterbutton">All Categories</div>
          </a>
          <a href="javascript:void(0)" data-filter=".website" style="outline:none;">
            <div class="def-btn filterbutton">Website</div>
          </a>
          <a href="javascript:void(0)" data-filter=".webdesign" style="outline:none;">
            <div class="def-btn filterbutton">Web Design</div> 
          </a>
          
           <a href="javascript:void(0)" data-filter=".webapp" style="outline:none;">
            <div class="def-btn filterbutton">Web Application</div> 
          </a>
        </div><!--/.portfoliofilter -->
      </div><!--/.container -->
      </div>

      
      <div class="title text-center wow animated fadeInUp">
   
<div class="grid"> <div class="portfoliocontent">
				<?php
                for($i=1;$i<=12;$i++){
					$nama_por = array(
								'',
								'8Bulbs',
								'Azka Wedding',
								'Elkabumi Caraka Daya',
								'Internet Taqwa',
								'POIN Online Purchase Order Inventory Online',
								'Sapar',
								'AIA Insurance',
								'Wimbi Store',
								'Daun Pandan Catering',
								'Badan Penanaman Modal Jawa Timur',
								'Prima Mandiri Trans',
								'Agenda Kota'
								);
					$ket_por = array(
								'',
								'Platform for hiring creative arts talent in Indonesia',
								'Company Profile',
								'Company Profile',
								'Portal Website',
								'Purchase Order Inventory Online Purchase Order Inventory Online',
								'Portal Website',
								'Event Management',
								'Online Store',
								'Restaurant and Catering Website',
								'Portal Website',
								'Truck Management',
								'Portal Website'
								);
					$filter_por = array(
								'',
								'website',
								'website',
								'website',
								'webdesign',
								'webapp',
								'website',
								'webapp',
								'webapp',
								'website',
								'website',
								'webapp',
								'webdesign'
								);

					$date_por = array(
								'',
								'11 Jan 2016',
								'4 Mar 2015',
								'20 Jun 2013',
								'5 Apr 2014',
								'5 Aug 2015',
								'15 Dec 2014',
								'16 Nov 2013',
								'2 Jun 2014',
								'25 Oct 2014',
								'21 Feb 2013',
								'3 Jun 2014',
								'1 Mar 2012'
								);
				?>
              	
				<figure class="effect-milo <?php echo $filter_por[$i]; ?>">
				<a  class="fancybox" href="<?= base_url() ?>assets/images/portofolio_new/<?= $i ?>.jpg" data-fancybox-group="gallery"  title="<?= $nama_por[$i] ?>"><img src="<?= base_url() ?>assets/images/portofolio_new/<?= $i ?>.jpg" alt="img<?= $i ?>"/>
					<figcaption>
						
                        <div class="portofolio_putih">
                        <div class="portofolio_putih_title"><?= $nama_por[$i] ?></div>
                        <div class="portofolio_putih_kecil"><?= $ket_por[$i] ?></div>
                        
                        <div class="portofolio_kiri">&nbsp;</div>
                        <div class="portofolio_kanan">
                        	<?php 
                        	switch($filter_por[$i]){ 
                        		case 'website': echo "WEBSITE"; break; 
                        		case 'webapp': echo "WEB APPLICATION"; break; 
                        		case 'webdesign': echo "WEB DESIGN"; break; 
                        	}

                        	?></div>
                       
						</div>
                        <span class="figure_date"><?= $date_por[$i] ?></span>
						<p class="portofolio_icon">
                   
                        </p>
						
					</figcaption>	   
          	</a>
				</figure>           
                <?php
				}
			   ?>
			</div>
        </div>
            </div>
        </div>
            </section>
            <div style="clear:both;"></div>