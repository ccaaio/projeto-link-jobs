

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
               $("input[type='search']").autocomplete("/perfil/buscarUsuario");
           },500);
        });
    </script>

    <?php echo $aViewJs; ?>
</body>
</html>

