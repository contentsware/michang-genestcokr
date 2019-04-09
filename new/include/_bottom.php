

     
    <footer class="bg-secondary">
        <div class="container p-4 text-white" style="line-height: 120%;  ">
            <h5 style="letter-spacing: -1px;">(주)제네스트</h5>
            <h6 style="word-spacing: -1px;">
                대표이사: 이전행 주소:경기도 광명시 하안로60, A-810, 811, 812호 (소하동, 광명SK테크노파크) TEL: 02-2083-3052~3, FAX: 02-2083-3054, Email : biz@genest.co.kr <br>
                COPYRIGHT@ 2019 GENEST, ALL RIGHTS RESURVED.
            </h6>
        </div>

    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        window.jQuery || document.write('<script src="js/assets/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/assets/vendor/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/assets/vendor/holder.min.js"></script>
    <script src="js/bootstrap/offcanvas.js"></script>

    <script>

        $(document).ready(function(){

            $('.nav-item, .dropdown-menu').hover(function() {
                $(this).find('.dropdown-menu').show();
                //$(this).addClass('show');
                //$(this).parent().children('.dropdown-menu').addClass('show');
                //alert(1);
            }, function() {
                $(this).find('.dropdown-menu').hide();
                //$(this).parent().removeClass('show');
                //$(this).removeClass('show');
                //$(this).parent().children('.dropdown-menu').removeClass('show');
            });
            
            


        });

    </script>
</body>

</html>