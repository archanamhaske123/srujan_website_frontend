<?php namespace App\Models;

use CodeIgniter\Model;

class contactModel extends Model
{
    protected $table      = 'contact_us'; // Table name
    protected $primaryKey = 'id';    // Primary key

    protected $allowedFields = ['name', 'email', 'phone_no', 'company_name', 'country', 'interest', 'message']; // Columns you allow
    protected $useTimestamps = true; // Automatically handle created_at, updated_at

    // Validation rules
    protected $validationRules = [
        'name'        => 'required|min_length[3]|max_length[255]',
        'email'       => 'required|valid_email',
        'phone_no'       => 'required|regex_match[/^\+?[0-9]{10,15}$/]',
        'company_name'=> 'required|max_length[255]',
        'country'     => 'required|max_length[255]',
        'interest'    => 'required|max_length[255]',
        'message'     => 'required|max_length[500]',
    ];
    
    protected $validationMessages = [
        'email' => ['valid_email' => 'Please provide a valid email address.'],
    ];
}
