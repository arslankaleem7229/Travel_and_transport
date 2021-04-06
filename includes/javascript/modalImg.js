         <script>
                var modalImg = document.getElementById('img0');
                var close = document.getElementById('close');
                function showImg(x) {
                    $('.modalBackground').css("display","block");
                    modalImg.src = x.src;
                    $('body,html').addClass('hideOverFlow');
                    
                }
                function closeImg() {
                    $('.modalBackground').css('display','none'); 
                    $('body,html').removeClass('hideOverFlow');
                }
    </script>
    //        $("#defaultImg").click(function() {
     //         $('.modalBackground').css("display","block"); 
      //      });