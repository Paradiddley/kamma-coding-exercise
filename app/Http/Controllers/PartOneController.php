<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PartOneController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return Inertia::render('PartOne');
    }
}
