<?php

// app/Services/SeoService.php

namespace App\Services;

use Spatie\SchemaOrg\Schema;

class SeoService
{
    public function getSchemaData()
    {
        $schemaData = [
            Schema::localBusiness()
                ->name('MPTS TECH')
                ->description('Specializes in creating websites and applications for iOS and Android, smart home installations, and IoT integration.')
                ->url('https://mptstech.com/')  // Replace with your actual business URL
                ,
            Schema::organization()
                ->name('MPTS TECH')
                ->description('Expert in developing websites and mobile applications for iOS and Android, along with smart home installations and IoT integration.')
                ->url('https://mptstech.com/')  // Replace with your actual business URL

        ];

        return $schemaData;
    }
}

?>
