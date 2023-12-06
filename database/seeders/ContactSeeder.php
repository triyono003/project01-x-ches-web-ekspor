<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $contact = new Contact();
    $contact->id = 1;
    $contact->name = "triyono";
    $contact->email = "triyono@log.com";
    $contact->subject = "Gabut";
    $contact->message = "Saya ingin bekerja sama";
     
    $contact->save();
  }
}
