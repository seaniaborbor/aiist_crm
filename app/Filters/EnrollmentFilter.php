<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class EnrollmentFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user has the admin account type
        $userAccType = session()->get('userAccessType'); // Access userAccType directly
        if ($userAccType !== 'enrollment') {
            return redirect()->to('/')->with('error', 'Your account does not have access to this page. You are violating the rules.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Filter logic after the controller runs
    }
}
