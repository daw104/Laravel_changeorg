@extends('layout.public')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 align-items-center">
                <div class="text-center m-3" style="text-align:center;">
                    <h3><?php echo $peticion['titulo']?></h3>
                </div>
            </div>

            <div class="col-12 col-md-7 col-sm-6 align-items-center">
                <div class="center-image-peticion" style="width: 20rem;">
                    <img class="card-img-top" src="{{asset('storage/'.$peticion['image'])}}" alt="Card image cap">
                    <p><?php echo $peticion['user_id']?> ha iniciado esta petición</p>
                </div>

            </div>

            <div class="col-12 col-md-5 col-sm-6 d-flex align-items-center align-items-center">
                <p class="text-center"><b class="text-center"> 20 personas han firmado esta petición </b></p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-12 col-md-7 col-sm-6 align-items-center">

                <p class="text-left">
                    <?php echo $peticion['descripcion']?>
                </p>
            </div>

            <div class="col-12 col-md-5 col-sm-6">
                <form>
                    <h3 class="text-center">Firma esta Petición</h3>



                    <div class="text-center pt-1 mb-5 pb-1">

                        <button class="btn btn-danger btn-block fa-lg mb-3" type="button">
                            <a  href="{{ url('peticiones/firmar/'.$peticion->id) }}">Firmar</a>
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>


@endsection
