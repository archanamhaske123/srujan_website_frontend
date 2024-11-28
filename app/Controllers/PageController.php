<?php

namespace App\Controllers;
use App\Models\contactModel;

class PageController extends BaseController
{
    public function contactUsSave()
    {
        $contact = new contactModel();
        
        // Validate the request
        if (!$this->validate($contact->validationRules)) {
            return $this->response->setJSON([
                'status' => 'warning',
                'message' => 'Validation failed',
                'errors' => $this->validator->getErrors(),
            ]);
        }
    
        // Save data
        $data = $this->request->getPost(); // Fetch form data
        if ($contact->save($data)) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Contact saved successfully',
            ]);
        }
    
        return $this->response->setJSON([
            'status' => 'warning',
            'message' => 'Failed to save contact',
        ]);
    }
}