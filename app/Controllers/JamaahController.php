<?php

namespace App\Controllers;

use App\Models\JamaahModel;

class JamaahController extends BaseController
{
    protected $jamaah;

    public function __construct()
    {
        $this->jamaah = new JamaahModel();
    }

    // INDEX
    public function index()
    {
        return view('jamaah/index', [
            'jamaah' => $this->jamaah
                ->orderBy('id', 'DESC')
                ->findAll()
        ]);
    }

    // CREATE
    public function create()
    {
        return view('jamaah/create');
    }

    // SAVE
    public function save()
    {
        $data = $this->request->getPost();

        $file = $this->request->getFile('foto');

        if ($file && $file->isValid()) {

            $namaFoto = $file->getRandomName();

            $file->move('uploads/jamaah', $namaFoto);

            $data['foto'] = $namaFoto;
        }

        $this->jamaah->save($data);

        return redirect()->to('/jamaah')
            ->with('success', 'Data jamaah berhasil ditambahkan');
    }

    // EDIT
    public function edit($id)
    {
        return view('jamaah/edit', [
            'jamaah' => $this->jamaah->find($id)
        ]);
    }

    // UPDATE
    public function update($id)
    {
        $jamaah = $this->jamaah->find($id);

        $data = $this->request->getPost();

        $file = $this->request->getFile('foto');

        if ($file && $file->isValid()) {

            $namaFoto = $file->getRandomName();

            $file->move('uploads/jamaah', $namaFoto);

            $data['foto'] = $namaFoto;

            if (
                $jamaah['foto'] &&
                file_exists('uploads/jamaah/' . $jamaah['foto'])
            ) {
                unlink('uploads/jamaah/' . $jamaah['foto']);
            }
        }

        $this->jamaah->update($id, $data);

        return redirect()->to('/jamaah')
            ->with('success', 'Data jamaah berhasil diupdate');
    }

    // DELETE
    public function delete($id)
    {
        $jamaah = $this->jamaah->find($id);

        if (
            $jamaah['foto'] &&
            file_exists('uploads/jamaah/' . $jamaah['foto'])
        ) {
            unlink('uploads/jamaah/' . $jamaah['foto']);
        }

        $this->jamaah->delete($id);

        return redirect()->to('/jamaah')
            ->with('success', 'Data jamaah berhasil dihapus');
    }
}