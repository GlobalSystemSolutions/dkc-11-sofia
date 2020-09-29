<?php

namespace App\Providers;

use App\Models\User\User;
use App\Models\Center\Doctor;
use App\Models\Center\Specialty;
use App\Models\Center\PublicRelations\Buyer;
use App\Models\Center\PublicRelations\Career;
use App\Models\Center\PublicRelations\Campaign;
use App\Models\Center\PublicRelations\News;
use App\Observers\Center\DoctorObserver;
use App\Observers\Center\SpecialtyObserver;
use App\Observers\Center\PublicRelations\BuyerObserver;
use App\Observers\Center\PublicRelations\CampaignObserver;
use App\Observers\Center\PublicRelations\CareerObserver;
use App\Observers\Center\PublicRelations\NewsObserver;
use App\Observers\User\UserObserver;
use Illuminate\Support\ServiceProvider;

class EloquentEventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Buyer::observe(BuyerObserver::class);
        Campaign::observe(CampaignObserver::class);
        Career::observe(CareerObserver::class);
        News::observe(NewsObserver::class);
        Doctor::observe(DoctorObserver::class);
        Specialty::observe(SpecialtyObserver::class);
        User::observe(UserObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
