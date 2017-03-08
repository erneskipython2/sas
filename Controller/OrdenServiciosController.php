<?php
App::import('Model', 'Titular');
App::import('Model', 'Beneficiario');
App::import('Model', 'Establecimiento');
App::import('Model', 'Especialidad');
App::import('Model', 'Parentesco');



class OrdenServiciosController extends AppController {
    public $helpers=array('Html','Form');
    public $components=array('Session');
	
    public function index() {
        $params=  array('order'=>'fecha desc','recursive' => 0);
        $this->set('ordenservicios', $this->OrdenServicio->find('all',$params));
           }
		   
	

	
    public function add() {
        if($this->request->is('post')){

			//guardo los datos		
			
            if($this->OrdenServicio->save($this->request->data)):
				$this->Session->setFlash('Orden de servicio guardada');
				$this->redirect(array('action'=>'index'));
            endif;    
            }else{
				$titular = new Titular();         
				$titulars = $titular->find('list', array('fields' => array('Titular.id', 'Titular.cedula')));
				$this->set('titulars', $titulars);
				
				$beneficiario = new Beneficiario();         
				$beneficiarios = $beneficiario->find('list', array('fields' => array('Beneficiario.id', 'Beneficiario.cedula')));
				$this->set('beneficiarios', $beneficiarios);
				
				$establecimiento = new Establecimiento();         
				$establecimientos = $establecimiento->find('list', array('fields' => array('Establecimiento.id', 'Establecimiento.establecimiento')));
				$this->set('establecimientos', $establecimientos);
				
				$especialidad = new Especialidad();         
				$especialidads = $especialidad->find('list', array('fields' => array('Especialidad.id', 'Especialidad.especialidad')));
				$this->set('especialidads', $especialidads);
													
			}
        
        
    }
	
	public function edit($id=null){
		$this->OrdenServicio->id=$id;
		if($this->request->is('get')):
			$this->request->data=$this->OrdenServicio->read();
				$titular = new Titular();         
				$titulars = $titular->find('list', array('fields' => array('Titular.id', 'Titular.cedula')));
				$this->set('titulars', $titulars);
				
				$beneficiario = new Beneficiario();         
				$beneficiarios = $beneficiario->find('list', array('fields' => array('Beneficiario.id', 'Beneficiario.cedula')));
				$this->set('beneficiarios', $beneficiarios);
				
				$establecimiento = new Establecimiento();         
				$establecimientos = $establecimiento->find('list', array('fields' => array('Establecimiento.id', 'Establecimiento.establecimiento')));
				$this->set('establecimientos', $establecimientos);
				
				$especialidad = new Especialidad();         
				$especialidads = $especialidad->find('list', array('fields' => array('Especialidad.id', 'Especialidad.especialidad')));
				$this->set('especialidads', $especialidads);
			else:
			
						
			
				if($this->OrdenServicio->save($this->request->data)):
				$this->Session->setFlash('Orden de Servicio Guardada!');
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
			if($this->OrdenServicio->delete($id)):
				$this->Session->setFlash('Orden de Servicio Eliminada');
				$this->redirect(array('action'=>'index'));
			endif;
		endif;
	
	}
	
	
	 function viewPdf($id = null){
         if (!$id){
             $this->Session->setFlash('Id inválido para obtener pdf');
             $this->redirect(array('action'=>'index'), null, true);
         }

         Configure::write('debug',2);

         $id = intval($id);
		 		$parentesco = new Parentesco();         
				$parentescos = $parentesco->find('list', array('fields' => array('Parentesco.id', 'Parentesco.parentesco')));
				$this->set('parentescos', $parentescos); 

         $property = $this->OrdenServicio->read(null, $id);

           $this->set('property',$property);
         if (empty($property))
         {
             $this->Session->setFlash('Sorry, there is no property with the
submitted ID.');
             $this->redirect(array('action'=>'index'), null, true);
         }
         $this->layout = 'pdf';
         $this->render();
    }
	
	



}


