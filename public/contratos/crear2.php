<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');

//Dia-Mes-Año Hora:Minutos:Segundos
$fecha = fechaCastellano(date('d-m-Y H:i:s'));

$nombre=$_GET['nombre'];
$ci=$_GET['ci'];
$firma=$_GET['firma'];
$plan1=json_decode($_GET['plan']);
$costo=$plan1->costo;
if ($plan1->descuento!=0) {
  $costo=$plan1->descuento;
}
$tipo=$plan1->tipo;
$plan=$plan1->tipo_plan;
$direccion=$_GET['direccion'];
$telefono=$_GET['telefono'];

//$nombre='eimar';
//$ci='123124';


$contenido = '<html><body>
				<h3 style="text-align: center;">
					CONTRATO
				</h3>
				<p style="text-align: justify;">En la Colonia de Sacramento, el día '.$fecha.' entre <b>“Service24”</b>, y por la otra, <b>'.$nombre.'</b> de C.I '.$ci.' quien en lo sucesivo se denominará <b>“El Proveedor”</b>, se ha convenido en celebrar el presente contrato de conformidad con los términos y condiciones siguientes:
				</p>
        <p><b>A- OBJETO: “Service24”</b> es una aplicación (plataforma) que actúa como intermediario entre quién busca el producto o servicio, en este caso y en lo sucesivo denominado <b>“El Cliente”</b> y quiénes están registrados en ella para ofrecerlos, en este caso <b>“El Proveedor”</b>, quien solo se encargará de gestionar la logística entre las partes para que los trabajos se lleven a cabo. Por este contrato, quién se presenta en este momento <b>“El Proveedor”</b> solicita y adquiere el uso de la plataforma para ofrecer a través de ella sus productos/servicios de acuerdo a los términos y condiciones que se establecen a continuación.</p>
        <p><b>B- PRECIO: </b>A partir de la confirmación de esta solicitud, <b>“El Proveedor”</b> debe abonar las siguientes cantidades: </p>
        <p>I- La zona que se adopte una cuota mensual por el monto de '.$costo.'.$u según el plan <b>"'.$plan.'. El Proveedor debe abonar la suma correspondiente al plan contratado a través de Red Pagos, Mi Dinero Nº 5351231."</b>.</p> 
        

        <p><b>C- DERECHOS Y OBLIGACIONES:</b> 1- Este contrato se entiende celebrado Intuitu Personae, por lo tanto, ninguna de las partes podrá ceder o traspasar a terceros los derechos y obligaciones que de él se derivan. 2- <b>“El Proveedor”</b> es responsable a partir del momento en el que se coordina el servicio en realizar el trabajo y finalizarlo, cobrando por ese servicio lo que se acuerde entre él y <b>“El Cliente”</b>, estando <b>“Service24”</b> libre de toda responsabilidad contractual que haya podido adquirir con <b>“El Cliente”</b>.</p>

        <p><b>D- PLAZO:</b> El presente contrato tendrá una duración de <b>UN (1) "'.$tipo.'"</b>, contado a partir de la fecha de su aceptación y suscripción, prorrogable automáticamente por igual periodo o por otro, siempre que las partes acuerden su renovación por lo menos con treinta (30) días calendarios antes del vencimiento del plazo fijo o de cualquiera de sus prórrogas.</p>  

        <p><b>E- RESCISIÓN: </b>en caso de incumplimiento el presente contrato se rescindirá: 1- Cuando la calificación dada por <b>“El Cliente”</b> a <b>“El Proveedor”</b> en cuanto al servicio brindado se refiere, mediante la plataforma sea de 1 estrella, reiterándose esta situación tres veces y previo análisis de por parte de <b>“Service24”</b>. 2- Por dos (2) faltas cuándo ya se confirmó a <b>“El Cliente”</b> proveer el servicio, determinándose horario y demás condiciones previamente pactadas. Esta situación acarreará treinta (30) días de suspensión. Los retrasos en la llegada al domicilio de <b>“El Cliente”</b> o al lugar donde se ejecutará el servicio, excluyendo demoras por causa del tránsito o alguna urgencia imprevista (las cuales ya están calculadas en un margen aproximado) se computarán como media falta. Posteriormente a esta situación y registrándose dos (2) retrasos más o una falta, este contrato quedará rescindido de pleno derecho. 3- Por abuso, agresión o cualquier situación de violencia que se registre hacia <b>“El Cliente”</b> desde el momento en el que se coordina el servicio y hasta la finalización del mismo. 4- Por la sola voluntad de las partes en dar por terminado el servicio.</p>

        <p><b>F- GARANTÍA DEL SERVICIO: </b>A partir del momento en que <b>“El Cliente</b> y <b>“El Proveedor”</b> coordinan el servicio, <b>“Service24”</b> no se hace responsable por negligencia en los trabajos realizados, por caso fortuito o fuerza mayor. <b>“Service24”</b> no brinda ningún tipo de garantía a clientes sobre los trabajos realizados por <b>“El Proveedor”</b> del producto o servicio a través del contacto por la plataforma o de ninguna otra forma posible, ya que <b>“Service24”</b> solo se encarga de gestionar la logística entre las partes como se mencionó en la cláusula A de este contrato. Tampoco garantiza que los pedidos se lleven a cabo en tiempo y forma acordada, esto es únicamente responsabilidad de <b>“El Proveedor”</b>.</p>

        <p><b>G- PRIVACIDAD:</b> 1- <b>“Service24”</b> garantiza que la información personal que se envía, cuenta con la seguridad necesaria. Los datos ingresados por usuario o en el caso de requerir una validación de los pedidos, no serán entregados a terceros, salvo: I- los que se muestran a <b>“El Cliente”</b> cuando le es confirmado el producto o servicio, los cuales son proveídos para mayor seguridad del solicitante; II- que la información deba ser revelada en cumplimiento a una orden judicial o requerimientos legales. 2- La suscripción a boletines de correos electrónicos publicitarios es voluntaria y podrá ser seleccionada al momento de crear la cuenta del usuario. <b>“Service24”</b> se reserva el derecho de cambiar o modificar estos términos sin previo aviso.</p> 

        <p><b>H- AUTENTICIDAD DEL CONTRATO:</b> El presente documento constituye el acuerdo entre las partes en relación con su objeto y deja sin efecto cualquier otra negociación, obligación o comunicación entre éstas, ya sea verbal o escrita, efectuada con anterioridad.  Las partes podrán, en el momento que lo deseen, modificar, por escrito, los términos y condiciones establecidos en el presente instrumento, previo consentimiento de los contratantes, debiéndose agregar a este documento, como parte integrante del mismo. Dichas modificaciones obligarán a los signatarios a partir de la fecha de su firma.</p> 

        <p><b>I- LEY APLICABLE:</b> Las partes acuerdan expresamente someterse a lo dispuesto en el Código Civil, y demás leyes vigentes que sean aplicables en relación a la materia, para todo lo no previsto por aquéllas en el presente documento.</p>

        <p><b>J- NOTIFICACIONES:</b> Toda notificación en virtud de este convenio preliminar podrá realizarse vía fax, telefax o correo certificado, a las direcciones físicas de las partes mencionadas a continuación:</p>

        <p><b>“Servicio 24”</b>:  Colonia de Sacramento y 59891960115)</p>

        <p><b>“EL Proveedor”</b>: Dirección: '.$direccion.', Teléfono: '.$telefono.'</p>

        <p><b>K- ARBITRAJE:</b> Cualquiera controversia que surja por razón de interpretación, ejecución o incumplimiento del presente contrato, será resuelta entre las partes. En caso de que las partes no logren llegar a un acuerdo, entonces se resolverá mediante arbitraje en Derecho ante el Centro de Conciliación y Arbitraje de la Cámara de Comercio, Industrias y Agricultura de la Colonia de Sacramento, de conformidad con sus normas y reglamentos de procedimiento. Para estos efectos, cada parte designará a un árbitro y éstos, a su vez, designarán a un tercero, quienes conformarán el Tribunal Arbitral. La decisión adoptada por dicho tribunal será final, definitiva y de obligatorio cumplimiento para las partes, por lo que la misma no podrá ser impugnada ante los tribunales de justicia. La parte vencida pagará los costos, gastos y honorarios incurridos en el proceso arbitral. El arbitraje se conducirá en idioma castellano.</p>


        

			  </body></html>';

        $rand=rand();
 
if (file_put_contents('contratos/'.$rand.'.html', $contenido)) {
    echo $rand;
} else {
    echo $rand;
}


function fechaCastellano ($fecha) {
  $fecha = substr($fecha, 0, 10);
  $numeroDia = date('d', strtotime($fecha));
  $dia = date('l', strtotime($fecha));
  $mes = date('F', strtotime($fecha));
  $anio = date('Y', strtotime($fecha));
  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
  return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
}

