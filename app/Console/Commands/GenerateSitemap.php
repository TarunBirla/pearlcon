<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SitemapController;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate static public/sitemap.xml file containing all canonical indexable frontend pages';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Generating XML sitemap...');

        $controller = new SitemapController();
        $xmlContent = $controller->generateXml();

        $path = public_path('sitemap.xml');
        file_put_contents($path, $xmlContent);

        $this->info('Successfully generated sitemap at: ' . $path);

        return 0;
    }
}
