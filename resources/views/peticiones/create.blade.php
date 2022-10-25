@extends('layout.public')

@section('content')

    <!-- Formulario de Crear Peticion -->
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <h4 class="mt-1 mb-5 pb-1">Somos ChangeOrg - Estas a punto de rellenar una Petición</h4>
                                    </div>

                                    <form>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example11" class="form-control" placeholder="Titulo*" required />
                                        </div>

                                        <div class="form-outline mb-4">

                                            <textarea class="form-control" id="exampleFormControlTextarea5" rows="3" placeholder="Descripcion*" required></textarea>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form2Example22" class="form-control" min="0" placeholder="Destinatario*" required/>

                                        </div>


                                        <div class="form-outline mb-4">
                                            <label for="exampleFormControlSelect1" class="form-label" required>Selecciona una Categoria Para tu Petición*</label>

                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Categorias Ejemplos</option>
                                                <option>Categorias Ejemplos</option>
                                                <option>Categorias Ejemplos</option>
                                                <option>Categorias Ejemplos</option>

                                            </select>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="exampleFormControlSelect1" class="form-label" required>Selecciona una imagen para tu Petición*</label>
                                            <input type="file" id="form2Example22" class="form-control" />
                                        </div>

                                        <div class="container alineacion__botonCentro">
                                            <div class="row">
                                                <div class="col-12 pt-3">
                                                    <button type="submit" class="btn btn-outline-danger">Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>



@endsection
