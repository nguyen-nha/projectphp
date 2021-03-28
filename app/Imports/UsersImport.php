<?php
  
namespace App\Imports;
  
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
  
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'ten'     => $row[0],
            'dotuoi'    => $row[1],
            'gioitinh'    => $row[2],
            'loai'    => $row[3],
            'kichco'    => $row[4], 
            'suckhoe'    => $row[5], 
            'password' => \Hash::make('123456'),
        ]);
    }
}