<div class="contact_banner">
	<div class="container-fluid">	
	</div>
</div>
<div class="about_top">
 <div class="container-fluid"> 
	<div class="col-md-12 column-15">
	   <h6>Contact Us</h6>
	   <p class="m_5">Ornare tortor vestibulum vestibulum non, fringilla at. Porta at egestas id. Ante sodales sed cum volutpat ac, vel rutrum nunc. Mi fermentum potenti ultrices sapien, lectus ligula. Vestibulum sed a neque wisi tortor ac, wisi orci aenean. Arcu wisi est mauris tellus, bibendum volutpat eu, lectus vulputate tempus egestas. Sem aliquam facilisis etiam neque lectus ultricies, vitae turpis. Curabitur nulla nec mattis egestas. Auctor est orci sed elementum sollicitudin libero, elementum mauris tincidunt. Volutpat eros est in eros quisque duis.</p>
	</div>         
	<div class="col-md-12"> 
		<div class="row">       
			<div class="col-md-6">                 
			<div class="index-post-media">                     
			<div class="media-materials clearfix" style=" font-family: 'Sofia';font-size: 22px;">
			<center><h1>Address : </h1></center>
			<center><p>ACADEMY4CAREER.COM INC</p>
			<p>TIMMLAPURA BADRAPURA -577427</p>
			<p>POST : SHIKARIPURA</p>
			<p>Mobile : +91-9886601656</p>
			<p>Email : info@a4c.com</p>    </center>                  
			           
			</div>    



			</div>           
			</div>  
			<div class="col-md-6">
			<?= $this->Form->create('',['enctype'=>"multipart/form-data"]) ?>            
	     	    <div class="blog-entry-title">                     
	     	  	      <center><h3>Contact Form</h3></center>
	     	  	      <div class="entry_values">
	   
	   				 <div class="col-md-4 grid_1">
		            <input type="text"  class="form-control m_6 col-md-3" name="name" placeholder="Name" required="">
		              
		          </div>
		          
		          <div class="col-md-4 grid_1">
		            <input type="text" class="form-control m_6 col-md-3" name="email" placeholder="Email id" required="">
		             
		          </div>
				    <div class="col-md-4 grid_1">
		            <input type="text" class="form-control m_6 col-md-3" name="mobile" placeholder="Mobile No" required="">
		              
		          </div>
		          </div>  
		          <div class="">
			   
			    <div class="col-md-12 grid_1" style="padding-top:20px;padding-bottom: 20px;">
		            <textarea  class="form-control col-md-9" name="message" placeholder="Message...." required="">
		            </textarea>
		              
		          </div>
		          
		          </div>                 
	     	  	   
	     	  	   <center><button class="btn btn-success col-md-12">SUBMIT</button></center>
        		   
        	    </div> 
        	     </form>   
			</div>  
			<div class="clearfix"></div>
		</div> 
	</div>
	   <div class="col-md-12" style="padding-top:20px; ">
	       	<div class="row">
	       		
	   		
	   			<div id="map" class="section" style="height: 300px;border: 2px solid #999;" ></div>
				    <script>
				      var map;
				      function initMap() {

				        var seeingo = {lat: 28.586069, lng: 77.048723};
				        var map = new google.maps.Map(document.getElementById('map'), {
				            zoom: 11,
				            center: seeingo
				        });
				        var marker = new google.maps.Marker({
				            position: seeingo,
				            map: map
				        });
				    };
				    </script>
				    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH_jo-Tr08tfAcNliOZVjE0hU8JAS2I6A&callback=initMap"
				    async defer></script>
	       	</div>
	   </div>		
        <div class="clearfix"> </div>
      </div>
</div>