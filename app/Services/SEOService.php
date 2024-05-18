<?php

// app/Services/SeoService.php

namespace App\Services;

use Spatie\SchemaOrg\Schema;
use Illuminate\Support\Facades\URL;

class SeoService
{
    public function getSchemaData()
    {
        $currentUrl = URL::current();

        $schemaData = [
            Schema::localBusiness()
                ->name('MPTS TECH')
                ->description('Specializes in creating websites and applications for iOS and Android, smart home installations, and IoT integration.')
                ->url($currentUrl),
            Schema::organization()
                ->name('MPTS TECH')
                ->description('Expert in developing websites and mobile applications for iOS and Android, along with smart home installations and IoT integration.')
                ->url($currentUrl)
        ];

        return $schemaData;
    }
}

?>
