<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usr = new User;
        $usr->username  = 'kio';
        $usr->fullname  = 'Kio Kusanagi';
        $usr->email     = 'kiokusa@gmail.com';
        $usr->password  = bcrypt('admin');
        $usr->birthdate = '1980-08-20';
        $usr->gender    = 'Male';
        $usr->role      = 'Admin';
 		$usr->save();

 		User::create(array(
            'username'  => 'iory',
 			'fullname'  => 'Iory Yagami',
 			'email'     => 'ioryya@gmail.com',
 			'password'  => bcrypt('editor'),
 			'birthdate' => '1985-10-12',
 			'gender'    => 'Male'
 		));

 		// Factory
 		factory(User::class, 10)->create();
    }
}
