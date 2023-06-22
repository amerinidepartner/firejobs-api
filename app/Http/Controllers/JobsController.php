<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\GreenhouseService;


class JobsController extends Controller
{
    public function home(GreenhouseService $greenhouseService): View
    {
        $jobs = $greenhouseService->getJobs();

        return view('home', [
            'jobs' => $jobs
        ]);
    }

    public function types(GreenhouseService $greenhouseService)
    {
        $types = $greenhouseService->getTypes();

        return $types;
    }

    public function departments(GreenhouseService $greenhouseService)
    {
        $departments = $greenhouseService->getDepartments();

        return $departments;
    }

    public function offices(GreenhouseService $greenhouseService)
    {
        $offices = $greenhouseService->getOffices();

        return $offices;
    }

    public function jobs(GreenhouseService $greenhouseService)
    {
        $jobs = $greenhouseService->getJobs();

        return $jobs;
    }

}
