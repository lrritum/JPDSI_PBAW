<?php

require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';


function getParams(&$x,&$y,&$lata){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$x,&$y,&$lata,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($x) && isset($y) && isset($lata))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $x == "") {
	$messages [] = 'Nie podano kwoty kretydu.';
         }
        if ( $y == "") {
	$messages [] = 'Nie podano oprocentowania raty.';
        }
        if ( $lata == "") {
	$messages [] = 'Nie podano na ile lat bierzemy kredyt.';
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $x )) {
		$messages [] = 'Błędnie wprowadzona kwota.';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Błednie wprowadzone oprocentowanie';
	}		

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,&$lata,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int
	$x = floatval($x);
	$y = floatval($y);
	
	//wykonanie operacji
        
            $raty = $lata*12; //ilosc rat
            $result = $x/$raty ;
            $result += $result*$y/100;
            
        
	
}

//definicja zmiennych kontrolera
$x = null;
$y = null;
$lata = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($x,$y,$lata);
if ( validate($x,$y,$lata,$messages) ) { // gdy brak błędów
	process($x,$y,$lata,$messages,$result);
}

//include 'calc_view.php';

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Szablonowanie Smarty');
$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty');


//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('x',$x);
$smarty->assign('y',$y);
$smarty->assign('lata',$lata);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);


// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');