<?php
App::uses('AppController', 'Controller');
/**
 * Finvestigacions Controller
 *
 * @property Finvestigacion $Finvestigacion
 * @property PaginatorComponent $Paginator
 */
class FinvestigacionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Finvestigacion->recursive = 0;
		$this->set('finvestigacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Finvestigacion->exists($id)) {
			throw new NotFoundException(__('Invalid finvestigacion'));
		}
		$options = array('conditions' => array('Finvestigacion.' . $this->Finvestigacion->primaryKey => $id));
		$this->set('finvestigacion', $this->Finvestigacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Finvestigacion->create();
			if ($this->Finvestigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The finvestigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finvestigacion could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Finvestigacion->exists($id)) {
			throw new NotFoundException(__('Invalid finvestigacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Finvestigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The finvestigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The finvestigacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Finvestigacion.' . $this->Finvestigacion->primaryKey => $id));
			$this->request->data = $this->Finvestigacion->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Finvestigacion->id = $id;
		if (!$this->Finvestigacion->exists()) {
			throw new NotFoundException(__('Invalid finvestigacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Finvestigacion->delete()) {
			$this->Session->setFlash(__('The finvestigacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The finvestigacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
