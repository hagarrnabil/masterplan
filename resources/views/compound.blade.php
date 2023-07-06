<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title>The Master Plan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
        <style>
          *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            
            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin: 0;
                height: 100vh;
                text-align: center;
                color: #009879;
                font-weight: bold;
                background-image: url({{ asset('img/omar.jpg') }});
            }

            
            header{
                height: 90px;
                background: #2f3640;
                width: 100%;
            }

            .inner-width{
                max-width: 1000px;
                padding: 0 10px;
                margin: auto;
            }

            .logo{
                float: left;
                padding: 20px 0;
            }

            .logo img{
                height: 50px;
            }

            .navigation-menu{
                float: right;
                display: flex;
                align-items: center;
                min-height: 90px;
            }

            .navigation-menu a{
                margin-left: 10px;
                color: #ddd;
                text-transform: uppercase;
                font-size: 14px;
                padding: 12px 20px;
                border-radius: 4px;
                transition: .3s linear;
            }

            .navigation-menu a:hover{
                background: #fff;
                color: #2f3640;
                transform: scale(1.1);
            }

            .navigation-menu i{
                margin-right: 8px;
                font-size: 16px;
            }

            .home{
                color: #ff6b6b;
            }

            .about{
                color: #0abde3;
            }

            .works{
                color: #feca57;
            }

            .team{
                color: #5f27cd;
            }

            .contact{
                color: #1dd1a1;
            }
            .fa-search{
                color: tomato;
            }
			.fa-home{
				color: tomato;
			}

            .menu-toggle-btn{
            float: right;
            height: 90px;
            line-height: 90px !important;
            color: #fff;
            font-size: 26px;
            display: none !important;
            cursor: pointer;
            }


            @media screen and (max-width:700px) {
            .menu-toggle-btn{
                display: block !important;
            }

            .navigation-menu{
                position: fixed;
                width: 100%;
                max-width: 400px;
                background: #172b4d;
                top: 90px;
                right: 0;
                display: none;
                padding: 20px 40px;
                box-sizing: border-box;
            }

            .navigation-menu::before{
                content: "";
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                border-bottom: 10px solid #172b4d;
                position: absolute;
                top: -10px;
                right: 10px;
            }

            .navigation-menu a{
                display: block;
                margin: 10px 0;
            }

            .navigation-menu.active{
                display: block;
            }
            }
            
            /*Prg*/
            p { font: 1.125em/2 trebuchet ms, tahoma, sans-serif }

            /* Box + - */ 
            code {
                display: inline-block;
                padding: 0 .375em .125em;
                border-radius: 5px;
                background: #ccc;
                font: 900 1.125em/1.25 consolas, monaco, monospace;
                cursor: pointer;
            }

            /*Map*/
            svg {
                width: 99vw;
            }

            /*Path*/
            [d] {
                /*fill: rgba(81, 240, 7, 0.4);*/
                transition: .7s;
                cursor: pointer;
            }

            /*
            hover Path
            [d]:hover { }
            */

            /*msg for zoom in and out*/
            .msg {
                height: 2em;
                padding: .25em .75em;
                border-radius: 5px;
                /*background: #009800;*/
                color: rgb(10, 10, 10);
                font-weight: bold;
            }

            /*ms2ola 3n el ay link magod fl model building*/
            a:link,a:visited{
                text-decoration: none;
                color: #009800;
                font-weight: bold;
            }   

            .modal{
                background-color: rgba(0,0,0, .8);
                width:100%;
                height: 100vh;
                position: absolute;
                left: 0;
                z-index: 10;
                opacity: 0;
                visibility: hidden;
                transition: all .5s;
            }

            .model{
                background-color: rgba(0,0,0, .8);
                width:100%;
                height: 145vh;
                position: absolute;
                visibility: hidden;
                transition: all .5s;
                align-self: start;
            }

            .modal__content{
                width: 75%;
                height: 65%;
                background-color: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 2em;
                border-radius: 1em;
                opacity: 0;
                /*visibility: hidden;*/
                transition: all .5s;
                background-image: url({{ asset('img/background.jpg') }});
                background-size: cover;
            }
            .modal__content_search{
                width: 75%;
                height: 65%;
                background-color: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 2em;
                border-radius: 1em;
                opacity: 0;
                visibility: hidden;
                transition: all .5s;
                background-image: url({{ asset('img/background.jpg') }});
                background-size: cover;
                
                
            }

            #modal:target{
                opacity: 1;
                visibility: visible;
            }

            #model:target{
                opacity: 1;
                visibility: visible;
            }

            #modal:target .modal__content{
                opacity: 1;
                visibility: visible;
            }
            #modal:target .modal__content_search{
                opacity: 1;
                visibility: visible;
            }

            #model:target .modal__content{
                opacity: 1;
                visibility: visible;
            }
            
            #model:target .modal__content_search{
                opacity: 1;
                visibility: visible;
            }
            .modal__close{
                color: #363636;
                font-size: 2em;
                position: absolute;
                top: .5em;
                right: 1em;
            }

            .modal__heading{
                color: dodgerblue;
                margin-bottom: 1em;
                text-align: left;
                color: #009879;
            }

            .modal__paragraph{
                line-height: 1.5em;
                text-align: left;
                color: black;
            }

            .modal_Gallary{
                float: right; 
                width: 50%;
                height: 85%;
                margin-top: -310px;
            }

            .Building{
                float: right; 
                width: 100%;
                height:100%;
                margin-top: 60px;
                
            }

            .modal-open{
                display: inline-block;
                color: dodgerblue;
                margin: 2em;
                
            }

            .Unit_details{
                color: #009879;
                text-align: center;
            }

            .Building_details{
                color: #009879;
                
            }

             /*ms2ola 3n mkan el form fl screen*/
                .contact-form{
                width: 85%;
                max-width: 1100px;
                background: #f1f1f1;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                padding: 30px 40px;
                box-sizing: border-box;
                border-radius: 8px;
                text-align: center;
                box-shadow: 0 0 20px #000000b3;
                font-family: "Montserrat",sans-serif;
                }



                .contact-form h1{
                margin-top: 0;
                font-weight: 200;
                }
                .txtb{
                border:1px solid gray;
                margin: 8px 0;
                padding: 12px 18px;
                border-radius: 8px;
                width: 40%;
                }
                .txtb2{
                border:1px solid gray;
                margin: -px 0;
                padding: 12px 18px;
                border-radius: 8px;
                width: 40%;
                float: right;
                }

                .txtb label{
                display: block;
                text-align: left;
                color: #333;
                text-transform: uppercase;
                font-size: 14px;
                }

                .txtb2 label{
                display: block;
                text-align: left;
                color: #333;
                text-transform: uppercase;
                font-size: 14px;
                }

                .txtb input,.txtb textarea ,.txtb2 input {
                width: 100%;
                border: none;
                background: none;
                outline: none;
                font-size: 18px;
                margin-top: 6px;
                }

                .btn{
                display: inline-block;
                /*background: #2f3640; 9b59b6*/
                padding: 14px 0;
                cursor: pointer;
                width: 50%;
                position: relative;
                color: rgb(14, 13, 13);
                font-size: 14px;
                border: 1px solid #2f3640;
                overflow: hidden;
                transition: 3s all ease;
                
                font-size: x-large;
                }
                .btn:hover{
                color: rgb(247, 245, 245);
                }
                .btn::before{
                background: #2f3640;
                content: "";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                z-index: -1;
                transition: all 0.6s ease;
                width: 100%;
                height: 0%;
                transform: translate(-50%,-50%) rotate(45deg);
                }
                .btn:hover::before{
                height: 890%;
                }
                input[type=number], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                }
                /* Style the form - display items horizontally */

                .form-inline {
                    
                display: flex;
                flex-flow: row wrap;
                align-items: center;
                }
                /* Add some margins for each label */
                .form-inline label {
                margin: 5px 10px 5px 0;
                margin-right: 100%;
                color: rgb(43, 7, 246);
                }

                /* Style the input fields */
                .form-inline input {
                vertical-align: middle;
                margin: 5px 10px 5px 0;
                padding: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
                }
                .first {
                    border:1px solid gray;
                    margin: -px 0;
                    padding: 12px 18px;
                    border-radius: 8px;
                    width: 50%;
                    float: right;
                    
                }
                .second {
                    height: 410px;
                    border:1px solid gray;
                    margin: 8px 0;
                    padding: 12px 18px;
                    border-radius: 8px;
                    width: 50%;
                }
                @media only screen and (max-width: 479px){
                    #form-inline { width: 90%; }
                }
                .buttonsearch {
                    background-color: #4CAF50; 
                    border:0.1em solid #FFFFFF;
                    color: white;
                    padding:  0.35em 1.2em;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 25px;
                    cursor: pointer;
                    transition: all 0.2s;
                    width: 60%;
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                    box-sizing: border-box;
                    font-weight: 300;
                    display: inline-block;
                    margin-top: 10px;

                }
                .buttonsearch:hover{
                    color: #000000;
                    background-color: #FFFFFF;
                    align-self: center;
                }
        </style>
    </head>

    <body>
        <header>
			<!--<a  href="#modal" class="modal-open"><i class="fas fa-search"></i> Search</a>-->
			<a  href="{{ url('/') }}" class="modal-open"><i class="fas fa-home"></i> Home</a>
			<a  href="{{ url('/search') }}" class="modal-open"><i class="fas fa-search"></i> Search</a>
          </header><br>
          <h4>Use the <code>+</code> / <code>-</code> keys to zoom and the arrow keys to move.</h4><br>
        <!--<h1>The Master Plan</h1>
        <h4>Zoom in/out | Hover over the data point for additional data</h4>
        <p>Use the <code>+</code>/ <code>-</code> keys to zoom and the arrow keys to move.</p><br>
        <form action="">
            <input type="Search" name="srch" id="srch" list="datalist1" placeholder="Search your content...">
            <i class="fa fa-search" aria-hidden="true"></i>
            <datalist id="datalist1">
                <option value="Pool">
                <option value="Lake">
                <option value="Roof">
                <option value="Duplex ">
                <option value="With Garden">
                </datalist><br>
        </form> -->

        <svg version="1.1" viewBox="0 0 416.35 352.08" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xLink" width="500" id="img1" ><!-- onmousedown="increase()" onmouseup="decrease()" -->
            <g transform="translate(88.733 26.359)">
            <a href="#model" class="modal-open">
                <g id='units' fill="none" stroke="#000" stroke-width=".26458px">
                    <path d="m20.697 87.951 11.339-9.0714 7.1816 9.0714-10.961 9.4494z" name='B1'/>
                    <path d="m38.651 78.879 12.284-4.9137 4.3467 10.205-12.095 4.9137z" name='B2'/>
                    <path d="m56.416 69.052 12.851-2.0789 2.2678 12.284-12.662 1.8899z" name='B3'/>
                    <path d="m73.991 66.406 12.662-4.1577 3.9688 10.961-13.985 4.3467z" name='B4'/>
                    <path d="m99.694 58.09 13.607-3.7798 2.8348 11.15-13.418 3.4018z" name='B5' />
                    <path d="m118.03 53.177 9.0714-0.94494 1.1339 11.15-8.6934 0.18899z"/>
                    <path d="m132.2 52.043h14.174v10.205h-13.607z"/>
                    <path d="m150.91 52.043 14.552 2.8348-2.0789 11.15-13.796-1.7009z"/>
                    <path d="m105.74 74.154 13.985-3.2128 2.2679 11.528-13.796 2.4568z"/>
                    <path d="m124.45 69.997 14.363-0.37798v11.339l-12.851 0.37797z"/>
                    <path d="m143.54 69.619 15.686 1.3229-0.56696 11.717-15.875-2.0789z"/>
                    <path d="m75.125 85.683 12.473-5.6696 5.4807 9.6384-11.906 6.2366z"/>
                    <path d="m56.982 90.218 12.095-7.3705 6.2366 9.4494-10.961 7.5595z"/>
                    <path d="m34.304 101.18 6.2366-7.9375 7.3705 6.0476-6.4256 8.5045z"/>
                    <path d="m46.399 108.93 11.717-10.205 7.3705 7.9375-11.15 9.6384z"/>
                </g>
            </a>
        </svg>

        <p class='msg'></p>

        
        <!--Buildings Div-->
        <div class="model" id="model">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
                <h2 class="modal__heading">Building Details</h2>
                <div class="modal__paragraph">
                    Building Code: <span id="Building_Code" class="info"></span><br>
                    Description: <span id="Description" class="info"></span><br>
                    Status: <span id="Status" class="info"></span><br> 
                    Type: <span id="Type" class="info"></span><br>  
                    Zone: <span id="Zone" class="info"></span><br>  
                    Company Code: <span id="cCode" class="info"></span><br>
                    Project Code: <span id="Project_code" class="info"></span><br> 
                    Total Units: <span id="Total_Units" class="info">20</span><br>
                    No.Available Units: <span id="Available_Units" class="info"><a id='Available_Units_a' href="{{ url('/available_units') }}">5</a></span><br>
                    No.Unavailable Units: <span id="Unavailable_Units" class="info">15</span><br>
                </div>
                <div class="modal_Gallary">
                    <img src="{{ asset('img/Building.jpg') }}" class="Building"/>
                    <a id='href_building' href="{{ url('/building_details') }}" class="Building_details"> Go To Building </a>
                </div>
            </div>
        </div>
		
		
		       <!--Search Div -->
       <!--<div class="model" id="modal">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
                <h2 class="modal__heading">Unit Search</h2>
                <div class="form-inline">
				<form action="{{ url('/') }}">
                    <div class="first">
		                <div class="phase">
                            <label for="phase">Phase:</label>
                            <select data-trigger="" name="phase-code">
                                <option placeholder="" value="">Phase</option>
                                <option>Phase 1</option>
                                <option>Phase 2</option>
                            </select>
                        </div>
                        <div class="Zone">
                            <label for="Zone">Zone:</label>
                            <select data-trigger="" name="zone-code">
                                <option placeholder="" value="">Zone</option>
                                <option>Zone 1</option>
                                <option>Zone 2 </option>
                            </select>
                        </div> 
                        <div class="building">
                            <label for="Building">Building:</label>  
                            <select data-trigger="" name="building-code">
                                <option placeholder="" value="">Building</option>
                                <option>Building 1</option>
                                <option>Building 2</option>
                            </select>
                        </div>
                        <div class="annex">
                            <label for="Annex Type">Annex-:</label>
                            <select data-trigger="" name="checklist">
                                <option placeholder="" value="">Annex</option>
                                <option>Annex 1</option>
                                <option>Annex 2</option>
                            </select>
                        </div>
                        <div class="unit-type">
                            <label for="Unit type">Type:</label>
                            <select data-trigger="" name="checklist">
                                <option placeholder="" value="">Unit</option>
                                <option>Unit 1</option>
                                <option>Unit 2</option>
                            </select> 
                        </div>
                    </div>
                    <div class="second">
                        <div class="unit-category">
                            <label for="Unit Category">Category-:</label>
                            <select data-trigger="" name="checklist" style="width: 97%;">
                                <option placeholder="" value="">Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                            </select>
                        </div>
                        <div class="unit-delivery" style="margin-top: 8px;" >
                            <label for="Unit Delivery Date">DeliveryDate-:</label>
                            <span style="color: rgb(43, 7, 246);"
                            >From</span> 
                             <input type="date" id="start" name="trip-start" style="width: 37%;"> <span style="color: rgb(43, 7, 246);"
                            >To</span>
                              <input type="date" id="end" name="trip-start" style="width: 37%;">
                         </div>
                         <div class="unit-size" style="margin-top: 8px;">
                            <label for="Unit size">Size:</label>
                           <span style="color: rgb(43, 7, 246);"
                           >From</span>
                            <input type="number" value="50" min="0" max="500" style="width: 37%;"/> <span style="color: rgb(43, 7, 246);"
                            >To</span>
                            <input type="number" value="500" min="0" max="500" style="width: 37%;"/>  
                         </div>
                         <div class="price" style="margin-top: 8px;">
                            <label for="Unit Price">Price:</label>
                            <span style="color: rgb(43, 7, 246);">From</span>
                            <input type="number" value="5000" min="0" max="120000" style="width: 37%;"/><span style="color:rgb(43, 7, 246)">To
                            </span>
                            <input type="number" value="50000" min="0" max="120000" style="width: 37%;"/>
                        </div>
                    </div>                         
            </div>
                <button type="submit" class="buttonsearch">Search</button>
            </form>
       </div>-->

    </body>

    <script>
        const NF = 16, NAV_MAP = {
            187: { dir:  1, act: 'zoom', name: 'in' } /* + */, 
            61: { dir:  1, act: 'zoom', name: 'in' } /* + WTF, FF? */, 
            189: { dir: -1, act: 'zoom', name: 'out' } /* - */, 
            173: { dir: -1, act: 'zoom', name: 'out' } /* - WTF, FF? */, 
            37: { dir: -1, act: 'move', name: 'left', axis: 0 } /* ⇦ */, 
            38: { dir: -1, act: 'move', name: 'up', axis: 1 } /* ⇧ */, 
            39: { dir:  1, act: 'move', name: 'right', axis: 0 } /* ⇨ */, 
            40: { dir:  1, act: 'move', name: 'down', axis: 1 } /* ⇩ */
            }, 
            _SVG = document.querySelector('svg'), 
            VB = _SVG.getAttribute('viewBox').split(' ').map(c => +c), 
            DMAX = VB.slice(2), WMIN = 8, 
            _MSG = document.querySelector('.msg');
        let rID = null, f = 0, nav = {}, tg = Array(4);
        
        function stopAni() {
            cancelAnimationFrame(rID);
            rID = null;  
        };
        
        function update() {	
            let k = ++f/NF, j = 1 - k, cvb = VB.slice();
            
            if(nav.act === 'zoom') {		
                for(let i = 0; i < 4; i++)
                    cvb[i] = j*VB[i] + k*tg[i]
            }
            
            if(nav.act === 'move')	
                cvb[nav.axis] = j*VB[nav.axis] + k*tg[nav.axis];
            
            _SVG.setAttribute('viewBox', cvb.join(' '));
            
            if(!(f%NF)) {
                f = 0;
                VB.splice(0, 4, ...cvb);
                nav = {};
                tg = Array(4);
                stopAni();
                return;
            }
            rID = requestAnimationFrame(update)
        };
        
        addEventListener('keydown', e => { e.preventDefault() }, false);
        addEventListener('keypress', e => { e.preventDefault() }, false);
        
        addEventListener('keyup', e => {
            e.preventDefault();
            _MSG.textContent = '';
                
            if(!rID && e.keyCode in NAV_MAP) {
                nav = NAV_MAP[e.keyCode];
                
                if(nav.act === 'zoom') {
                    if((nav.dir === -1 && VB[2] >= DMAX[0]) || 
                        (nav.dir ===  1 && VB[2] <= WMIN)) {
                        //console.log(`cannot ${nav.act} ${nav.name} more`);
                        _MSG.textContent = `cannot ${nav.act} ${nav.name} more`;
                        return
                    }
                    
                    for(let i = 0; i < 2; i++) {
                        tg[i + 2] = VB[i + 2]/Math.pow(2, nav.dir);
                        tg[i] = .5*(DMAX[i] - tg[i + 2]);
                    }
                }
                
                else if(nav.act === 'move') {
                    if((nav.dir === -1 && VB[nav.axis] <= 0) || 
                        (nav.dir ===  1 && VB[nav.axis] >= DMAX[nav.axis] - VB[2 + nav.axis])) {
                        //console.log(`at the edge, cannot go ${nav.name}`);
                        _MSG.textContent = `at the edge, cannot go ${nav.name}`;
                        return
                    }
                    
                    tg[nav.axis] = VB[nav.axis] + .5*nav.dir*VB[2 + nav.axis];
                }
                
                update()
            }
        }, false);   

        $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      }); 


      /*document.getElementById("btn1").addEventListener("click",function(){
        var box1=document.getElementById("modal");
        if(box1.style.display =="block")
        {
            box1.style.display="none";
        }
        else{
            box1.style.display ="block";
        }
    })*/
	
	var buildings = JSON.parse('<?= $status_json; ?>') ;
        
        Object.keys(buildings).forEach(function(key) {
        var value = buildings[key];
        if (value === 'Reserved'){
        $('path[name="'+key+'"]').css("fill","rgba(255 , 0, 0, 0.4)");
        }
		else if (value === 'Available'){
			$('path[name="'+key+'"]').css("fill","rgba(81, 240, 7, 0.4)");
		}
        });



        var box1=document.getElementById("model");

    // $( ".modal-open" ).click(function() {
        $( "#units path" ).click(function() {
        
        var name = $( this ).attr('name');
        var url = '{{ url('/getBuilding') }}' + "\/" +name;
    $.ajax({url: url , success: function(building){

    $('#Building_Code').html(name);

    $('#Description').html(building.descriptiom);
    $('#Status').html(buildings[name]);

    $('#Type').html(building.type);
    $('#Zone').html(parseInt(building.zone));
    $('#cCode').html(building.cCode);

    $('#Project_code').html(building.projectCode);
    $('#Total_Units').html(building.total_units);
    $('#Available_Units_a').html(building.available);
    $('#Unavailable_Units').html(building.unavailable);
    $('#href_building').attr('href', "{{ url('/building_details') }}" + '/' + name ) ;
    $('#Available_Units_a').attr('href', "{{ url('/available_units') }}" + '/' + name ) ;


    /*box1.style.display ="block";*/
	/*box1.style.visibility ="visible";*/
	
  }});
// box1.style.display ="block";

// window.onclick = function(event) {

// // console.log(event.target.getAttribute('name'));
// if (! event.target.getAttribute('name')) { // && !event.target.getAttribute('name').includes('unit')
// box1.style.display = "none";
// }
    });
    </script>
</html>

