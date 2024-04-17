<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Csv\Writer;

class DownloadController extends Controller
{
    public function downloadCSV()
    {
        // Query ข้อมูลที่คุณต้องการจะรวมเข้าในไฟล์ CSV
        $users = User::all();

        // สร้าง writer CSV
        $writer = Writer::createFromFileObject(new \SplTempFileObject());
        // เขียนข้อมูลลงในไฟล์ CSV
        $writer->insertOne(['Firstname', 'Lastname', 'Phone']);
        foreach ($users as $user) {
            $writer->setOutputBOM(Writer::BOM_UTF8); // เลือกใช้ BOM UTF-8
            $writer->insertOne([$user->fname, $user->lname, $user->telephone_number]);
        }

        // บันทึกไฟล์ CSV ไปยัง storage
        $filename = 'users.csv';
        $csvContent = $writer->getContent();
        Storage::put($filename, $csvContent);

        // ดาวน์โหลดไฟล์ CSV
        $response = response()->download(storage_path('app/' . $filename));
        return $response;
    }
}
