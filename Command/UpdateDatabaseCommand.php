<?php
/**
 * User: whitworf
 * Date: 19/11/2013
 * Time: 17:02
 */

namespace Whitworf\GeoIP2Bundle\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateDatabaseCommand extends ContainerAwareCommand {


    protected function configure() {
        $this
            ->setName('whitworf-geoip2:updatedatabase')
            ->setDescription('Downloads and updates the geoip2 database');
    }

    protected function execute(InputInterface $input, OutputInterface $output) {



        set_time_limit(0); // unlimited max execution time
        $options = [
            CURLOPT_FILE    => '/path/to/download/the/file/to.zip',
            CURLOPT_TIMEOUT =>  28800, // set this to 8 hours so we dont timeout on big files
            CURLOPT_URL     => 'http://remoteserver.com/path/to/big/file.zip',
        ];

        $ch = curl_init();
        curl_setopt_array($ch, $options);
        curl_exec($ch);
        
        
        
        

    }

} 