<?php
namespace ridesoft\AzureCloudMap;

use WindowsAzure\Common\ServicesBuilder;
/**
 * Base class for mapping Microsoft Azure Api
 *
 * @author maurizio brioschi <maurizio.brioschi@ridesoft.org>
 */
abstract class AzureMapping {
    protected $connectionstring;
    protected $blobRestProxy;
    
    public function __construct($connectionString) {
        $this->connectionstring = $connectionString;
        $this->blobRestProxy = ServicesBuilder::getInstance()->createBlobService($this->connectionstring);
    }
}
