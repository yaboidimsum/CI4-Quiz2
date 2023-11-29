<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
    // show users list
    
    public function admin(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('f_id', 'ASC   ')->findAll();
        return view('user_view', $data);
    }
    
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('f_id', 'ASC   ')->findAll();
        return view('home', $data);
    }

    

    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'f_nama' => $this->request->getVar('f_nama'),
            'f_sinopsis'  => $this->request->getVar('f_sinopsis'),
            'f_bioskop'  => $this->request->getVar('f_bioskop'),
            'f_jadwaltayang'  => $this->request->getVar('f_jadwaltayang'),
            'f_gambar'  => $this->request->getVar('f_gambar'),
            
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/film-list'));
    }

    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('f_id', $id)->first();
        return view('edit_view', $data);
    }


    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('f_id');
        $data = [
            'f_nama' => $this->request->getVar('f_nama'),
            'f_sinopsis'  => $this->request->getVar('f_sinopsis'),
            'f_bioskop'  => $this->request->getVar('f_bioskop'),
            'f_jadwaltayang'  => $this->request->getVar('f_jadwaltayang'),
            'f_gambar'  => $this->request->getVar('f_gambar'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/film-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('f_id', $id)->delete($id);
        return $this->response->redirect(site_url('/film-list'));
    }    

    // add random generated content
    public function confirmation(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('f_id', 'ASC   ')->findAll();
        return view('confirmation', $data);
    }

    public function myticket(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('f_id', 'ASC   ')->findAll();
        return view('myticket', $data);
    }

}