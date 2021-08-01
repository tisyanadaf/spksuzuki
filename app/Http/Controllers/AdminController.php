<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DateTime;
use stdClass;

class AdminController extends Controller
{
    private $admin_model;

    public function __construct()
    {
        $this->admin_model = new Karyawan;
    }

    public function index()
    {
        $data['all_admin'] = $this->admin_model->get_all('admin');
        return view('data_admin.index', $data);
    }

    public function store(Request $request, $id = null)
    {
        $form = is_null($id) ? 'tambah' : 'edit';
        $date = new DateTime();
        $values =  new stdClass();

        if ($request->isMethod('post')) {
            $password = bcrypt($request->password);
            if ($form === 'tambah') {
                $values->nik = $request->nik;
                $values->nama_lengkap = $request->nama_lengkap;
                $values->tgl_masuk = $request->tgl_masuk;
                $values->divisi = $request->divisi;
                $values->jabatan = $request->jabatan;
                $values->username = $request->username;
                $values->password = $password;
                $values->created_at = $date->format('Y-m-d H:i:s');
                $values->updated_at = $date->format('Y-m-d H:i:s');



                $result = $this->admin_model->insert_data($values, 'admin');
                if ($result) {
                    $request->session()->flash('success', 'Data Admin berhasil dibuat');
                } else {
                    $request->session()->flash('failed', 'Data Admin gagal dibuat');
                }

                return redirect('dashboard/data_admin');
            } else {
                $values->nik = $request->nik;
                $values->nama_lengkap = $request->nama_lengkap;
                $values->tgl_masuk = $request->tgl_masuk;
                $values->divisi = $request->divisi;
                $values->jabatan = $request->jabatan;
                $values->username = $request->username;
                $values->password = $password;
                $values->updated_at = $date->format('Y-m-d H:i:s');

                $result = $this->admin_model->update_data($values, $id, 'admin');
                if ($result) {
                    $request->session()->flash('success', 'Data admin berhasil diedit');
                } else {
                    $request->session()->flash('failed', 'Data admin gagal diedit');
                }

                return redirect('dashboard/data_admin');
            }
        }

        if ($form === 'edit') {
            $data['id'] = $id;
            $data['karyawan'] = $this->admin_model->get_data_by('id', $id);
            return view('data_admin.ubah', $data);
        } else {
            return view('data_admin.input');
        }
    }

    public function delete($id)
    {
        $admin = $this->admin_model->get_data_by('id', $id);
        $nama = strval($admin[0]->nama_lengkap);

        if (count($admin) !== 0) {
            $this->admin_model->delete_data($id);
            return redirect('dashboard/data_admin')->with('success', "Data $nama berhasil dihapus");
        }

        return redirect('dashboard/data_admin')->with('failed', 'Data gagal dihapus');
    }

    public function profile()
    {
        $data['id'] = auth()->user()->id;
        return view('profile.index', $data);
    }
}
