<?php
App::uses('AppController', 'Controller');
/**
 * Facademicas Controller
 *
 * @property Facademica $Facademica
 * @property PaginatorComponent $Paginator
 */
class FacademicasController extends AppController {

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
		$this->Facademica->recursive = 0;
		$this->set('facademicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Facademica->exists($id)) {
			throw new NotFoundException(__('Invalid facademica'));
		}
		$options = array('conditions' => array('Facademica.' . $this->Facademica->primaryKey => $id));
		$this->set('facademica', $this->Facademica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Facademica->create();
			if ($this->Facademica->save($this->request->data)) {
				$this->Session->setFlash(__('The facademica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facademica could not be saved. Please, try again.'));
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
		if (!$this->Facademica->exists($id)) {
			throw new NotFoundException(__('Invalid facademica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Facademica->save($this->request->data)) {
				$this->Session->setFlash(__('The facademica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facademica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Facademica.' . $this->Facademica->primaryKey => $id));
			$this->request->data = $this->Facademica->find('first', $options);
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
		$this->Facademica->id = $id;
		if (!$this->Facademica->exists()) {
			throw new NotFoundException(__('Invalid facademica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Facademica->delete()) {
			$this->Session->setFlash(__('The facademica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The facademica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
