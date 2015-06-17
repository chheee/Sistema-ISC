<?php
App::uses('AppController', 'Controller');
/**
 * Ftutorias Controller
 *
 * @property Ftutoria $Ftutoria
 * @property PaginatorComponent $Paginator
 */
class FtutoriasController extends AppController {

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
		$this->Ftutoria->recursive = 0;
		$this->set('ftutorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ftutoria->exists($id)) {
			throw new NotFoundException(__('Invalid ftutoria'));
		}
		$options = array('conditions' => array('Ftutoria.' . $this->Ftutoria->primaryKey => $id));
		$this->set('ftutoria', $this->Ftutoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ftutoria->create();
			if ($this->Ftutoria->save($this->request->data)) {
				$this->Session->setFlash(__('The ftutoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ftutoria could not be saved. Please, try again.'));
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
		if (!$this->Ftutoria->exists($id)) {
			throw new NotFoundException(__('Invalid ftutoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ftutoria->save($this->request->data)) {
				$this->Session->setFlash(__('The ftutoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ftutoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ftutoria.' . $this->Ftutoria->primaryKey => $id));
			$this->request->data = $this->Ftutoria->find('first', $options);
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
		$this->Ftutoria->id = $id;
		if (!$this->Ftutoria->exists()) {
			throw new NotFoundException(__('Invalid ftutoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ftutoria->delete()) {
			$this->Session->setFlash(__('The ftutoria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ftutoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
