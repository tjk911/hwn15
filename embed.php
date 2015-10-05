<?php
	if (isset ($_GET['profileid'])) {
	    $profileid = $_GET['profileid'];
	}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile embed</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <style type="text/css">
	    .profile {
	    	width:80%;
	    	height: 80%;
	    	margin-top:15px;
	    }

	    .credit {
	    	/*padding-left:37px;*/
        padding:10px;
	    }

	    .flip-container, .front, .back {
	    	min-height: 400px;
	    }

	    .bcontent p {
	    	margin-bottom:.7em;
	    }

	    h4 {
	    	font-size:2em;
        line-height: 34px;
	    }


    </style>
  </head>
  <body>	
  	<div class="news">
		<script>
		    profileid = "<?php echo $profileid; ?>";
		    // console.log(playerid);

	          $.getJSON('entries.json', function(data){
	                myItems = data;
	                // console.log(data);
	                var news = document.getElementsByClassName("news")[0];
	                for(var s = 0; s < data.length; s++) {
	                	if (profileid == data[s]['profileid']) {
	                		var head = document.createElement("div");
	                		head.innerHTML = 
                  "<div class='large-3 medium-3 small-12 columns pad' player='" + data[s]['profileid'] + "'> \
                    <div class='flip-container' ontouchstart="+'+this.classList.toggle('+"'hover'"+");> \
                      <div class='flipper' data-equalizer> \
                        <div class='front cards' data-equalizer-watch> \
                          <div class='image'><img src='uploads/" + data[s]['url'] + "' class='profile'> \
                            <h5 class='credit'>" + data[s]['credit'] + "</h5> \
                          </div> \
                          <div class='content' > \
                            <h4>" + data[s]['value1'] + "</h4> \
                          </div> \
                        </div> \
                        <div class='back cards' data-equalizer-watch> \
                          <div class='bcontent' > \
                            <h4>" + data[s]['value1'] + "</h4> \
                            <hr>" +
                            (data[s]['field2'] == '' ? "" : "<p><b>" + data[s]['field2'] + ": </b>" + data[s]['value2'] + "</p>") + 
                            (data[s]['field3'] == '' ? "" : "<p><b>" + data[s]['field3'] + ": </b>" + data[s]['value3'] + "</p>") + 
                            (data[s]['field4'] == '' ? "" : "<p><b>" + data[s]['field4'] + ": </b>" + data[s]['value4'] + "</p>") + 
                            (data[s]['field5'] == '' ? "" : "<p><b>" + data[s]['field5'] + ": </b>" + data[s]['value5'] + "</p>") + " \
                          </div> \
                        </div> \
                      </div> \
                    </div> \
                  </div>";
	                		news.appendChild(head);
	                	}
	                };
	            })
		</script>
  	</div>
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.tabletojson.js"></script>
    <script>

    /***************
    ***** MAIN *****
    ***************/


    //Init Foundation
    $(document).foundation();


    /*************************
    ***** EVENT HANDLERS *****
    *************************/


    //Handle click me click
    $('#convert-table').click( function() {
        //Convert table 
        var table = $('#markers').tableToJSON();
        var json = JSON.stringify(table);

        $.post('save.php', {'data': json}, function(response){
            //If there is a response from the server, do something here
        });
    });


    //Capture and bind keypresses
    $('body').keypress(function(event){
        var esc = event.which == 27,
            nl = event.which == 13,
            el = event.target,
            input = el.nodeName != 'INPUT' && el.nodeName != 'TEXTAREA',
            data = {};

            if (input) {
                if (esc) {
                  // restore state
                  document.execCommand('undo');
                  el.blur();
            } else if (nl) {
              // save
              data[el.getAttribute('contenteditable')] = el.innerHTML;

              el.blur();
              event.preventDefault();
            }
          }

    })
    </script>
  </body>
</html>