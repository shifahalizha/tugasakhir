<?php

namespace App\Controllers;

use App\Models\HistoriModel;
use App\Models\JakartaModel;
use CodeIgniter\Debug\Toolbar\Collectors\History;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Adminjakarta extends ResourceController
{
    protected $session;
    private $jakartaModel;
    public function __construct()
    {
        $this->jakartaModel = new JakartaModel();
        $this->session = \Config\Services::session();
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

    private function logAction($data)
    {
        $historiModel = new HistoriModel();
        $historiModel->insert($data);
    }

    public function index()
    {
        $tahun = $this->request->getGet('tahun');

        // Cek apakah tahun dipilih oleh pengguna
        if ($tahun) {
            // Jika tahun dipilih, filter data berdasarkan tahun
            $jakarta = $this->jakartaModel->where('YEAR(tahun)', $tahun)->findAll();
        } else {
            // Jika tidak ada tahun yang dipilih, ambil semua data
            $jakarta = $this->jakartaModel->findAll();
        }

        $payload = [
            "jakarta" => $jakarta,
            "selectedYear" => $tahun 
        ];

        echo view('admin/adminjakarta', $payload);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        echo view('admin/new');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        $inputDate = $this->request->getPost('tahun');
        $formattedDate = date('Y-m-d', strtotime($inputDate));

        $payload = [
            "tahun" => $formattedDate,
            "bulan" => $this->request->getPost('bulan'),
            "nilai" => $this->request->getPost('nilai'),
        ];


        $this->jakartaModel->insert($payload);
        $insertedId = $this->jakartaModel->insertID();
        $userId = $this->session->get('name');

        // Log the action in histori table
        $historiPayload = [
            'user_id' => $userId,
            'action' => 'create',
            'table_name' => 'jakarta',
            'record_id' => $insertedId,
        ];
        $this->logAction($historiPayload);

        return redirect()->to('/adminjakarta');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $jakarta = $this->jakartaModel->find($id);

        if (!$jakarta) {
            throw new \Exception("Data not found!");
        }

        echo view('admin/edit', ["data" => $jakarta]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {

        $inputDate = $this->request->getPost('tahun');
        $formattedDate = date('Y-m-d', strtotime($inputDate));

        $payload = [
            "tahun" => $formattedDate,
            "bulan" => $this->request->getPost('bulan'),
            "nilai" => $this->request->getPost('nilai'),
        ];

        $this->jakartaModel->update($id, $payload);
        $userId = $this->session->get('name');
        $historiPayload = [
            'user_id' => $userId,
            'action' => 'update',
            'table_name' => 'jakarta',
            'record_id' => $id,
        ];
        $this->logAction($historiPayload);

        return redirect()->to('/adminjakarta');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $this->jakartaModel->delete($id);
        
        $userId = $this->session->get('name');
        $historiPayload = [
            'user_id' => $userId,
            'action' => 'delete',
            'table_name' => 'jakarta',
            'record_id' => $id,
        ];
        $this->logAction($historiPayload);
        return redirect()->to('/adminjakarta');
    }
}
