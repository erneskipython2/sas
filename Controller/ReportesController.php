<?php
class ReportesController extends AppController {

function descargar($id = null)
{
    if (!$id)
    {
        $this->Session->setFlash('no has seleccionado ningun pdf.');
        $this->redirect(array('action'=>'index'));
    }
    Configure::write('debug',0);
    $resultado = $this->Titulars->findById($id); // info from database
    $this->set("datos_pdf",$resultado);               // info to view (pdf)
    $this->layout = 'pdf';
    $this->render();
}
}