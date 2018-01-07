<!-- Manipulação de XML -->

<?php
// $xml = simplexml_load_file("ondas.xml");
//
// echo "Cidade: ".$xml->nome."<br /><br />";
//
// echo "Manhã: ".$xml->manha->vento."<br />";
// echo "Tarde: ".$xml->tarde->vento."<br />";
// echo "Noite: ".$xml->noite->vento."<br />";

// Transformando um array em XML

function array_to_xml( $data, &$xml_data ) {
    foreach ($data as $key => $value) {
      if( is_array($value) ){
          if( is_numeric($key) ){
              $key = 'item'.$key;
            }
        $subnode = $xml_data->addChild($key);
        array_to_xml($value, $subnode);
      } else {
          if ( is_numeric($key) ) {
                $key = 'item'.$key;
          }
          $xml_data->addChild($key, htmlspecialchars($value));
      }
    }
}

$data = array(
    "nome" => "Rafael",
    "sobrenome" => "Silva",
    "idade" => 22,
    "caracteristicas" => array(
        "amigo",
        "fiel",
        "companheiro",
        "legal"
    )
);

$xml_data = new SimpleXMLElement('<data/>');

array_to_xml($data,$xml_data);

$result = $xml_data->asXML();
echo $result;
 ?>
