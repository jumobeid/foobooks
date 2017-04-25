
    


<div id="contact" class="container">
    
    <h2 id="conth"></h2>
    <h2 id="conth2">Lorem ipsum dolor sit amet <strong>800 1 65565</strong>, consectetur adipiscing elit. Nunc vel facilisis leo. Suspendisse imperdiet lorem metus.</h2><br/>
      <div  class="row ">
        <div class="col-sm-1"></div>
        <div id="details" class="col-sm-3">
          <i class="fa fa-map-marker" style="width:30px"></i> Dubai,UAE
          <br>
          <br>
          <i class="fa fa-phone" style="width:30px"></i> Phone: +971 50 6137078
          <br>
          <br>
          <i class="fa fa-envelope" style="width:30px"> </i> Email:info@insightsrs.com
          <br>
        </div>
         <div class="col-sm-1"></div>


        <div class="col-sm-5 last">
          <form id="myForm" class="form-horizontal" action="http://cscie12.dce.harvard.edu/echo" method="post">
            <div class="form-group">
              <label class=" col-sm-2" for="name">Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" minlength="2" oninput="InvalidMsg1(this);" oninvalid="InvalidMsg1(this);" required="required"/>
                  
              </div>
            </div>
            <div class="form-group">
              <label class=" col-sm-2" for="email">Email</label>
              <div class="col-sm-10">
                <input id="email" class="form-control" oninvalid="InvalidMsg(this);" name="email" oninput="InvalidMsg(this);"  type="email" required="required" placeholder="Enter email address"/>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="comments">Comment</label>
              <div class="col-sm-10">
                  <textarea class="form-control" rows="2" id="comments" name="comments" placeholder="Enter your comments please" oninvalid="InvalidMsg3(this);" oninput="InvalidMsg3(this);" required="required" ></textarea>
                
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button id="submitbtn" type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>

  

     
    
   
      <div id="map" style="width:1200;height:400px;background:#ededed;color:#000"></div>

     <script>
                /*25.204849,55.2707838 */
            


          function myMap() {
          var mapCanvas = document.getElementById("map");
          var myCenter = new google.maps.LatLng(25.204849,55.2707838); 
          var mapOptions = {center: myCenter, zoom: 5};
          var map = new google.maps.Map(mapCanvas,mapOptions);
          var marker = new google.maps.Marker({
            position: myCenter
              });
          var IRS_info = "<strong>IRS Building</strong><br/>" +
          "<a href='#'>IRS Building </a>";    
    
          var IRS_infowindow = new google.maps.InfoWindow({
          content: IRS_info
          });   
         google.maps.event.addListener(marker, 'click', function() {
         IRS_infowindow.open(map,marker);
         });
              marker.setMap(map);
            }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUblr_dloJuNP-5Jmcmu8mNOEl0n20DuM&callback=myMap"></script>

     
    </div>    
