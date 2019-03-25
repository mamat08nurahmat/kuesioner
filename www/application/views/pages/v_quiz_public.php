<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}



#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}



h1 {
  text-align: center;  
}
.quiz{
  padding: 10px;
  width: 10%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

    #chart{
        position:auto;
        width:500px;
        height:500px;
        top:0;
        left:0;
    }
</style>
<body>

<form id="regForm" action="<?=site_url('quiz/submit');?>" method='POST'>
  <h1>KUESIONER:</h1>
  <!-- One "tab" for each step in the form: -->
  
  <div class="tab">Biodata:
    <p><input type='hidden' value="<?=$kd_quiz?>" oninput="this.className = ''" name="kd_quiz"></p>
    <p><input type='hidden' value="<?=$_SESSION['ID']?>" oninput="this.className = ''" name="kd_user"></p>
    <p><input placeholder="Nama Lengkap" oninput="this.className = ''" name="nama_lengkap"></p>
    <p><input type="number" placeholder="Phone Number" oninput="this.className = ''" name="no_telpon"></p>
  </div>
  
  <div class="tab">1 Qqqqqqqq ???:

   <p>
   <input type="radio" class="quiz" name="q1" id="q1" value="1" checked="checked">aaaaa
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q1" id="q1" value="2">bbbbb
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q1" id="q1" value="3">ccccc
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q1" id="q1" value="4">ddddd
   </p> 
   
   <p>
   <input  type="radio" class="quiz" name="q1" id="q1" value="5">lainnya
   </p> 
   
<div class="lainnya-fields">
    <p><input  value="." oninput="this.className = ''" name="q1lainnya" id="q1lainnya" ></p>
</div> 

  </div>
  
  
  <div class="tab">2. Qqqqqqqqqqqqqqq ????:


   <p>
   <input type="radio" class="quiz" name="q2" id="q2" value="1" checked="checked">aaaaa
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q2" id="q2" value="2">bbbbb
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q2" id="q2" value="3">ccccc
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q2" id="q2" value="4">ddddd
   </p> 
   
   <p>
   <input  type="radio" class="quiz" name="q2" id="q2" value="5">lainnya
   </p> 
   
<div class="lainnya-fields">
    <p><input  value="." oninput="this.className = ''" name="q2lainnya" id="q2lainnya" ></p>
</div> 

  </div>
  
  
  <div class="tab">3. Qqqqqqqqqqqqqqq ????
  
   <p>
   <input type="radio" class="quiz" name="q3" id="q3" value="1" checked="checked">aaaaa
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q3" id="q3" value="2">bbbbb
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q3" id="q3" value="3">ccccc
   </p> 
   
   <p>
   <input type="radio" class="quiz" name="q3" id="q3" value="4">ddddd
   </p> 
   
   <p>
   <input  type="radio" class="quiz" name="q3" id="q3" value="5">lainnya
   </p> 
   
<div class="lainnya-fields">
    <p><input  value="." oninput="this.className = ''" name="q3lainnya" id="q3lainnya" ></p>
</div> 
    
  </div>
  
  <div class="tab">
  <center>
   <div id="chart"></div>
<input type="text">	  
	<p><h1>ANDA MENDAPATKAN ...???</h1></p>

	<div id="question"><h1></h1></div>
	
  </center>
	<input type="text" value=""  name="kd_hadiah" id="kd_hadiah">

  </div>
<!----->
    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script>


/*
*/
  </script>
	
    <script type="text/javascript" charset="utf-8">
/*
$(document).ready(function() {
	    $.ajax({
//        url : "<?php echo site_url('quiz/get_hadiah/')?>/"+<?=$this->uri->segment(3);?>,
          url : "<?php echo site_url('quiz/get_hadiah/')?>",
        type: "GET",
        dataType: "JSON",
        success: function(datax)
        {
//$('[name="EmployeeName"]').val(data.EmployeeName);
console.log(datax);		

		
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
	
	
});	
*/	


var data = <?=json_encode($data_hadiah)?>;
/*
        var data = [
                    {"kd_hadiah":1, "nama_hadiah":"LAPTOP ASUS ROG"}, // 
                    {"kd_hadiah":2, "nama_hadiah":"IMAC PRO"},
                    {"kd_hadiah":3, "nama_hadiah":"GELAS KACA"}, 
                    {"kd_hadiah":4,  "nama_hadiah":"PAYUNG CANTIK"}, 
                    {"kd_hadiah":5,  "nama_hadiah":"SANDAL JEPIT"}, 
                    {"kd_hadiah":6,  "nama_hadiah":"APARTMENT 1X2 M"}, 
                    
        ];
*/	
//console.log(data);
		
        var padding = {top:20, right:40, bottom:0, left:0},
            w = 500 - padding.left - padding.right,
            h = 500 - padding.top  - padding.bottom,
            r = Math.min(w, h)/2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();//category20c()
			
        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width",  w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);
        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");
        var vis = container
            .append("g");
            
        var pie = d3.layout.pie().sort(null).value(function(d){return 1;});
        // declare an arc generator function
        var arc = d3.svg.arc().outerRadius(r);
        // select paths, use arc generator to draw
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");
            
        arcs.append("path")
            .attr("fill", function(d, i){ return color(i); })
            .attr("d", function (d) { return arc(d); });
        // add the text
        arcs.append("text").attr("transform", function(d){
                d.innerRadius = 0;
                d.outerRadius = r;
                d.angle = (d.startAngle + d.endAngle)/2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
            })
            .attr("text-anchor", "end")
            .text( function(d, i) {
                return data[i].nama_hadiah;
            });
        container.on("click", spin);	
		
        function spin(d){
            
                    //container.off("click");
			
            container.on("click", null);
            //all slices have been seen, all done
            console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
            if(oldpick.length == data.length){
                console.log("done");
                container.on("click", null);
                return;
            }
            var  ps       = 360/data.length,
                 pieslice = Math.round(1440/data.length),
                 rng      = Math.floor((Math.random() * 1440) + 360);
                
            rotation = (Math.round(rng / ps) * ps);
            
            picked = Math.round(data.length - (rotation % 360)/ps);
            picked = picked >= data.length ? (picked % data.length) : picked;
            if(oldpick.indexOf(picked) !== -1){
                d3.select(this).call(spin);
                return;
            } else {
                oldpick.push(picked);
            }
            rotation += 90 - Math.round(ps/2);
            vis.transition()
                .duration(3000)
                .attrTween("transform", rotTween)
                .each("end", function(){
                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                        .attr("fill", "#111");
                    //populate question
                    d3.select("#question h1")
                        .text(data[picked].nama_hadiah); ///--!!!
						
				$("#kd_hadiah").val(data[picked].kd_hadiah);
				//$("#selamat").text(data[picked].nama_hadiah);
				document.getElementById("nextBtn").style.display = "inline";				

				oldrotation = rotation;
                
                    container.on("click", spin);
                });
				container.off("click");
				
        }
		
        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
            .style({"fill":"black"});
        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 60)
            .style({"fill":"white","cursor":"pointer"});
        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("SPIN")
            .style({"font-weight":"bold", "font-size":"30px"});
        
        
        function rotTween(to) {
          var i = d3.interpolate(oldrotation % 360, rotation);
          return function(t) {
            return "rotate(" + i(t) + ")";
          };
        }
        
        
        function getRandomNumbers(){
            var array = new Uint16Array(1000);
            var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);
            if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
                window.crypto.getRandomValues(array);
                console.log("works");
            } else {
                //no support for crypto, get crappy random numbers
                for(var i=0; i < 1000; i++){
                    array[i] = Math.floor(Math.random() * 100000) + 1;
                }
            }
            return array;
        }
    </script>
<!----->
    
  </div>



  
  
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
 
	<span class="step"></span>
  </div>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('input[class="quiz"]').on('change', function() {
  // this, in the anonymous function, refers to the changed-<input>:
  // select the element(s) you want to show/hide:
  $('.lainnya-fields')
      // pass a Boolean to the method, if the numeric-value of the changed-<input>
      // is exactly equal to 2 and that <input> is checked, the .business-fields
      // will be shown:
      .toggle(+this.value === 5 && this.checked);
// trigger the change event, to show/hide the .business-fields element(s) on
// page-load:
}).change();
</script>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  //tombol prev nonaktif
  if (n == 0 || n == (x.length - 1)) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
    document.getElementById("nextBtn").style.display = "none";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
	confirm('Subbmit?');
	console.log('submitttttttttt');
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
