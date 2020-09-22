<footer class="page-footer font-small unique-color-dark fijar-abajo">



    <!-- Footer Links -->
    <div class="container text-center text-md-left ">

        <!-- Grid row -->
        <div class="row pt-5">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Nombre de la Empresa</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>TAXI SPEED CAR DE NUEVO SAN JUAN SOCIEDAD ANONIMA CERRADA - TAXI SPEED CAR DE NUEVO SAN JUAN S.A.C.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Servicios</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#servicios">Credencial</a>
                </p>
                <p>
                <a href="#servicios">SOAT</a>
                </p>
                <p>
                <a href="#servicios">Cartilla Informativa</a>
                </p>
                <p>
                <a href="#servicios">Inscripcion de Taxi</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->

            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i>Jr. los Ombues Nro. 625, Av. Las Flores, S.J.L</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i>taxispeedcar8@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> +51 959 827 778</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> +51 960 262 632</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">TaxiSpeedCar</a>
    </div>
    <!-- Copyright -->
    <div class="cargar">
        <div id="centro">
            <!--Aqui se pone el spiner o cualquier loader-->
            <!-- <div class="spinner-grow text-danger" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div> -->
            <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?= base_url ?>vendor/js/jquery.min.js"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?= base_url ?>vendor/js/addons/datatables2.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?= base_url ?>vendor/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?= base_url ?>vendor/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url ?>vendor/js/mdb.min.js"></script>
<script type="text/javascript" src="<?= base_url ?>vendor/js/htmlToCanvas.js"></script>
<script type="text/javascript" src="<?= base_url ?>js/main.js"></script>

<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    $(window).on('scroll', function() {
        if ($(window).scrollTop()) {
            $('nav').addClass('barra-nav');
        } else {
            $('nav').removeClass('barra-nav');
        }
    });
    $(document).ready(function() {
        //Pagination numbers
        $('#paginationSimpleNumbers').DataTable({
            "pagingType": "simple_numbers"
        });
    });
</script>

</body>

</html>