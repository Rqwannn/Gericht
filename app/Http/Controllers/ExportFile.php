<?php

namespace App\Http\Controllers;

use App\Models\BaseData;
use Exception;
use Illuminate\Http\Request;

class ExportFile extends Controller
{
    public function __construct()
    {
        $this->BaseData = new BaseData();
    }

    public function ToExcel(Request $request)
    {
        $File = $request->Status;
        if ($File == "Order") {
            try {
                $this->BaseData->DataOrderToExcel();
                return json_encode('Excel Data Download File Successfully Is At Program C:');
            } catch (Exception $e) {
                return json_encode('The File Already Exists, Please Check It In The C: Program');
            }
        } else if ($File == "User") {
            try {
                $this->BaseData->DataUserToExcel();
                return json_encode('Excel Data Download File Successfully Is At Program C:');
            } catch (Exception $e) {
                return json_encode('The File Already Exists, Please Check It In The C: Program');
            }
        } else if ($File == "FailedOrder") {
            try {
                $this->BaseData->DataFailedOrderToExcel();
                return json_encode('Excel Data Download File Successfully Is At Program C:');
            } catch (Exception $e) {
                return json_encode('The File Already Exists, Please Check It In The C: Program');
            }
        } else if ($File == "SuccessOrder") {
            try {
                $this->BaseData->DataSuccessOrderToExcel();
                return json_encode('Excel Data Download File Successfully Is At Program C:');
            } catch (Exception $e) {
                return json_encode('The File Already Exists, Please Check It In The C: Program');
            }
        }
    }
}
