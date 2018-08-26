<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/data/employees.json");
        $data = json_decode($json);
        
        foreach ($data as $obj) {
            //$skills = get_object_vars($obj->skills) ;
            User::create(array(
                'name' => $obj->name,
                'isOnline' => $obj->isOnline,
                'salary' => $obj->salary,
                'age' => $obj->age,
                'position' => $obj->position,
                'gender' => ($obj->gender=='male')?(true):(false),
                'email' => $obj->email,
                'phone' => $obj->phone,
                'address' => $obj->address,
                'skills' => serialize( $obj->skills ),
                'password' => bcrypt('123456'),
            ));
        }
        
        
    }
}
