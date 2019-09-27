<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Categoría A o WRO
                </h1>
                <p class="text-white link-nav"><a >Inicial </a> <span class="lnr lnr-arrow-right"></span>  <a > Equipos de 2 estudiantes con edades hasta 10 años (no deben cumplir 11
                        años en 2019) y un tutor o tutora. </a></p>
            </div>
        </div>
    </div>
</section>
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <button class="genric-btn success circle mb-3" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Nuevo</button>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formulario">
                                <div class="form-group row">
                                    <label for="colegio" class="col-sm-2 col-form-label">colegio</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="colegio" required class="form-control" id="colegio" placeholder="colegio">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="estudiante1" class="col-sm-2 col-form-label">estudiante1</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="estudiante1" required class="form-control" id="estudiante1" placeholder="estudiante1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="estudiante2" class="col-sm-2 col-form-label">estudiante2</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="estudainte2" required class="form-control" id="estudiante2" placeholder="estudiante2">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <table id="example" class="display" style="width:100%">
                <thead>
                <tr>
                    <th>Colegio</th>
                    <th>Estudiantes</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- End Align Area -->
<script !src="">
    window.onload=function (e) {

        // Your web app's Firebase configuration
        var firebaseConfig = {
            apiKey: "AIzaSyB_bVnyw2CMxqIy_TDjqjecLI26in2Yh7w",
            authDomain: "plurinacionales-d514b.firebaseapp.com",
            databaseURL: "https://plurinacionales-d514b.firebaseio.com",
            projectId: "plurinacionales-d514b",
            storageBucket: "plurinacionales-d514b.appspot.com",
            messagingSenderId: "363484460372",
            appId: "1:363484460372:web:5166f579f0ac82f8e444c1"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        var db = firebase.firestore().collection("ainicial");
        $('#formulario').submit(function (e) {
            // db.add({ name: this.inputName, })
            //     .then(refDoc => {
            //         console.log('guardo coccetamente!!');
            //     });
            console.log($('#formulario').serialize());
            return false;
        });

        function datos(){
            table.clear().draw();
            db//.where("capital", "==", true)
                .get()
                .then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                        // doc.data() is never undefined for query doc snapshots
                        console.log(doc.id, " => ");
                        table.row.add( [
                            doc.data().colegio,
                            '1-'+doc.data().estudiante1+' <br> 2-'+doc.data().estudiante2,
                            '<button class="btn btn-warning p-0"> <i class="fa fa-pencil"></i> Modificar</button>'
                        ] ).draw( false );
                    });
                })
                .catch(function(error) {
                    console.log("Error getting documents: ", error);
                });

        }

        var table=$('#example').DataTable({
            "language":{
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
        datos();

    }

</script>
