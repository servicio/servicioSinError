<?php
session_start();
include './plantilla.php';
include './validacionseSessionAlumnos.php';
$var = new validacionseSessionAlumnos();
$var->verificacionDeLogueAlumnos();
?>
<html>
    <head>    
        <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            table {
                width: 50%;
                font-size: 0.9em;
            }
            table caption {
                color: #555;
                font-style: italic;
                margin-bottom: 8px;
            }
            table tr:last-child {
                background:#456789; 
                color:#fff;
            }
            th {
                text-align: left;
            }
            td:last-child, th:last-child {
                text-align:left;
            }
            td, th {
                padding: 6px 12px;
            }
            tr:nth-child(odd), tr:nth-child(odd) {
                background: #eee;
            }
            tr:nth-child(even) {
                background: #ddd;
            }
            tr:first-child, tr:first-child {
                background: #283a59;
                color:white;
            }
            table td:empty {
                background:white;
            }

            input#textboxo {
                border:0;
                -webkit-box-shadow:none;
                box-shadow:none;
                width:100%;
                float:left
            }
            .stlconten{
                background-color: white;
                -webkit-background-size: cover; 
                -moz-background-size: cover; 
                -o-background-size: cover; 
                background-size: cover;
                margin-top: -20px
            }
        </style>
    </head>
    <body>
        <div class="container stlconten" style="background-image: url(galeria/fondotextofinal.png);-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; margin-top: -20px"> 
            <p><center><h3>EVALUACION DEL DESEMPEÑO DE LA TUTORÍA</h3><br/>
                Estimado alumno, la información que proporciones es confidencial y de gran utilidad para nuestra Institución, así que te pedimos contestes esta encuesta con objetividad y sinceridad.
                Califica cada una de las preguntas de acuerdo a la siguiente escala<br/>
                Totalmente de acuerdo<br />
                De acuerdo<br />
                Más o menos de acuerdo<br />
                En desacuerdo<br />
                Totalmente en desacuerdo<br /></center></p>

        <div class="span12" style="margin: auto">
            <form  name="cuestionario" action="GuardarCuestTutoria.php" style="margin: 3% 3% 3% 3%">
                <div class="well well-sm">

                    <h6>1. Muestra el tutor buena disposición para atender a los alumnos</h6>
                    <input type="radio" name="disposicion" value="1" id="RadioGroup1_1" onClick="opcion1.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="disposicion" value="2" id="RadioGroup1_2" onClick="opcion1.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="disposicion" value="3" id="RadioGroup1_3" onClick="opcion1.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="disposicion" value="4" id="RadioGroup1_4" onClick="opcion1.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="disposicion" value="5" id="RadioGroup1_5" onClick="opcion1.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>2. La cordialidad y capacidad del tutor logra crear un clima de confianza para que el alumno pueda exponer sus problemas</h6>
                    <input type="radio" name="cordialidad" value="1" id="RadioGroup2_1" onClick="opcion2.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="cordialidad" value="2" id="RadioGroup2_2" onClick="opcion2.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="cordialidad" value="3" id="RadioGroup2_3" onClick="opcion2.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="cordialidad" value="4" id="RadioGroup2_4" onClick="opcion2.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="cordialidad" value="5" id="RadioGroup2_5" onClick="opcion2.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>3. Trata el tutor con respeto y atención a los alumnos</h6>
                    <input type="radio" name="respeto" value="1" id="RadioGroup3_1" onClick="opcion3.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="respeto" value="2" id="RadioGroup3_2" onClick="opcion3.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="respeto" value="3" id="RadioGroup3_3" onClick="opcion3.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="respeto" value="4" id="RadioGroup3_4" onClick="opcion3.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="respeto" value="5" id="RadioGroup3_5" onClick="opcion3.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>4. Muestra el tutor interés en los problemas académicos y personales que afectan el rendimiento de los alumnos</h6>
                    <input type="radio" name="interes" value="1" id="RadioGroup4_1" onClick="opcion4.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="interes" value="2" id="RadioGroup4_2" onClick="opcion4.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="interes" value="3" id="RadioGroup4_3" onClick="opcion4.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="interes" value="4" id="RadioGroup4_4" onClick="opcion4.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="interes" value="5" id="RadioGroup4_5" onClick="opcion4.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>5. Muestra el tutor capacidad para escuchar los problemas de los alumnos</h6>
                    <input type="radio" name="capacidad" value="1" id="RadioGroup5_1" onClick="opcion5.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="capacidad" value="2" id="RadioGroup5_2" onClick="opcion5.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="capacidad" value="3" id="RadioGroup5_3" onClick="opcion5.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="capacidad" value="4" id="RadioGroup5_4" onClick="opcion5.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="capacidad" value="5" id="RadioGroup5_5" onClick="opcion5.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>6. Muestra el tutor disposición a mantener una comunicación permanente con el alumno  </h6>
                    <input type="radio" name="disposicion" value="1" id="RadioGroup6_1" onClick="opcion6.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="disposicion" value="2" id="RadioGroup6_2" onClick="opcion6.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="disposicion" value="3" id="RadioGroup6_3" onClick="opcion6.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="disposicion" value="4" id="RadioGroup6_4" onClick="opcion6.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="disposicion" value="5" id="RadioGroup6_5" onClick="opcion6.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>7. Tiene el tutor capacidad para resolver dudas académicas del alumno</h6>
                    <input type="radio" name="resolver" value="1" id="RadioGroup7_1" onClick="opcion7.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="resolver" value="2" id="RadioGroup7_2" onClick="opcion7.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="resolver" value="3" id="RadioGroup7_3" onClick="opcion7.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="resolver" value="4" id="RadioGroup7_4" onClick="opcion7.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="resolver" value="5" id="RadioGroup7_5" onClick="opcion7.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>8. Tiene el tutor capacidad para orientar al alumno en metodología y técnicas de estudio</h6>
                    <input type="radio" name="orientar" value="1" id="RadioGroup8_1" onClick="opcion8.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="orientar" value="2" id="RadioGroup8_2" onClick="opcion8.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="orientar" value="3" id="RadioGroup8_3" onClick="opcion8.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="orientar" value="4" id="RadioGroup8_4" onClick="opcion8.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="orientar" value="5" id="RadioGroup8_5" onClick="opcion8.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>9. Tiene el tutor capacidad para diagnosticar las dificultades y realizar las acciones pertinentes para resolverlas</h6>
                    <input type="radio" name="dificultades" value="1" id="RadioGroup9_1" onClick="opcion9.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="dificultades" value="2" id="RadioGroup9_2" onClick="opcion9.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="dificultades" value="3" id="RadioGroup9_3" onClick="opcion9.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="dificultades" value="4" id="RadioGroup9_4" onClick="opcion9.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="dificultades" value="5" id="RadioGroup9_5" onClick="opcion9.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>10. Tiene el tutor capacidad para estimular el estudio independiente</h6>
                    <input type="radio" name="estimular" value="1" id="RadioGroup10_1" onClick="opcion10.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="estimular" value="2" id="RadioGroup10_2" onClick="opcion10.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="estimular" value="3" id="RadioGroup10_3" onClick="opcion10.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="estimular" value="4" id="RadioGroup10_4" onClick="opcion10.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="estimular" value="5" id="RadioGroup10_5" onClick="opcion10.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>11. Posee el tutor formación profesional en su especialidad</h6>
                    <input type="radio" name="formacion" value="1" id="RadioGroup11_1" onClick="opcion11.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="formacion" value="2" id="RadioGroup11_2" onClick="opcion11.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="formacion" value="3" id="RadioGroup11_3" onClick="opcion11.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="formacion" value="4" id="RadioGroup11_4" onClick="opcion11.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="formacion" value="5" id="RadioGroup11_5" onClick="opcion11.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>12. Posee el tutor dominio de métodos pedagógicos para la atención individualizada o grupal</h6>
                    <input type="radio" name="dominio" value="1" id="RadioGroup12_1" onClick="opcion12.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="dominio" value="2" id="RadioGroup12_2" onClick="opcion12.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="dominio" value="3" id="RadioGroup12_3" onClick="opcion12.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="dominio" value="4" id="RadioGroup12_4" onClick="opcion12.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="dominio" value="5" id="RadioGroup12_5" onClick="opcion12.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>13. Es fácil localizar al tutor que tiene asignado</h6>
                    <input type="radio" name="localizar" value="1" id="RadioGroup13_1" onClick="opcion13.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="localizar" value="2" id="RadioGroup13_2" onClick="opcion13.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="localizar" value="3" id="RadioGroup13_3" onClick="opcion13.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="localizar" value="4" id="RadioGroup13_4" onClick="opcion13.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="localizar" value="5" id="RadioGroup13_5" onClick="opcion13.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>14. El tutor conoce suficientemente bien la normatividad institucional para aconsejarle las opciones adecuadas a sus problemas escolares</h6>
                    <input type="radio" name="normativa" value="1" id="RadioGroup14_1" onClick="opcion14.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="normativa" value="2" id="RadioGroup14_2" onClick="opcion14.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="normativa" value="3" id="RadioGroup14_3" onClick="opcion14.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="normativa" value="4" id="RadioGroup14_4" onClick="opcion14.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="normativa" value="5" id="RadioGroup14_5" onClick="opcion14.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>15. La orientación recibida de parte del tutor le ha permitido realizar una selección adecuada de cursos y créditos</h6>
                    <input type="radio" name="seleccion" value="1" id="RadioGroup15_1" onClick="opcion15.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="seleccion" value="2" id="RadioGroup15_2" onClick="opcion15.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="seleccion" value="3" id="RadioGroup15_3" onClick="opcion15.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="seleccion" value="4" id="RadioGroup15_4" onClick="opcion15.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="seleccion" value="5" id="RadioGroup15_5" onClick="opcion15.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>16. El tutor lo canaliza a las instancias adecuadas cuando tiene algún problema que rebasa su área de acción. Solamente responda esta pregunta si lo ha requerido</h6>
                    <input type="radio" name="canaliza" value="1" id="RadioGroup16_1" onClick="opcion16.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="canaliza" value="2" id="RadioGroup16_2" onClick="opcion16.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="canaliza" value="3" id="RadioGroup16_3" onClick="opcion16.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="canaliza" value="4" id="RadioGroup16_4" onClick="opcion16.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="canaliza" value="5" id="RadioGroup16_5" onClick="opcion16.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>17. Su participación en el programa de tutoría ha mejorado su desempeño académico</h6>
                    <input type="radio" name="mejorado" value="1" id="RadioGroup17_1" onClick="opcion17.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="mejorado" value="2" id="RadioGroup17_2" onClick="opcion17.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="mejorado" value="3" id="RadioGroup17_3" onClick="opcion17.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="mejorado" value="4" id="RadioGroup17_4" onClick="opcion17.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="mejorado" value="5" id="RadioGroup17_5" onClick="opcion17.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>18. Su integración al Tecnológico ha mejorado con el programa de tutoría</h6>
                    <input type="radio" name="programa" value="1" id="RadioGroup18_1" onClick="opcion18.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="programa" value="2" id="RadioGroup18_2" onClick="opcion18.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="programa" value="3" id="RadioGroup18_3" onClick="opcion18.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="programa" value="4" id="RadioGroup18_4" onClick="opcion18.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="programa" value="5" id="RadioGroup18_5" onClick="opcion18.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6>19. Es satisfactorio el programa de tutoría</h6>
                    <input type="radio" name="satisfactorio" value="1" id="RadioGroup19_1" onClick="opcion19.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="satisfactorio" value="2" id="RadioGroup19_2" onClick="opcion19.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="satisfactorio" value="3" id="RadioGroup19_3" onClick="opcion19.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="satisfactorio" value="4" id="RadioGroup19_4" onClick="opcion19.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="satisfactorio" value="5" id="RadioGroup19_5" onClick="opcion19.disabled = true;"/>
                    Totalmente en desacuerdo<br>

                    <h6> 20. El tutor que le fue asignado es adecuado</h6>
                    <input type="radio" name="asignado" value="1" id="RadioGroup20_1" onClick="opcion20.disabled = true;"/>
                    Totalmente de acuerdo<br>
                    <input type="radio" name="asignado" value="2" id="RadioGroup20_2" onClick="opcion20.disabled = true;"/>
                    De acuerdo<br>
                    <input type="radio" name="asignado" value="3" id="RadioGroup20_3" onClick="opcion20.disabled = true;"/>
                    Más o menos de acuerdo<br>
                    <input type="radio" name="asignado" value="4" id="RadioGroup20_4" onClick="opcion20.disabled = true;"/>
                    En desacuerdo<br>
                    <input type="radio" name="asignado" value="5" id="RadioGroup20_5" onClick="opcion20.disabled = true;"/>
                    Totalmente en desacuerdo<br>
                    <input class="btn btn-primary" type="submit" name="guardar" value="Guardar">
                </div>
            </form>  
        </div>
    </div>
</body>
</html>
<?php
include './plantillaFooter.php';
?>