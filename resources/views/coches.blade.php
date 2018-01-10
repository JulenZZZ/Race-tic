@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3></h3>
        </div>
    </div>

    <div class="container ">
        <div class="row well-sm well">
            <div class="col-md-8 "> <!-- col-md-8 -->
                <div class="">
                        <div class="row">
                            <button type="button" data-toggle="modal" data-target="#login-modal" class="btn btn-info">Añadir</button>
                            <h3>Coches añadidos</h3>

                            <?php $id = Auth::user()->id;
                                  $coches = DB::table('coches')->where("user_id",$id)->get();

                            ?>

                              @foreach($coches as $key => $data)
                                <ul class="list-group">
                                    <li class="list-group-item"> {{ $data->marca }} {{ $data->modelo }}</li><br></br>

                                </ul>
                            @endforeach





                            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="loginmodal-container">
                                        <form id="formulario" action="add" method="post">
                                            {{ csrf_field() }}
                                            <button type="button" aria-label="Close" class="btn pull-right" data-dismiss="modal" ><span aria-hidden="true">&times;</span> </button>

                                            <div class="">
                                                <div class="form-group">
                                                    <label for="numserie">
                                                        Numero de serie</label>
                                                    <div class="input-group">
                                                    <span class="">
                                                    </span>
                                                        <input type="text" class="form-control" name="numserie" id="numserie" placeholder="" required="required" /></div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="subject">
                                                        Marca</label>
                                                    <select id="subject" name="subject" class="form-control" required="required">
                                                        <option value="na" selected="">Escoja uno por favor:</option>
                                                        <option>AUDI</option>
                                                        <option>BMW</option>
                                                        <option>NISSAN</option>
                                                        <option>TOYOTA</option>
                                                        <option>HONDA</option>
                                                        <option>FORD</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label for="motor">
                                                    Motorizacion</label>
                                                <div class="input-group">
                                                <span class="">
                                                </span>
                                                    <input type="text" class="form-control" name="motor" id="motor" placeholder="" required="required" /></div>
                                            </div>

                                            <div class="form-group">
                                                <label for="modelo">
                                                    Modelo</label>
                                                <div class="input-group">
                                                    <span class="">
                                                    </span>
                                                    <input type="text" class="form-control" name="modelo" id="modelo" placeholder="" required="required" /></div>
                                            </div>

                                            <div class="">
                                                <div class="form-group">
                                                    <label for="name">
                                                        Mensaje</label>
                                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                              placeholder="Mensaje"></textarea>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-block login loginmodal-submit">
                                                Añadir</button>

                                        </form>

                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
/*
        window.onload = init;

        // asocia los eventos necesarios
        function init() {
            var formulario = document.getElementById("formulario");
            formulario.addEventListener("submit", validar);
            formulario.elements["problema"].addEventListener("keypress", longitudMax);
        }

        // previene escribir más caracteres de los permitidos en el campo "problema"
        function longitudMax(event){
            if (this.value.length === 100){
                alert("El tamaño máximo del campo es 100.");
                event.preventDefault();
            }
        }

        // comprueba si el formulario está rellenado correctamente
        function validar(event){
            var formulario = document.getElementById("formulario");
            for (var i=0;i<formulario.elements.length;i++){
                var elemento = formulario.elements[i];
                if(esIncorrecto(elemento)){
                    elemento.className = "error";
                    event.preventDefault();
                }
                else {
                    elemento.className = "correcto";
                }
            }
        }

        // dice si el campo es incorrecto en funcion del tipo de campo
        function esIncorrecto(elemento){
            if(elemento.name === "numserie" || elemento.name === "marca" || elemento.name === "motor"){
                return estaVacio(elemento);
            }
            else if (elemento.name === "modelo"){
                return telefonoIncorrecto(elemento);
            }
            else if (elemento.name === "mensaje"){
                return emailIncorrecto(elemento);
            }
        }

        // comprueba si el campo está vacío
        function estaVacio(campo){
            if (campo.value.length === 0) {
                return true;
            }
            else {
                return false;
            }
        }

*/
    </script>




@endsection