<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Tcpdf\Fpdi;

use TCPDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContractMail;

class ContractController extends Controller
{
    public function showContractEnglish()
    {
        $filePath = public_path('Dacktra_Contract_v10.pdf');
        $outputFilePath = public_path('Dacktra_Contract_v10_output.pdf');
        $name = session('name');
        $phone = session('phone');
        $city = session('city');
        $email = session('email');
        $dayName = session('day_name');
        $date_day = session('date_day');
        $date_month = session('date_month');
        $date_year = session('date_year');

        $formData = [
            ['page' => 1, 'x' => 100, 'y' => 110, 'text' => $name],
            ['page' => 1, 'x' => 125, 'y' => 126, 'text' => $phone],
            ['page' => 1, 'x' => 50, 'y' => 118, 'text' => $city],
            ['page' => 1, 'x' => 90, 'y' => 134, 'text' => $email],
            ['page' => 1, 'x' => 155, 'y' => 74, 'text' => $dayName],
            ['page' => 1, 'x' => 134, 'y' => 74, 'text' => $date_day],
            ['page' => 1, 'x' => 125, 'y' => 74, 'text' => $date_month],
            ['page' => 1, 'x' => 116, 'y' => 74, 'text' => $date_year],
            ['page' => 3, 'x' => 11, 'y' => 126, 'text' => $name],
            ['page' => 3, 'x' => 11, 'y' => 136, 'text' => $phone],
            ['page' => 3, 'x' => 11, 'y' => 146, 'text' => $name],
        ];

        $this->fillPDFFile($filePath, $outputFilePath, $formData);

        $pdfUrl = url('Dacktra_Contract_v10_output.pdf');

        return view('user_area.contract_en', compact('pdfUrl'));
    }


    public function fillPDFFile($filePath, $outputFilePath, $formData)
    {
        // Create new PDF document using FPDI
        $pdf = new Fpdi();

        // Set image scale factor (optional)
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // Set font
        $pdf->SetFont('dejavusans', '', 12);

        // Import the existing PDF file
        $pageCount = $pdf->setSourceFile($filePath);

        // Import all pages
        for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
            // Add a page
            $pdf->AddPage();
            // Import the page
            $tplId = $pdf->importPage($pageNo);
            $pdf->useTemplate($tplId);

            // Add content to the specific page
            foreach ($formData as $field) {
                if ($field['page'] == $pageNo) {
                    $pdf->SetXY($field['x'], $field['y']);
                    $pdf->Write(0, $field['text']);
                }
            }
        }

        // Output the filled PDF
        $pdf->Output($outputFilePath, 'F');
    }


    public function submitContract(Request $request)
    {
        $request->validate([
            'agreement' => 'required|in:yes',
        ]);

        $userEmail = session('email');
        $outputFilePath = session('filled_pdf');

        if ($outputFilePath && file_exists($outputFilePath)) {
            $this->sendAgreementEmail($userEmail, $outputFilePath);
        }

        return redirect()->route('english.form')->with('success', 'Agreement submitted and email sent.');
    }

    protected function sendAgreementEmail($userEmail, $filePath)
    {
        Mail::to($userEmail)->send(new ContractMail($filePath, $userEmail));

        // Mail::to('contract@dacktra.com')->send(new ContractMail($filePath, $userEmail));

    }

    public function showContractArabic()
    {
        return view('user_area.contract_ar');
    }
}
