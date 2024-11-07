<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function writers()
    {
        $writers = Writer::all();
        return view('writers.writers', compact('writers'));
    }

    public function show(Writer $writer)
    {
        $articles = $writer->articles;
        return view('writers.writers_detail', compact('writer', 'articles'));
    }
}
