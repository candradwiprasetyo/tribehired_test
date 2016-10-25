<div id="dialog_content" class="dialog_content" style="display:none">
    <div class="dialogModal_header"></div>
    <div class="dialogModal_content">
    	<?php include 'timeline.php' ?>
  	<div>
</div>


    
    </div>
   
</div>


<!--<div id="about_page"></div>-->
    <section class="about" id="about">
      <div class="background_about">
      <div class="container" >
        <div class="row">

<div id="clock_frame">
  <ul id="clock"> 
      <li id="sec"></li>
      <li id="hour"></li>
      <li id="min"></li>
  </ul>
</div>
          <!--
          <div class="col-md-12 title text-center wow animated fadeInUp" data-wow-delay="0.1s">
            <h1>About <strong>Me</strong></h1>
          </div>
          
           <div class="col-md-12 title text-center wow animated zoomIn" data-wow-delay="0.1s">
          
           <img src="images/candramelon.png" alt="img01" class="img_about" />
          </div>
        -->


           <div class="col-md-6 col-md-offset-3 title text-center wow animated fadeInUp" data-wow-delay="0.1s">
           <br />
            <br />
           <span style="color:#fff;">
          <span style="font-size:24px;" >Hi, My Name is <b>Candra D Prasetyo</b></span><br><br><p>I am a PROGRAMMER
					based in Surabaya, East Java, Indonesia.
					My skills are web design, web programming and web application. I've designed websites for small businesses, company profile, personal website, nonprofits, more.
           </p>
         </span>
           </div>	
           <div class="col-md-6 col-md-offset-3 title text-center " data-wow-delay="0.1s">
           <div class="buttons">
              <div class="form-group">
                <div class="col-md-6">
                  <a href="<?= base_url() ?>assets/files/ResumeCandraDwiPrasetyo.pdf" target="_blank" class="def-btn about_button wow animated fadeInLeft"><strong>Download My CV</strong></a>
                </div>
              </div>
                 <div class="form-group">
                  <div class="col-md-6">
                    <a id="dialogModal_ex1" data-modal="modal-1"  class="def-btn about_button wow animated fadeInRight" style="cursor:pointer;"><strong>Know Me Better</strong></a>
                  </div>
              </div>
            </div>
            </div>
          
        
         
        </div><!-- /.row -->
      </div><!-- /.container -->
   </div>
    </section><!-- /.features -->
    <!-- about section END -->

<script>
$(function(){
  
    $('#dialogModal_ex1').click(function(){
        $('.dialog_content').dialogModal({
            topOffset: 0,
            onOkBut: function() {},
            onCancelBut: function() {},
            onLoad: function(el, current) {},
            onClose: function() {},
            onChange: function(el, current) {
                if(current == 3){
                    el.find('.dialogModal_header span').text('Page 3');
                    $.ajax({url:'ajax.html'}).done(function(content){
                        el.find('.dialogModal_content').html(content);
                    });
                }
            }
        });
    });
});
</script>
