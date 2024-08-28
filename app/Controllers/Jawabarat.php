<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JawabaratModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use CodeIgniter\HTTP\ResponseInterface;

class Jawabarat extends BaseController
{
    private $jawabaratModel;

    public function __construct()
    {
        $this->jawabaratModel = new JawabaratModel();
    }

    public function index()
    {
        $tahun = $this->request->getGet('tahun');

        // Cek apakah tahun dipilih oleh pengguna
        if ($tahun) {
            // Jika tahun dipilih, filter data berdasarkan tahun
            $jawabarat = $this->jawabaratModel->where('YEAR(tahun)', $tahun)->findAll();
        } else {
            // Jika tidak ada tahun yang dipilih, ambil semua data
            $jawabarat = $this->jawabaratModel->findAll();
        }

        $payload = [
            "jawabarat" => $jawabarat,
            "selectedYear" => $tahun 
        ];

        echo view('data/jawabarat', $payload);
    }

    public function downloadExcel()
    {
        $jawabarat = $this->jawabaratModel->findAll();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Tahun');
        $sheet->setCellValue('B1', 'Nilai TPK (persen)');

        $row = 2;
        foreach ($jawabarat as $item) {
            $sheet->setCellValue('A' . $row, $item['tahun']);
            $sheet->setCellValue('B' . $row, $item['nilai']);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'datatpkjawabarat.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit();
    }
}
