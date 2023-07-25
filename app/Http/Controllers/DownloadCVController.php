<?php

namespace App\Http\Controllers;

use Response;

class DownloadCVController extends Controller
{
    public function __invoke(string $language)
    {
        $path = public_path('cv/Laravel developer - '.$language.' - Damian Ladiani.pdf');

        $fileName = trans('home.profession1').' - Damian Ladiani.pdf';

        return Response::download($path, $fileName, ['Content-Type: application/pdf']);
    }
}
