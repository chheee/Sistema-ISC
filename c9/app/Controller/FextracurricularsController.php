<?php
App::uses('AppController', 'Controller');
/**
 * Fextracurriculars Controller
 *
 * @property Fextracurricular $Fextracurricular
 * @property PaginatorComponent $Paginator
 */
class FextracurricularsController extends AppController {

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
		$this->Fextracurricular->recursive = 0;
		$this->set('fextracurriculars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Fextracurricular->exists($id)) {
			throw new NotFoundException(__('Invalid fextracurricular'));
		}
		$options = array('conditions' => array('Fextracurricular.' . $this->Fextracurricular->primaryKey => $id));
		$this->set('fextracurricular', $this->Fextracurricular->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Fextracurricular->create();
			if ($this->Fextracurricular->save($this->request->data)) {
				$this->Session->setFlash(__('The fextracurricular has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fextracurricular could not be saved. Please, try again.'));
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
		if (!$this->Fextracurricular->exists($id)) {
			throw new NotFoundException(__('Invalid fextracurricular'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Fextracurricular->save($this->request->data)) {
				$this->Session->setFlash(__('The fextracurricular has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The fextracurricular could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Fextracurricular.' . $this->Fextracurricular->primaryKey => $id));
			$this->request->data = $this->Fextracurricular->find('first', $options);
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
		$this->Fextracurricular->id = $id;
		if (!$this->Fextracurricular->exists()) {
			throw new NotFoundException(__('Invalid fextracurricular'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Fextracurricular->delete()) {
			$this->Session->setFlash(__('The fextracurricular has been deleted.'));
		} else {
			$this->Session->setFlash(__('The fextracurricular could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
