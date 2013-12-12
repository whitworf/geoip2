<?php
/**
 * User: whitworf
 * Date: 19/11/2013
 * Time: 16:59
 */

namespace Whitworf\GeoIP2Bundle;


use GeoIp2\Database\Reader;

class GeoIP2 {

    private static $databaseReader = null;

    public function __construct() {

        if (self::$databaseReader == null) {

            
            $filename = dirname(__FILE__) . "/Resources/data/GeoLite2-Country.mmdb";
            
            if (!file_exists($filename)){
                throw new \Exception("Geo database file does not exist");
            }

            self::$databaseReader = new Reader($filename);
        }

    }

    /**
     * @return \GeoIp2\Database\Reader
     */
    public static function getDatabaseReader() {
        return self::$databaseReader;
    }

    /**
     * @param \GeoIp2\Database\Reader $reader
     */
    public static function setDatabaseReader($reader) {
        self::$databaseReader = $reader;
    }


} 