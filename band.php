<?php


$cds = array();


MaakCD('NSG', 24.95);
MaakCD('Bisa Kodei', 19.95);
MaakCD('FireBoy DML', 14.95);
MaakCD('Burna Boy', 34.95);


echo "\n Favoriete artiesten: \n \n";

for ($i=0; $i < count($cds); $i++)
{
  echo ' ' . $cds[$i]['Naam'] . ' kost ' . '€' . $cds[$i]['Prijs'] . "\n";
}

echo " \n" . ' Het Totaal bedrag van alle albums bij elkaar is ' . '€' . BerekenTotaal($cds) . "\n";
echo " \n" . ' De gemmiddelde prijs van alle albums bij elkaar is ' . '€' . BerekenGemiddelde(BerekenTotaal($cds), count($cds)) . "\n";


function BerekenGemiddelde($totaal, $aantal)
{
  return $totaal / $aantal;
}

function BerekenTotaal($array)
{
  $totaal = 0;
  for ($i=0; $i < count($array); $i++)
  {
    $totaal += $array[$i]['Prijs'];
  }
  return $totaal;
}

function MaakCD($naam, $prijs)
{
  global $cds;
  $cd = array('Naam' => $naam, 'Prijs' => $prijs);
  array_push($cds, $cd);
}



 ?>
