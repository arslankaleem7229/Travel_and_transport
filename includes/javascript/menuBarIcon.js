            function changeColor() {
                var menuBar1= document.getElementById("menuBar1").style;
                menuBar1.backgroundColor="#ff4d4d";
                menuBar1.width= "60px";
                menuBar1.border="1px solid #ff4d4d";
                
                var menuBar2 = document.getElementById("menuBar2").style;
                menuBar2.backgroundColor= "#ff4d4d";
                menuBar2.width= "50px";
                menuBar2.border="1px solid #ff4d4d";
                
                var menuBar3 = document.getElementById("menuBar3").style;
                menuBar3.backgroundColor="#ff4d4d";
                menuBar3.width= "40px";
                menuBar3.border="1px solid #ff4d4d";
                
            }
            function defaultColor() {
                var menuBar1= document.getElementById("menuBar1").style;
                menuBar1.backgroundColor="#666666";
                menuBar1.width= "56px";
                menuBar1.border="1px solid #666666";
                
                var menuBar2 = document.getElementById("menuBar2").style;
                menuBar2.backgroundColor= "#666666";
                menuBar2.width= "56px";
                menuBar2.border="1px solid #666666";
                
                var menuBar3 = document.getElementById("menuBar3").style;
                menuBar3.backgroundColor="#666666";
                menuBar3.width= "56px";
                menuBar3.border="1px solid #666666";  
            }
           
            function showMenu() {
                var x = document.getElementById("sideBar");
                    if(x.style.width=='300px') {
                       x.style.width= '0';
                       }
                       else {
                       x.style.width= '300px';
                       }
                var y = document.getElementById('sideOverlay');
                    if(y.style.width== '100%') {
                            y.style.width= '0';
                            $('body,html').removeClass('hideOverFlow');
                    }
                    else {
                            y.style.width= "100%";
                            $('body,html').addClass('hideOverFlow');
                    }
            }
            
            function toggleButton(x) {
                x.classList.toggle("menuAndClose");
            }