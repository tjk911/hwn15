<?php
  include('header.php')
?>
    
    <div class="row">
      <div class="large-12 columns head-wrap">
        <h2 style="margin-bottom:0.25rem; font-size:2em;">Your guide to Halloween in lohud</h2>
        <!-- <p style="margin-bottom:0.25rem; margin-top:0.25rem;">BOO. Scary Brief Here</p> -->
      </div>
    </div>

<!--     <div class="row">
      <div class="large-12 columns">
        <hr style="border:2px solid; margin:0.5rem 0 0.5rem 0;">
          <img src="http://placehold.it/100x50">
          <img src="http://placehold.it/100x50">
          <img src="http://placehold.it/100x50">
        <hr style="border:1x solid; margin:0.5rem 0 0.5rem 0;">  
      </div>
    </div> -->
    
    <div class="row">


      <div class="container">
          <div class="toggle1">
            <div class="large-12 columns" style="background-clip: content-box; background-color: #fff;">
              
              <div style="background-image:url('uploads/front2.jpg');background-size:cover; height:400px;" class="hide-for-small">
                
              </div>

              <div style="padding:20px; box-sizing:border-box;">
                <p>With spooky cemeteries and blazing pumpkin fests, The Lower Hudson Valley is Halloween central. Find an event that suits your fear factor here:  </p>



              </div>
                
              <div style="background-color:#ececec; padding:10px;"></div>
              <ul class="menu">
                  <li class="toggle1 button small">Family-friendly frights</li>
                  <li class="toggle2 button small">Serious scares</li>
                  <li class="toggle3 button small">Nonfiction fear</li>
                  <li class="toggle4 button small">Screams on stage and screen</li>
                  <li class="toggle5 button small">Adults-only costume parties</li>
              </ul>
              <div style="background-color:#ececec; padding:10px;"></div>
              <div class="ffr" id="ffr"></div>
            </div>
          </div>
          <div class="toggle2">
            <div class="large-12 columns" style="background-clip: content-box; background-color: #fff;">
              
              <div style="background-image:url('uploads/front2.jpg');background-size:cover; height:400px;" class="hide-for-small">
                
              </div>

              <div style="padding:20px; box-sizing:border-box;">
                <p>With spooky cemeteries and blazing pumpkin fests, The Lower Hudson Valley is Halloween central. Find an event that suits your fear factor here:  </p>



              </div>
                
              <div style="background-color:#ececec; padding:10px;"></div>
              <ul class="menu">
                  <li class="toggle1 button small">Family-friendly frights</li>
                  <li class="toggle2 button small">Serious scares</li>
                  <li class="toggle3 button small">Nonfiction fear</li>
                  <li class="toggle4 button small">Screams on stage and screen</li>
                  <li class="toggle5 button small">Adults-only costume parties</li>
              </ul>
              <div style="background-color:#ececec; padding:10px;"></div>
              <div class="ss" id="ss"></div>
            </div>
          </div>
          <div class="toggle3">
            <div class="large-12 columns" style="background-clip: content-box; background-color: #fff;">

              <div style="background-image:url('uploads/front2.jpg');background-size:cover; height:400px;" class="hide-for-small">
                
              </div>

              <div style="padding:20px; box-sizing:border-box;">
                <p>With spooky cemeteries and blazing pumpkin fests, The Lower Hudson Valley is Halloween central. Find an event that suits your fear factor here:  </p>



              </div>
                
              <div style="background-color:#ececec; padding:10px;"></div>
              <ul class="menu">
                  <li class="toggle1 button small">Family-friendly frights</li>
                  <li class="toggle2 button small">Serious scares</li>
                  <li class="toggle3 button small">Nonfiction fear</li>
                  <li class="toggle4 button small">Screams on stage and screen</li>
                  <li class="toggle5 button small">Adults-only costume parties</li>
              </ul>
              <div style="background-color:#ececec; padding:10px;"></div>
              <div class="nfr" id="nfr"></div>
            </div>
          </div>
          <div class="toggle4">
            <div class="large-12 columns" style="background-clip: content-box; background-color: #fff;">              
              <div style="background-image:url('uploads/front2.jpg');background-size:cover; height:400px;" class="hide-for-small">
                
              </div>

              <div style="padding:20px; box-sizing:border-box;">
                <p>With spooky cemeteries and blazing pumpkin fests, The Lower Hudson Valley is Halloween central. Find an event that suits your fear factor here:  </p>



              </div>
                
              <div style="background-color:#ececec; padding:10px;"></div>
              <ul class="menu">
                  <li class="toggle1 button small">Family-friendly frights</li>
                  <li class="toggle2 button small">Serious scares</li>
                  <li class="toggle3 button small">Nonfiction fear</li>
                  <li class="toggle4 button small">Screams on stage and screen</li>
                  <li class="toggle5 button small">Adults-only costume parties</li>
              </ul>
              <div style="background-color:#ececec; padding:10px;"></div>
              <div  class="sosas" id="sosas"></div>
            </div>
          </div>
          <div class="toggle5">
            <div class="large-12 columns" style="background-clip: content-box; background-color: #fff;">              
              <div style="background-image:url('uploads/front2.jpg');background-size:cover; height:400px;" class="hide-for-small">
                
              </div>

              <div style="padding:20px; box-sizing:border-box;">
                <p>With spooky cemeteries and blazing pumpkin fests, The Lower Hudson Valley is Halloween central. Find an event that suits your fear factor here:  </p>



              </div>
                
              <div style="background-color:#ececec; padding:10px;"></div>
              <ul class="menu">
                  <li class="toggle1 button small">Family-friendly frights</li>
                  <li class="toggle2 button small">Serious scares</li>
                  <li class="toggle3 button small">Nonfiction fear</li>
                  <li class="toggle4 button small">Screams on stage and screen</li>
                  <li class="toggle5 button small">Adults-only costume parties</li>
              </ul>
              <div style="background-color:#ececec; padding:10px;"></div>
              <div  class="acp" id="acp"></div>
            </div>
          </div>
      </div>


      <script type="text/javascript">
        $('.menu>li').on('click',function(e){
            $('.container>.'+ e.target.classList[0]).show().siblings().hide();
        });
      </script>
        
        <script type="text/javascript">

            $.getJSON('entries.json', function(data){
                  myItems = data;
                  // console.log(data);
                  // var news = document.getElementsByClassName("news")[0];
                  for(var s = 0; s < data.length; s++) {    if (data[s]['profileid']=='Family-friendly frights'){
                      var ffr = document.createElement("div");
                      // ffr.setAttribute("id", "ffr");
                      ffr.innerHTML = 
                      "<div class='row'> \
                        <div style='box-sizing:border-box;'> \
                          <div class='large-3 columns' style='padding-top:10px;'> \
                            "+ ( data[s]['url'] !== "" ? "<img src='uploads/"+data[s]['url']+"'>" : "<img src='uploads/ffr.jpg'>" )+ "\
                          </div> \
                          <div class='large-9 columns'> \
                            <h2 style='margin: 0rem'>"+data[s]['name']+"</h2> \
                            "+ ( data[s]['city'] !== "" ? "<h4 style='margin-top:0.5rem'>Go: "+data[s]['city']+"</h4>" : "" )+ "\
                            <p>"+data[s]['desc']+"</p> \
                            "+ ( data[s]['address'] !== "" ?  "<p><b>Phone:</b> "+data[s]['address']+"</p>" : "" )+ "\
                            <p><a href='"+data[s]['bizurl']+"'>"+data[s]['bizurl']+"</a></p> \
                          </div> \
                        </div> \
                      </div> \
                      <div style='background-color:#ececec; padding:10px;'></div>";
                      document.getElementById("ffr").appendChild(ffr)
                    } else if (data[s]['profileid']=='Serious scares'){
                      var ss = document.createElement("div");
                      // ss.setAttribute("id", "ss");
                      // ss.style.cssText ='display:none';
                      ss.innerHTML = 
                      "<div class='row'> \
                        <div style='box-sizing:border-box;'> \
                          <div class='large-3 columns' style='padding-top:10px;'> \
                            "+ ( data[s]['url'] !== "" ? "<img src='uploads/"+data[s]['url']+"'>" : "<img src='uploads/ss.jpg'>" )+ "\
                          </div> \
                          <div class='large-9 columns'> \
                            <h2 style='margin: 0rem'>"+data[s]['name']+"</h2> \
                            "+ ( data[s]['city'] !== "" ? "<h4 style='margin-top:0.5rem'>Go: "+data[s]['city']+"</h4>" : "" )+ "\
                            <p>"+data[s]['desc']+"</p> \
                            "+ ( data[s]['address'] !== "" ?  "<p><b>Phone:</b> "+data[s]['address']+"</p>" : "" )+ "\
                            <p><a href='"+data[s]['bizurl']+"'>"+data[s]['bizurl']+"</a></p> \
                          </div> \
                        </div> \
                      </div> \
                      <div style='background-color:#ececec; padding:10px;'></div>";
                      document.getElementById("ss").appendChild(ss)
                    } else if (data[s]['profileid']=='Nonfiction fear'){
                      var nfr = document.createElement("div");
                      // nfr.setAttribute("id", "nfr");
                      // nfr.style.cssText ='display:none';
                      nfr.innerHTML = 
                      "<div class='row'> \
                        <div style='box-sizing:border-box;'> \
                          <div class='large-3 columns' style='padding-top:10px;'> \
                            "+ ( data[s]['url'] !== "" ? "<img src='uploads/"+data[s]['url']+"'>" : "<img src='uploads/nfr.jpg'>" )+ "\
                          </div> \
                          <div class='large-9 columns'> \
                            <h2 style='margin: 0rem'>"+data[s]['name']+"</h2> \
                            "+ ( data[s]['city'] !== "" ? "<h4 style='margin-top:0.5rem'>Go: "+data[s]['city']+"</h4>" : "" )+ "\
                            <p>"+data[s]['desc']+"</p> \
                            "+ ( data[s]['address'] !== "" ?  "<p><b>Phone:</b> "+data[s]['address']+"</p>" : "" )+ "\
                            <p><a href='"+data[s]['bizurl']+"'>"+data[s]['bizurl']+"</a></p> \
                          </div> \
                        </div> \
                      </div> \
                      <div style='background-color:#ececec; padding:10px;'></div>";
                      document.getElementById("nfr").appendChild(nfr)
                    } else if (data[s]['profileid']=='Screams on stage and screen'){
                      var sosas = document.createElement("div");
                      // sosas.setAttribute("id", "sosas");
                      // sosas.style.cssText ='display:none';
                      sosas.innerHTML = 
                      "<div class='row'> \
                        <div style='box-sizing:border-box;'> \
                          <div class='large-3 columns' style='padding-top:10px;'> \
                            "+ ( data[s]['url'] !== "" ? "<img src='uploads/"+data[s]['url']+"'>" : "<img src='uploads/sosas.jpg'>" )+ "\
                          </div> \
                          <div class='large-9 columns'> \
                            <h2 style='margin: 0rem'>"+data[s]['name']+"</h2> \
                            "+ ( data[s]['city'] !== "" ? "<h4 style='margin-top:0.5rem'>Go: "+data[s]['city']+"</h4>" : "" )+ "\
                            <p>"+data[s]['desc']+"</p> \
                            "+ ( data[s]['address'] !== "" ?  "<p><b>Phone:</b> "+data[s]['address']+"</p>" : "" )+ "\
                            <p><a href='"+data[s]['bizurl']+"'>"+data[s]['bizurl']+"</a></p> \
                          </div> \
                        </div> \
                      </div> \
                      <div style='background-color:#ececec; padding:10px;'></div>";
                      document.getElementById("sosas").appendChild(sosas)
                    } else if (data[s]['profileid']=='Adults-only costume parties'){
                      var acp = document.createElement("div");
                      acp.innerHTML = 
                      "<div class='row'> \
                        <div style='box-sizing:border-box;'> \
                          <div class='large-3 columns' style='padding-top:10px;'> \
                            "+ ( data[s]['url'] !== "" ? "<img src='uploads/"+data[s]['url']+"'>" : "<img src='uploads/acp.jpg'>" )+ "\
                          </div> \
                          <div class='large-9 columns'> \
                            <h2 style='margin: 0rem'>"+data[s]['name']+"</h2> \
                            "+ ( data[s]['city'] !== "" ? "<h4 style='margin-top:0.5rem'>Go: "+data[s]['city']+"</h4>" : "" )+ "\
                            <p>"+data[s]['desc']+"</p> \
                            "+ ( data[s]['address'] !== "" ?  "<p><b>Phone:</b> "+data[s]['address']+"</p>" : "" )+ "\
                            <p><a href='"+data[s]['bizurl']+"'>"+data[s]['bizurl']+"</a></p> \
                          </div> \
                        </div> \
                      </div> \
                      <div style='background-color:#ececec; padding:10px;'></div>";
                      document.getElementById("acp").appendChild(acp)
                    }
                  };
              })

        </script>
    </div>


<?php
  include('footer.php')
?>