<?php

use Illuminate\Database\Seeder;
use App\Student;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $S1=new Student();
    	// $S1->name="Mg Mg";
    	// $S1->email="mgmg@gmial.com";
    	// $S1->address="Bahan";
    	// $S1->save();


    	// $S2=new Student();
    	// $S2->name="Kyaw Kyaw";
    	// $S2->email="kyawkyaw@gmial.com";
    	// $S2->address="Latha";
    	// $S2->save();
    	factory(App\Student::class,10)->create();
        
        
    }
}
