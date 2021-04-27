<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/core/Messages.class.php';
require_once $conf->root_path.'/app/forms/CalcForm.class.php';
require_once $conf->root_path.'/app/transfer/CalcResult.class.php';


class CalcCtrl {
    private $msgs; 
    private $form; 
    private $result; 
    private $hide_intro; 
    
    public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;      
}
 
    public function getParams(){
	$this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
	$this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
	$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;            
    }
    
   function validate(){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($this->form->x) && isset($this->form->y) && isset($this->form->lata))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
	if ( $this->form->x == "") {
	$this->msgs->addMsg('Nie podano kwoty kretydu.');
         }
        if ( $this->form->y == "") {
	$this->msgs->addMsg('Nie podano oprocentowania raty.');
        }
        if ( $this->form->lata == "") {
	$this->msgs->addMsg('Nie podano na ile lat bierzemy kredyt.');
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (! $this->msgs->isMsgs()){
	
	    if (! is_numeric( $this->form->x )) {
                $this->msgs->addMsg('Błędnie wprowadzona kwota.');
            }
	
            if (! is_numeric( $this->form->y )) {
            	$this->msgs->addMsg('Błednie wprowadzone oprocentowanie');
            }		
        }
	//if (count ( $messages ) != 0) return false;
	//else return true;
        return ! $this->msgs->isMsgs();
    } 
    
    
    
    
    public function process() {
  
        $this->getParams();
        if($this->validate()){
            
            $this->form->x = floatval($this->form->x);
            $this->form->y = floatval($this->form->y);

            
            $raty = $this->form->lata*12; //ilosc rat
            $this->result = $this->form->x/$raty ;
            $this->result += $this->result*$this->form->y/100;
            
            
           
             
            
        }
 
        $this->generateView();
    }
//    $smarty = new Smarty();

//$smarty->assign('app_url',_APP_URL);
//$smarty->assign('root_path',_ROOT_PATH);
//$smarty->assign('page_title','Szablonowanie Smarty');
//$smarty->assign('page_description','Szablonowanie oparte na bibliotece Smarty');
//$smarty->assign('page_header','Szablony Smarty');
//
//
////pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
//$smarty->assign('x',$x);
//$smarty->assign('y',$y);
//$smarty->assign('lata',$lata);
//$smarty->assign('result',$result);
//$smarty->assign('messages',$messages);
//
//
////
//$smarty->display(_ROOT_PATH.'/app/calc.tpl');
    
 public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Obietkowość');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
	
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/views/calc_view.html');
	}
    
    
    
    
    
    
    
}
    
    ?>