<!-- start banner Area -->
<?php
if (isset($_SESSION['user'])){
    $disabled="";
}else{
    $disabled="disabled";
}
?>
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Categoría C o CONSTRUCTORES
                </h1>
                <p class="text-white link-nav"><a >Avanzada </a> <span class="lnr lnr-arrow-right"></span>  <a >Equipos de hasta 2 estudiantes, con edades entre 16 y 21 años (no deben
                        cumplir 22 años el 2019). Los proyectos deben ser del tipo electromecánico, mecatrónico o
                        electromagnético</a></p>
            </div>
        </div>
    </div>
</section>
<div class="whole-wrap">
    <div class="container">
        <div class="section-top-border">
            <?php if (isset($_SESSION['user'])):?>
                <button class="genric-btn success circle mb-3" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-plus"></i> Nuevo</button>
            <?php endif;?>
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
                    <th>Intentos</th>
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


<!-- Modal -->
<div class="modal fade" id="modificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmmodi">
                    <div class="form-group row">
                        <label for="colegio2" class="col-sm-2 col-form-label">colegio</label>
                        <div class="col-sm-10">
                            <input type="text" name="colegio2" required class="form-control" id="colegio2" placeholder="colegio2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="estudiante12" class="col-sm-2 col-form-label">estudiante1</label>
                        <div class="col-sm-10">
                            <input type="text" name="estudiante12" required class="form-control" id="estudiante12" placeholder="estudiante12">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="estudiante22" class="col-sm-2 col-form-label">estudiante2</label>
                        <div class="col-sm-10">
                            <input type="text" name="estudainte2" required class="form-control" id="estudiante22" placeholder="estudiante22">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-warning">Guardar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- notas -->
<div class="modal fade" id="notas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo">Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="notas">
                    <div class="form-group">
                        <label for="p1">INFORME       (20 PUNTOS)</label>
                        <div class="row">
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p1" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p102" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p103" placeholder="00"></div>
                        </div>
                        <!--                        <small id="emailHelp" class="form-text text-muted">Cada una 5. Total 15.-->
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="p2">CREATIVIDAD (20 PUNTOS)</label>
                        <div class="row">
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p2" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p202" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p203" placeholder="00"></div>
                        </div>
                        <!--                        <small id="emailHelp" class="form-text text-muted">Total 5.-->
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="p3">MATERIAL UTILIZADO      (20 PUNTOS)</label>
                        <div class="row">
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p3" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p302" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p303" placeholder="00"></div>
                        </div>
                        <!--                        <small id="emailHelp" class="form-text text-muted">Cada una 5. Total 15.-->
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="p4">INSPIRACIÓN Y MOTIVACIÓN (20 PUNTOS)</label>
                        <div class="row">
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p4" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p402" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p403" placeholder="00"></div>
                        </div>
                        <!--                        <small id="emailHelp" class="form-text text-muted">Total 10.-->
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="p5">AUTORÍA Y PRODUCCIÓN (20 PUNTOS)</label>
                        <div class="row">
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p5" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p502" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p503" placeholder="00"></div>
                        </div>
                        <!--                        <small id="emailHelp" class="form-text text-muted">Total 10.-->
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="p6">PUNTAJE FINAL</label>
                        <div class="row">
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p6" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p602" placeholder="00"></div>
                            <div class="col-4"><input type="number" <?=$disabled?> class="form-control" id="p603" placeholder="00"></div>
                        </div>
                        <!--                        <small id="emailHelp" class="form-text text-muted">Total 10.-->
                        </small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <?php if (isset($_SESSION['user'])):?>
                            <button type="submit" class="btn btn-warning">Guardar</button>
                        <?php endif;?>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- End Align Area -->
<script !src="">
    <?php
    if (isset($_SESSION['user'])){
        echo "var ver='';";
    }else{
        echo "var ver='hidden';";
    }
    ?>

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
        var db = firebase.firestore().collection("cavanzada");
        $('#formulario').submit(function (e) {
            db.add({
                colegio: $('#colegio').val(),
                estudiante1: $('#estudiante1').val(),
                estudiante2: $('#estudiante2').val()
            }).then(refDoc => {
                toastr.success('Guardado!', 'Correctamente');
                $('#exampleModal').modal('hide');
                $('#formulario')[0].reset();
            });
            return false;
        });
        $('#frmmodi').submit(function (e) {
            db.doc(id).set({
                colegio: $('#colegio2').val(),
                estudiante1: $('#estudiante12').val(),
                estudiante2: $('#estudiante22').val()
            }).then(refDoc => {
                toastr.warning('Modificado correctamente!', 'Modificado');
                $('#modificar').modal('hide');
            });
            return false;
        });
        $('#notas').submit(function (e) {

            db.doc(id).set(
                //     console.log(
                {
                    colegio: colegio,
                    estudiante1: estudiante1,
                    estudiante2: estudiante2,
                    p1:$('#p1').val(),
                    p2:$('#p2').val(),
                    p3:$('#p3').val(),
                    p4:$('#p4').val(),
                    p5:$('#p5').val(),
                    p6:$('#p6').val(),
                    p102:$('#p102').val(),
                    p202:$('#p202').val(),
                    p302:$('#p302').val(),
                    p402:$('#p402').val(),
                    p502:$('#p502').val(),
                    p602:$('#p602').val(),
                    p103:$('#p103').val(),
                    p203:$('#p203').val(),
                    p303:$('#p303').val(),
                    p403:$('#p403').val(),
                    p503:$('#p503').val(),
                    p603:$('#p603').val(),
                }
                // );
            ).then(refDoc => {
                toastr.success('Notas guardadas!');
                $('#notas').modal('hide');
            });
            return false;

        });
        var id='a',colegio,estudiante1,estudiante2;
        function datos(){
            db.onSnapshot(function(querySnapshot) {
                table.clear().draw();

                querySnapshot.forEach(function(doc) {
                    var puntos=0;
                    var puntos2=0;
                    var puntos3=0;
                    puntos=puntos+
                        parseInt( doc.data().p1)+
                        parseInt( doc.data().p2)+
                        parseInt( doc.data().p3)+
                        parseInt( doc.data().p4)+
                        parseInt( doc.data().p5)+
                        parseInt( doc.data().p6);
                    puntos2=puntos2+
                        parseInt( doc.data().p102)+
                        parseInt( doc.data().p202)+
                        parseInt( doc.data().p302)+
                        parseInt( doc.data().p402)+
                        parseInt( doc.data().p502)+
                        parseInt( doc.data().p602);
                    puntos3=puntos3+
                        parseInt( doc.data().p103)+
                        parseInt( doc.data().p203)+
                        parseInt( doc.data().p303)+
                        parseInt( doc.data().p403)+
                        parseInt( doc.data().p503)+
                        parseInt( doc.data().p603);
                    table.row.add( [
                        doc.data().colegio,
                        '1-'+doc.data().estudiante1+' <br> 2-'+doc.data().estudiante2,
                        '1= '+puntos+'<br>2= '+ puntos2+'<br>3= '+puntos3,
                        '<button class="btn btn-warning p-1 modificar" '+ver+' data-id="'+doc.id+'"> <i class="fa fa-pencil"></i> Modificar</button>'+
                        '<button class="btn btn-danger p-1 eliminar" '+ver+' data-id="'+doc.id+'"> <i class="fa fa-pencil"></i> Eliminar</button>'+
                        '<button class="btn btn-info p-1 notas" data-id="'+doc.id+'"> <i class="fa fa-eye"></i> Notas</button>'
                    ] ).draw( false );
                });
                $('.eliminar').click(function (e) {
                    if (confirm('Seguro de eliminar?')){
                        id= $(this).attr('data-id');
                        db.doc(id).delete().then(function () {
                            toastr.error('Eliminar','Eliminado exitosamente');
                        });
                    }
                    e.preventDefault();
                });

                $('.modificar').click(function (e) {
                    $('#modificar').modal('show');
                    id= $(this).attr('data-id');
                    db.doc(id).get().then(function (doc) {
                        $('#colegio2').val(doc.data().colegio);
                        $('#estudiante12').val(doc.data().estudiante1);
                        $('#estudiante22').val(doc.data().estudiante2);
                    });
                    e.preventDefault();
                });
                $('.notas').click(function (e) {
                    $('#notas').modal('show');
                    id= $(this).attr('data-id');
                    db.doc(id).get().then(function (doc) {
                        $('#titulo').html(doc.data().colegio+'<br>'+doc.data().estudiante1+'<br>'+doc.data().estudiante2);
                        colegio=doc.data().colegio;
                        estudiante1=doc.data().estudiante1;
                        estudiante2=doc.data().estudiante2;
                        $('#p1').val(doc.data().p1);
                        $('#p2').val(doc.data().p2);
                        $('#p3').val(doc.data().p3);
                        $('#p4').val(doc.data().p4);
                        $('#p5').val(doc.data().p5);
                        $('#p6').val(doc.data().p6);
                        $('#p102').val(doc.data().p102);
                        $('#p202').val(doc.data().p202);
                        $('#p302').val(doc.data().p302);
                        $('#p402').val(doc.data().p402);
                        $('#p502').val(doc.data().p502);
                        $('#p602').val(doc.data().p602);

                        $('#p103').val(doc.data().p103);
                        $('#p203').val(doc.data().p203);
                        $('#p303').val(doc.data().p303);
                        $('#p403').val(doc.data().p403);
                        $('#p503').val(doc.data().p503);
                        $('#p603').val(doc.data().p603);

                    });
                    e.preventDefault();
                });
                /*inicio*/
                db.doc(id).get().then(function (doc) {
                    if (typeof doc.data() !== 'undefined') {
                        $('#titulo').html(doc.data().colegio+'<br>'+doc.data().estudiante1+'<br>'+doc.data().estudiante2);
                        colegio=doc.data().colegio;
                        estudiante1=doc.data().estudiante1;
                        estudiante2=doc.data().estudiante2;
                        $('#p1').val(doc.data().p1);
                        $('#p2').val(doc.data().p2);
                        $('#p3').val(doc.data().p3);
                        $('#p4').val(doc.data().p4);
                        $('#p5').val(doc.data().p5);
                        $('#p6').val(doc.data().p6);

                        $('#p102').val(doc.data().p102);
                        $('#p202').val(doc.data().p202);
                        $('#p302').val(doc.data().p302);
                        $('#p402').val(doc.data().p402);
                        $('#p502').val(doc.data().p502);
                        $('#p602').val(doc.data().p602);

                        $('#p103').val(doc.data().p103);
                        $('#p203').val(doc.data().p203);
                        $('#p303').val(doc.data().p303);
                        $('#p403').val(doc.data().p403);
                        $('#p503').val(doc.data().p503);
                        $('#p603').val(doc.data().p603);
                    }


                });
                /*fin*/
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
