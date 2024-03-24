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
        $hospitalsCount = $this->getVendorCount(1);
        $clinicsCount = $this->getVendorCount(2);
        $pharmaciesCount = $this->getVendorCount(3);
        $homeCaresCount = $this->getVendorCount(4);
        $labsCount = $this->getVendorCount(5);
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

    private function getVendorCount ($typeId)
    {
        return Vendor::query()->whereHas('vendorType', function ($query) use ($typeId) {
            $query->where('id', $typeId);
        })->count();
    }
}
