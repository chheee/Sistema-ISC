<?php
App::uses('AppController', 'Controller');
/**
 * Fformacions Controller
 *
 * @property Fformacion $Fformacion
 * @property PaginatorComponent $Paginator
 */
class FformacionsController extends AppController {

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
		$this->Fformacion->recursive = 0;
		$this->set('fformacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fformacion->exists($id)) {
			throw new NotFoundException(__('Invalid fformacion'));
		}
		$options = array('conditions' => array('Fformacion.' . $this->Fformacion->primaryKey => $id));
		$this->set('fformacion', $this->Fformacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fformacion->create();
			if ($this->Fformacion->save($this->request->data)) {
				$this->Session->setFlash(__('The fformacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fformacion could not be saved. Please, try again.'));
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
		if (!$this->Fformacion->exists($id)) {
			throw new NotFoundException(__('Invalid fformacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fformacion->save($this->request->data)) {
				$this->Session->setFlash(__('The fformacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fformacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fformacion.' . $this->Fformacion->primaryKey => $id));
			$this->request->data = $this->Fformacion->find('first', $options);
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
		$this->Fformacion->id = $id;
		if (!$this->Fformacion->exists()) {
			throw new NotFoundException(__('Invalid fformacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fformacion->delete()) {
			$this->Session->setFlash(__('The fformacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fformacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
