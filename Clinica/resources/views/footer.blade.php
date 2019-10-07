
          <!--Footer-->
          <div class="modal-footer justify-content-center">
                <span class="mr-4">Spread the word!</span>
                <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
                <!--Twitter-->
                <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
                <!--Google +-->
                <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
                <!--Linkedin-->
                <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>
                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="/assets/img/img/promocion2.jpeg" alt="video"
        data-toggle="modal" data-target="#modal5"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-4 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="/assets/img/Captura de Pantalla 2019-08-20 a la(s) 0.27.30.png"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer d-block d-md-flex justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="/assets/img/Captura de Pantalla 2019-08-20 a la(s) 0.27.30.png" alt="video"
        data-toggle="modal" data-target="#modal3"></a>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

            <div class="col-12 rounded mb-5 mt-1 bg-light">
                <div class="py-1 text-center bg-light" style="border-radius: 25px;">
                    <button type="button" class="button  btn-lg shadow-lg  " data-toggle="modal" data-target="#modelId"
                        style=" bottom:5px;  position: relative; font-size: 24px; padding: 14px 40px; font-family: 'Lato', sans-serif;">Ubicanos</button>
                </div>
                <div class="jumbotron jumbotron-fluid  bg-light rounded" style="margin-top: -90px; ">
                    <iframe class="rounded  bg-light col-12 mt-5 mb-5"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.7199598898615!2d-100.9474134850482!3d22.136650485408794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x618edc7faedcc8cf!2sODONTOLOG%C3%8DA+MEDICA+CORAL!5e0!3m2!1ses!2smx!4v1555734166877!5m2!1ses!2smx"
                        width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

 <script>
     $('#exampleModal').on('show.bs.modal', event => {
         var button = $(event.relatedTarget);
         var modal = $(this);
         // Use above variables to manipulate the DOM
         
     });
 </script>
            <!-- WhatsApp -->
            <a href="https://api.whatsapp.com/send?phone=524441400858&text=Hola,%20quiero%20agendar%20una%20cita%20en%20Clínica%20Coral"
                class="whatsapp" target="_blank"><img src="/assets/img/Whatsapp.png" width="60" height="60" alt="">
            </a>

            <a href="https://www.instagram.com/ortodoncia_medicacoral/" class="instagram" target="_blank"><img
                    src="/assets/img/instagram.png" width="60" height="60" alt="">
            </a>

            <a href="https://www.facebook.com/medicacoral/" class="facebook" target="_blank"><img
                    src="/assets/img/facebook.png" width="60" height="60" alt="">

            </a>



        </div>
    </main>
    </body>
</html>
    @yield('footer')