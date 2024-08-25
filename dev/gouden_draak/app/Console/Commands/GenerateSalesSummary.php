<?php

namespace App\Console\Commands;

use App\Exports\SalesSummaryExport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class GenerateSalesSummary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sales-summary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate daily sales summary and store it as an Excel file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $fileName = 'sales_summary_' . now()->format('Y_m_d') . '.xlsx';

        Excel::store(new SalesSummaryExport, 'public/summaries/' . $fileName);

        $this->info('Sales summary generated and stored successfully.');
    }
}
