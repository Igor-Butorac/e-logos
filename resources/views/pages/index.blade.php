@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
.fa-address-card-o:hover{
    color:#e9ecef !important;
    transform: scale(1.1);
}

.fa-calendar:hover{
    color:#e9ecef !important;
    ##color:bisque !important;
    transform: scale(1.1);
}

.fa-users:hover{
    color:#e9ecef !important;
    transform: scale(1.1);
}
.fa-user-plus:hover{
    color:#e9ecef !important;
    transform: scale(1.1);
}
</style>

<div class="container">
    <div class="jumbotron mt-3">
      <h1 style="text-align: center">Dobro došli u e-logos</h1>
    </div>
</div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-info mb-4" style="max-width: 15rem; height:14rem ">
                <div class="card-header">
                <h5 style="text-align: center"class="card-title"><a style="color:#fff" href="/clients/create">Unesi klijente</a></h5>
                </div>
                <div class="card-body">
                   <a href="/clients/create" style="color:#fff;"><i style="font-size:9em;text-align: center; width: 100%;"class="fa fa-address-card-o" aria-hidden="true" ></i></a>
                    <p class="card-text"></p>
                </div>
              </div>
          </div>

          <div class="col-md-3">
            <div class="card text-white bg-info mb-4" style="max-width: 15rem; height:14rem ">
                <div class="card-header"><h5 style="text-align: center"class="card-title"><a style="color:#fff" href="/schedule">Naručivanje klijenata</a></h5>
                </div>
                <div class="card-body">
                    <a href="/schedule" style="color:#fff;" ><i style="font-size:9em;text-align: center; width: 100%;" class="fa fa-calendar" aria-hidden="true"></i></a>
                  <p class="card-text"></p>
                </div>
              </div>
          </div>

          <div class="col-md-3">
            <div class="card text-white bg-info mb-4" style="max-width: 15rem; height:14rem ">
                <div class="card-header"><h5 style="text-align: center" class="card-title"><a style="color:#fff" href="/clients">Svi klijenti</a></h5>
                </div>
                <div class="card-body">
                   <a href="/clients" style="color:#fff;"> <i style="font-size:9em;text-align: center; width: 100%;" class="fa  fa-users" aria-hidden="true"></i></a>
                  <p class="card-text"></p>
                </div>
              </div>
          </div>

          @if(Auth::user()->type_of_user == 1)
            <div class="col-md-3">
                <div class="card text-white bg-info mb-4" style="max-width: 15rem; height:14rem ">
                    <div class="card-header"><h5 style="text-align: center" class="card-title"><a style="color:#fff" href="/register">Unesi korisnike</a></h5>
                    </div>
                    <div class="card-body">
                        <a href="/register" style="color:#fff;"><i style="font-size:9em;text-align: center; width: 100%;" class="fa fa-user-plus" aria-hidden="true"></i></a>
                    <p class="card-text"></p>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-3 " >
                <div class="card text-white bg-info mb-4" style="max-width: 15rem; height:14rem; opacity: 0.5; ">
                    <div class="card-header"><h5 style="text-align: center" class="card-title"><a style="color:#fff" >Unesi korisnike</a></h5>
                    </div>
                    <div class="card-body">
                        <i style="font-size:9em;text-align: center; width: 100%;" class="fa fa-user-plus" aria-hidden="true"></i>
                    <p class="card-text"></p>
                    </div>
                </div>
          @endif

  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <!--<a href="#">Back to top</a>-->
      </p>
      <p>Aplikacija e-logos &copy; Diplomski rad, Igor Butorac</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../assets/js/vendor/popper.min.js"></script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <script src="../../assets/js/vendor/holder.min.js"></script>
</body>
        @guest
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Prijava</a>
            <!--<a class="btn btn-success btn-lg" href="/register" role="button">Register</a>--></p>
        @endguest

    </div>
@endsection

