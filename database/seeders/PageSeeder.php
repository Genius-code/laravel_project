<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $pages = ['home','services','portfolio','about','teams','contact'];
        $status = ['on','off'];
        static $counter = 1;
        foreach ($pages as $page) {
            $pageObject = new Page;
            $pageObject->name = ucfirst($page);
            $pageObject->link = $page;
            $pageObject->status = $status[array_rand($status)];
            $pageObject->order = $counter++;
            $pageObject->save();
        }
    }
}
