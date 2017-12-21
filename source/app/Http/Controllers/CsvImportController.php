<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CsvFileImporter;
// use Input;
// use Redirect;

class CsvImportController extends Controller
{
    public function store(Request $request)
    {
    	$csv_file = $request->file('file');
    	if(!empty($csv_file)){
    		if($csv_file->getError() == 0){
    			$csv_importer = new CsvFileImporter();
    			if ($csv_importer->import($csv_file)) {
    				dd($csv_importer->import($csv_file));
                    // Provide success message to the user
                    $message = 'Your file has been successfully imported!';
                } else {
                    $message = 'Your file did not import';
                }
    		}else{
    			$message = "Has error!";
    		}

    	}else{
    		$message = "File rong";
    	}
    	return redirect()->back()->with('message', $message);
        // Check if form submitted a file
        // if (Input::hasFile('file')) {
        //     $csv_file = Input::file('file');

            // // You wish to do file validation at this point
            // if ($csv_file->isValid()) {

            //     // We can also create a CsvStructureValidator class
            //     // So that we can validate the structure of our CSV file

            //     // Lets construct our importer
            //     $csv_importer = new CsvFileImporter();

            //     // Import our csv file
            //     if ($csv_importer->import($csv_file) {
            //         // Provide success message to the user
            //         $message = 'Your file has been successfully imported!';
            //     } else {
            //         $message = 'Your file did not import';
            //     }

            // } else {
            //     // Provide a meaningful error message to the user
            //     // Perform any logging if necessary
            //     $message = 'You must provide a CSV file for import.';
            // }
            
        //     return Redirect::back()->with('message', $message);
        // }
    }
}
