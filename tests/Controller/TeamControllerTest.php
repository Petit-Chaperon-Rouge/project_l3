<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TeamControllerTest extends WebTestCase {

    public function testListingTeam(){
        $client = static::createClient();

        $client->request('GET', '/team');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

    }

    public function testFormTeam(){



    }

}