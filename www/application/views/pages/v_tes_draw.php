<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kuesioner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Kuesioner">
    <!-- Fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/logo.png')?>">
	
    <style type="text/css">
    text{
        font-family:Helvetica, Arial, sans-serif;
        font-size:11px;
        pointer-events:none;
    }
    #chart{
        /* position:absolute; */
        width:900px;
        height:900px;
        padding-top:150px;
        
    }

#finish {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  display:none;
}

    button:hover {
    opacity: 0.8;
    }

    /* #question{
        /* position: fixed; */
        /* width:400px; */
        /* height:500px; */
        /* top:100px;
        left:520px; */
    }
    /* #question h1{
        font-size: 15px;
        font-weight: bold;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        position: absolute;
        padding: 0;
        margin: 0;
        top:50%;
        -webkit-transform:translate(0,-50%);
                transform:translate(0,-50%);
    }  */
    </style>
    
</head>
<body>
    <!-- <button id="myBtn">Try it</button>     -->
<center>
    <div id="chart"></div>
    <div id="selamat">
    <!-- <div id="nama_hadiah">XXXXXXXXXXXXXXXXXXXXX</div> -->
    <div id="question"><h2></h2><h1></h1></div>  
<form action="<?=site_url('/quiz/submit_draw')?>" method="POST">
    <!-- INPUT kd hadiah type=hidden -->
	<p><input type="hidden"   name="kd_kuesioner" id="kd_kuesioner" value="<?=$kd_kuesioner?>" ></p>
	<p><input type="hidden"   name="kd_hadiah" id="kd_hadiah" ></p>


    <button type="submit" id="finish">FINISH</button>
</form>
</center>



    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>    
    <script type="text/javascript" charset="utf-8">


        var padding = {top:20, right:40, bottom:0, left:0},
            w = 500 - padding.left - padding.right,
            h = 500 - padding.top  - padding.bottom,
            r = Math.min(w, h)/2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();//category20c()
            //randomNumbers = getRandomNumbers();
        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results
        // var data = [
        //             {"label":"Dell LAPTOP",  "value":1,  "question":"What CSS property is used for specifying the area between the content and its border?"}, // padding
        //             {"label":"IMAC PRO",  "value":2,  "question":"What CSS property is used for changing the font?"}, //font-family
        //             {"label":"SUZUKI",  "value":3,  "question":"What CSS property is used for changing the color of text?"}, //color
        //             {"label":"HONDA",  "value":4,  "question":"What CSS property is used for changing the boldness of text?"}, //font-weight
        //             {"label":"FERRARI",  "value":5,  "question":"What CSS property is used for changing the size of text?"}, //font-size
        //             {"label":"APARTMENT",  "value":6,  "question":"What CSS property is used for changing the background color of a box?"}, //background-color
        //             {"label":"IPAD PRO",  "value":7,  "question":"Which word is used for specifying an HTML tag that is inside another tag?"}, //nesting
        //             {"label":"LAND",  "value":8,  "question":"Which side of the box is the third number in: margin:1px 1px 1px 1px; ?"} //bottom
                   
        // ];

        var data = <?=json_encode($data_hadiah)?>;
        // var data = [
        //             {"kd_hadiah":1, "nama_hadiah":"LAPTOP ASUS ROG"}, // 
        //             {"kd_hadiah":2, "nama_hadiah":"IMAC PRO"},
        //             {"kd_hadiah":3, "nama_hadiah":"GELAS KACA"}, 
        //             {"kd_hadiah":4,  "nama_hadiah":"PAYUNG CANTIK"}, 
        //             {"kd_hadiah":5,  "nama_hadiah":"SANDAL JEPIT"}, 
        //             {"kd_hadiah":6,  "nama_hadiah":"APARTMENT 1X2 M"}, 
                    
        // ];

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
                // return data[i].label;
                return data[i].nama_hadiah;
            });

            container.on("click", spin);
 


        function spin(d){
            
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
                
            //      rotation = (Math.round(rng / ps) * ps);
                 rotation = 999999;
            
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
                .duration(5000)
                .attrTween("transform", rotTween)
                .each("end", function(){
                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                        .attr("fill", "#111");
                    //populate question

                    d3.select("#question h2")
                    .text("SELAMAT ANDA MENDAPATKAN");
                    

                    d3.select("#question h1")
                    .text(data[picked].nama_hadiah);
                    // .text(data[picked].nama_hadiah);



                        $("#kd_hadiah").val(data[picked].kd_hadiah);
                        // $("#nama_hadiah").text(data[picked].question);
                        document.getElementById("finish").style.display = "inline";		

                    oldrotation = rotation;
                
                    container.on("click", spin);
                    container.off("click", spin);
                });
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
</body>
</html>
