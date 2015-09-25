<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;

class NameController extends Controller
{

    protected $names;

    protected function getFileArray($fileName)
    {
        $this->pathResources = realpath(base_path('resources/files'));

        $path = $this->pathResources."/".$fileName.".txt";

        return file($path);

    }

    public function index()
    {

        return view('name.index');
    }


    public function generate(Request $request)
    {

        $this->names = $this->getFileArray($request->type);
        $names = [];

        $i = 1;
        while ($i <= $request->numbers) {
            $names[$i] = ['name' => $this->getName()];
            $i++;
        }

        return response()->json($names);

    }

    protected function getName()
    {
        $name = trim(preg_replace('/\s\s+/', ' ', $this->firstName()) );
        $surname = trim(preg_replace('/\s\s+/', ' ', $this->surName()) );

        return $name.' '.$surname;
    }


    /**
     * Generate a random first name from the most common US names.
     *
     * @return string
     */
    function firstName() {

        $total = count($this->names);
        $index = rand( 0, $total - 1 );
        return  ucfirst( mb_strtolower(strtolower($this->names[$index]), 'UTF-8') );
    }
    /**
     * Generate a random, non-offensive adjective.
     *
     * @return string
     */
    function surName() {

        $surnames = $this->getFileArray('surnamesall');
        $total = count($surnames);
        $index = rand(0, $total - 1);
        return ucfirst( mb_strtolower(strtolower($surnames[$index]), 'UTF-8') );
    }


}