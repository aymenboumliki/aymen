<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class AymenControllerTest extends WebTestCase
{
    public function testIndex(): void
    {
        $client = static::createClient();
        $client->request('GET', '/');
        self::assertResponseIsSuccessful();
    }

    public function testCv(): void
    {
        $client = static::createClient();
        $client->request('GET', '/mon-parcours');
        self::assertResponseIsSuccessful();
    }

    public function testProjects(): void
    {
        $client = static::createClient();
        $client->request('GET', '/mes-loisirs');
        self::assertResponseIsSuccessful();
    }

    public function testSkills(): void
    {
        $client = static::createClient();
        $client->request('GET', '/mes-competences');
        self::assertResponseIsSuccessful();
    }

    public function testAvis(): void
    {
        $client = static::createClient();
        $client->request('GET', '/donner-mon-avis');
        self::assertResponseIsSuccessful();
    }
}