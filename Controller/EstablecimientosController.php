<?php
App::import('Model', 'Estatip');
App::import('Model', 'Estado');



class EstablecimientosController extends AppController {
    public $helpers=array('Html','Form');
    public $components=array('Session');
	
    public function index() {
        $params=  array('order'=>'establecimiento desc','recursive' => 0);
        $this->set('establecimientos', $this->Establecimiento->find('all',$params));
           }
	

	
    public function add() {
        if($this->request->is('post')){

			//guardo los datos		
			
            if($this->Establecimiento->save($this->request->data)):
				$this->Session->setFlash('Establecimiento guardado');
				$this->redirect(array('action'=>'index'));
            endif;    
            }else{
				$estado = new Estado();         
				$estados = $estado->find('list', array('fields' => array('Estado.id', 'Estado.estado')));
				$this->set('estados', $estados);
				$estatip = new Estatip();         
				$estatips = $estatip->find('list', array('fields' => array('Estatip.id', 'Estatip.tipo')));
				$this->set('estatips', $estatips);
													
			}
        
        
    }
	
	public function edit($id=null){
		$this->Establecimiento->id=$id;
		if($this->request->is('get')):
			$this->request->data=$this->Establecimiento->read();
				$estado = new Estado();         
				$estados = $estado->find('list', array('fields' => array('Estado.id', 'Estado.estado')));
				$this->set('estados', $estados);
				$estatip = new Estatip();         
				$estatips = $estatip->find('list', array('fields' => array('Estatip.id', 'Estatip.tipo')));
				$this->set('estatips', $estatips);
			else:
			
						
			
				if($this->Establecimiento->save($this->request->data)):
				$this->Session->setFlash('Establecimiento '.$this->request->data['Establecimiento']['establecimiento'].' guardado!');
				$this->redirect(array('action'=>'index'));
				else:
					$this->Session->setFlash('No se pudo guardar');
					endif;
				endif;
	}
	
	public function delete($id){
		if($this->request->is('get')):
			throw new MethodNotAllowedException();
		else:
			if($this->Establecimiento->delete($id)):
				$this->Session->setFlash('Establecimiento Eliminado');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	
	}


}


