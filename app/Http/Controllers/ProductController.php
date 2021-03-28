<?php
use App\Imports\ExcelImport;
use App\Exports\ExcelExport;
use Excel;
public function export_csv(){
return Excel::download(new ExcelExport , &#39;product.xlsx&#39;);
}

public function import_csv(Request $request){
$path = $request-&gt;file(&#39;file&#39;)-&gt;getRealPath();
Excel::import(new ExcelImport, $path);
