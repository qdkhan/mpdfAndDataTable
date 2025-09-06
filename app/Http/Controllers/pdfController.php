<?php

namespace App\Http\Controllers;

use Log;
use Mpdf\Mpdf;
use Spatie\Activitylog\Models\Activity;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class pdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laravel mPDF Demo',
            'images' => [
                public_path('images/abc.jpg'),
                public_path('images/abc.jpg'),
                public_path('images/abc.jpg'),
                public_path('images/abc.jpg')
            ],
            'name' => 'Qutbuddin Khan'
        ];

        $html = view('pdf.invoice', $data)->render();

        $mpdf = new Mpdf([
            'allow_remote' => true,
            'margin_top' => 0,
            'margin_right' => 0,
            'margin_bottom' => 0,
            'margin_left' => 0
        ]);

        $mpdf->WriteHTML($html);
        activity()->log('PDF, Downloaded!');
        $lastActivity = Activity::all()->last();
        Log::info($lastActivity);
        return $mpdf->Output('invoice.pdf', 'I');
    }

    public function index()
    {
        return view('table_data'); // 👈 your Blade view
    }

    public function tableData()
    {
        // $model = User::with('useDetail')->query();
        // $mmodel = DB::table('users');
        // return DataTables::of($model)->toJson(); 
        // return DataTables::eloquent($model)->toJson();

        $model = User::with('useDetail');
        return DataTables::eloquent($model)
                            ->addIndexColumn()
                            ->setRowClass('{{ $id % 2 == 0 ? "alert-success" : "alert-warning" }}')
                            ->editColumn('name', 'Hi {{$name}}!')
                            ->editColumn('created_at', fn(User $user) => $user->created_at->format('d M, Y H:i:s'))
                            ->addColumn('city', fn(User $user) => 'Lucknow '. $user->useDetail->city ?? 'N/A')
                            ->toJson(); 
    }
}