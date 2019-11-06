

    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/public/js/popper.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="/public/js/slick.min.js"></script>
    <script type="text/javascript" src="/public/js/scrollbar.js"></script>
    <script type="text/javascript" src="/public/js/typeahead.js"></script>
    <script type="text/javascript" src="/public/js/sweetalert2.all.min.js"></script>

    <script type="text/javascript" src="/public/js/script.js"></script>

    <script>
        $(document).ready(function () {
           setTimeout(function () {
               $('#country').keyup(function(){
                   var query = $(this).val();
                   if(query != '')
                   {
                       $.ajax({
                           url:"/perfil/buscarUsuario",
                           method:"POST",
                           data:{query:query},
                           success:function(data)
                           {
                               $('#countryList').fadeIn();
                               $('#countryList').html(data);
                           }
                       });
                   }
               });
               $(document).on('click', 'li', function(){
                   $('#country').val($(this).text());
                   $('#countryList').fadeOut();
               });
           },500);
        });
    </script>

    <?php echo $aViewJs; ?>
</body>
</html>

