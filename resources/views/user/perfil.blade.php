@extends('layouts.app')

@section('content')

    <div class="">
        <div class="well well-sm-6">
            <div class="row">
                <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                    <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                </div>
                <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                    <div class="container">
                        <hr class="my-4">
                        <h2>{{ Auth::user()->name }}</h2>

                    </div>
                    <hr>
                    <ul class="container details">
                        <li><i class="fa fa-envelope"></i>  Correo Electronico:   {{Auth::user()->email }}</li>
                        <br>
                        <br>
                        <li><i class="glyphicon glyphicon-lock"></i>  Contraseña: ********</li>
                        <br>

                        <button type="button" data-toggle="modal" data-target="#login-modal" class="btn btn-info">Cambiar Contraseña</button>
                    </ul>
                </div>

            </div>
           </div>
       </div>




       <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
           <div class="modal-dialog">
               <div class="loginmodal-container">

                   <form id="formulario" action="dato" method="post">
                       {{ csrf_field() }}
                       <button type="button" aria-label="Close" class="btn pull-right" data-dismiss="modal" ><span aria-hidden="true">&times;</span> </button>
                       <p>Nueva Contraseña</p>
                       <input type="password" id="pass" name="pass">
                       <p>Confirmar Contraseña</p>
                       <input type="password" id="passconf" name="passconf" required>


                       <button type="submit" class="btn btn-block login loginmodal-submit">
                           Cambiar</button>


                       <br>
                       <div id="errordiv" class="alert alert-danger" hidden>
                           <strong>Error!</strong> Las contraseñas deben coincidir y tener como mínimo 6 carácteres.
                       </div>

                   </form>
               </div>
           </div>
       </div>

    <script>
        window.onload = iniciar;

        function iniciar(){
            var formulario = document.getElementById("formulario");
            formulario.addEventListener("submit", validar);

        }

        function duracionAlert() {
            setTimeout(function(){
                event.preventDefault();
            }, 3000);
        }

        function validar(event){
            var pass = document.getElementById("pass");
            var passconf = document.getElementById("passconf");

            if(pass.value.length < 6 || pass.value.length < 6){

                console.log("contraseña menor a 6");
                $("#errordiv").collapse();
                event.preventDefault();


            }else if(pass.value !== passconf.value){

                console.log("las contraseñas no coinciden");
                $("#errordiv").collapse();
                event.preventDefault();

            }else{
                event.preventDefault();
                swal({
                    title: 'Buen Trabajo!',
                    text: 'Contraseña cambiada',
                    type: 'success',
                    confirmButtonText: 'OK',
                })

                $("#login-modal").dismiss();
                console.log("contraseña cambiada");
            }
        }
        function cerrar(event){
            $("#login-modal").fadeOut();
        }
    </script>

   @endsection