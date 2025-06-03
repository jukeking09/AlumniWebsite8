<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User; // Adjust the model import based on your project structure
use Barryvdh\DomPDF\Facade\Pdf;

class IDCardController extends Controller
{
    public function generateIdCard($userId)
    {
        $user = User::findOrFail($userId);

        // Construct the full path for the profile picture
        $profilePicturePath = $user->profile_picture 
            ? storage_path('app/private/' . $user->profile_picture) 
            : null;

        $id = view('idcard', compact('user', 'profilePicturePath'))->render();

        //$id = view('idcard', compact('user'))->render();

    // Load the HTML and configure DOMPDF options
    $pdf = Pdf::loadHTML($id)
              ->setPaper('A4', 'portrait')
              ->setOption('isHtml5ParserEnabled', true)
              ->setOption('defaultMediaType', 'screen')
              ->setOption('isPhpEnabled', true);

    // Return the generated PDF for download
    return $pdf->download('id_card.pdf');
    }

    public function generateIdCardToMail($userId)
    {
        $user = User::findOrFail($userId);

        // Construct the full path for the profile picture
        $profilePicturePath = $user->profile_picture 
            ? storage_path('app/private/' . $user->profile_picture) 
            : null;

        $id = view('idcard', compact('user', 'profilePicturePath'))->render();

        //$id = view('idcard', compact('user'))->render();

    // Load the HTML and configure DOMPDF options
    $pdf = Pdf::loadHTML($id)
              ->setPaper('A4', 'portrait')
              ->setOption('isHtml5ParserEnabled', true)
              ->setOption('defaultMediaType', 'screen')
              ->setOption('isPhpEnabled', true);

        // Return the generated PDF for download
        return $pdf->output();
    }
}