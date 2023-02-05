<?=$this->extend('User/Front/layout/main-Implan')?>
<?=$this->section('css')?>
    <link href="./css/styles.css" rel="stylesheet"/>
    <style>
        .map{
            width: 100%;
            height: 550px
        }
    </style>
<?=$this->endSection()?>

<?=$this->section('content')?>
<!---  MENU  -->
<nav class="navbar navbar-light bg-dark ">
  <a class="navbar-brand text-light" href="#">
    <img src="https://acapulco.gob.mx/wp-content/uploads/2019/09/70562788_10157217730846885_2190240640137166848_n.jpg" width="35" height="35" class="d-inline-block align-top" alt="">
   GEOLOCALIZACIÓN DE PUNTOS DE INTERES
  </a>
</nav>
<div class="container">
    <br>
  <div class="row">
    <div class="col-8">
        <div id="map" class="map"></div>
        <div id="mouse-position"></div>  
    </div>
    <div class="col-4">
        <br>
        <form action="">
            <h2>Actualizar capas del mapa</h2>
            <br>
            <span>Nombre de la capa</span>
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Ingrese un titulo que describa su archivo">
            </div>
            <br>
            <span>Categoria a la que pertenece</span>
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Opciones</label>
                <select class="form-select" id="inputGroupSelect01">
            <!-- Hacer dinamico en BD con un INNER JOIN.
            *OPCIONAL - agregar opcion para poder agregar nuevas categorias, con ventana pop-up -->
                    <option selected>Categorias</option>
                    <option value="1">Obras en proceso</option>
                    <option value="2">Puntos de interes de la ciudad</option>
                    <option value="3">Futuros proyectos</option>
                </select>
            </div>
            <br>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputfile">
            </div>
            <button  type="submit" class=" btn btn-primary  btn-block col-12"  style="text-align:center">Guardar</button>
        </form>
    </div>
  </div>
</div>

<?=$this->endSection()?>

<?=$this->section('js')?>
    <script type="text/javascript">
        var mapa = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([-99.90891, 16.84942]),
                zoom: 12
            }),
        });

        //controles
        mapa.addControl(new ol.control.FullScreen());
        mapa.addControl(new ol.control.OverviewMap());


        //Coordenadas del mouse en el mapa - EN PROCESO
        var controlMousePosition = new ol.control.MousePosition({
            coordinateFormat: ol.coordinate.createStringXY(4),
            className: 'custom-mouse-position',
            target: document.getElementById('mouse-position'),
        });
        mapa.addControl(controlMousePosition);

    </script>
<?=$this->endSection('js')?>