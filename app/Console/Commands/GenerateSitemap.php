<?php

namespace App\Console\Commands;

use App\Models\Service;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;
use Spatie\Sitemap\Sitemap;

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
    protected $description = 'Generate sitemap';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $sitemap = Sitemap::create();

        // Static pages
        $sitemap->add('/');
        $sitemap->add('/about-us');
        $sitemap->add('/about');
        $sitemap->add('/services');
        // $sitemap->add('/service');
        $sitemap->add('/testimonials');
        $sitemap->add('/faq');
        $sitemap->add('/news');
        $sitemap->add('/contact');

        // Dynamic pages
        $services = Service::all();
        foreach ($services as $service) {
            $sitemap->add("/service/{$service->slug}");
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
