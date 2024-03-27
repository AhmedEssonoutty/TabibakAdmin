<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('dashboard.home.index');
    }

    public function overview()
    {
        $patientsCount = User::query()->whereHas('patient')->count();
        $doctorsCount = User::query()->whereHas('doctor')->count();
        $vendorsCount = Vendor::query()->count();
        $hospitalsCount = $this->getVendorCount('Hospital');
        $clinicsCount = $this->getVendorCount('Clinic');
        $pharmaciesCount = $this->getVendorCount('Pharmacy');
        $homeCaresCount = $this->getVendorCount('Home Care');
        $labsCount = $this->getVendorCount('Lab');
        $totalTransactions = 0;
        $totalRevenues = 0;
        return view('dashboard.home.overview', compact([
            'patientsCount',
            'doctorsCount',
            'vendorsCount',
            'hospitalsCount',
            'clinicsCount',
            'pharmaciesCount',
            'homeCaresCount',
            'labsCount',
            'totalTransactions',
            'totalRevenues',
        ]));
    }

    public function profile()
    {
        $user = auth()->user();
        return view('dashboard.home.profile', compact(['user']));
    }

    public function download(Request $request): BinaryFileResponse
    {
        $fileName = 'storage/uploads/' . $request['dir'] . '/' . $request['file_name'];
        $file = public_path($fileName);
        return response()->download($file, $request['file_name'], ['Content-Type' => 'text/plain']);
    }

    private function getVendorCount ($typename)
    {
        return Vendor::query()->whereHas('vendorType', function ($query) use ($typename) {
            $query->where('name->en', $typename);
        })->count();
    }
}
