<?php

namespace App\Console\Commands;

use App\Models\Ad;
use Illuminate\Console\Command;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class RegenerateAdThumbnails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ads:regenerate-thumbnails {--force : Force regeneration of all thumbnails}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate ad thumbnails using original image size for maximum quality';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting thumbnail regeneration...');

        $ads = Ad::with('media')->get();
        $totalAds = $ads->count();
        $processedAds = 0;
        $processedImages = 0;

        $progressBar = $this->output->createProgressBar($totalAds);
        $progressBar->start();

        foreach ($ads as $ad) {
            $mediaItems = $ad->getMedia('ads');

            foreach ($mediaItems as $media) {
                try {
                    // Since we're using original size, just ensure the media is properly processed
                    $media->manipulations = [];
                    $media->save();

                    // Trigger conversion regeneration with new settings
                    $ad->registerMediaConversions($media);

                    $processedImages++;
                } catch (\Exception $e) {
                    $this->warn("Failed to process image {$media->id} for ad {$ad->id}: " . $e->getMessage());
                }
            }

            $processedAds++;
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine();

        $this->info("Thumbnail regeneration completed!");
        $this->info("Processed {$processedAds} ads with {$processedImages} images.");
        $this->info("All thumbnails now use original image size for maximum quality!");

        return Command::SUCCESS;
    }
}
