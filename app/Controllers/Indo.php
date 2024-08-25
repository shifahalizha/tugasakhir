<?php

namespace App\Controllers;

use App\Models\JakartaModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Indo extends ResourceController
{
    private $jakartaModel;
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function __construct()
    {
        $this->jakartaModel = new JakartaModel();
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

        echo view('data/indo', $payload);


    }

    public function downloadExcel()
    {
        $jakarta = $this->jakartaModel->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Tahun');
        $sheet->setCellValue('B1', 'Nilai TPK (persen)');

        $row = 2;
        foreach ($jakarta as $item) {
            $sheet->setCellValue('A' . $row, $item['tahun']);
            $sheet->setCellValue('B' . $row, $item['nilai']);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'datatpkjakarta.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit();
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
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
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
        //
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
        //
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
        //
    }
}
