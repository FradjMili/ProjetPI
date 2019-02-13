<?php

namespace TemplateBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerTest extends WebTestCase
{
    public function testDashboard()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Dashboard');
    }

    public function testContract()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Contract');
    }

    public function testJobpasted()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Jobpasted');
    }

    public function testAddjob()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddJob');
    }

    public function testYour-proposals()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Your-Proposals');
    }

    public function testOther-proposals()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Other-Proposals');
    }

    public function testOffers()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Offers');
    }

    public function testCompany()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Company');
    }

    public function testAddcompany()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/AddCompany');
    }

    public function testMessages()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Messages');
    }

    public function testDeposits()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Deposits');
    }

    public function testWithdrawals()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Withdrawals');
    }

    public function testPayment-method()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Payment-Method');
    }

    public function testNembership()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Nembership');
    }

    public function testFeatured-job()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Featured-Job');
    }

    public function testFeatured-a-job()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Featured-a-Job');
    }

    public function testFeatured-profiles()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Featured-Profiles');
    }

    public function testFeatured-your-profile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Featured-Your-Profile');
    }

    public function testFeatured-companies()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Featured-Companies');
    }

    public function testFeatured-your-company()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Featured-Your-Company');
    }

    public function testEditprofile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/EditProfile');
    }

    public function testProfileimage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProfileImage');
    }

    public function testPassword()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Password');
    }

    public function testComapny()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Comapny');
    }

    public function testWorkroom()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Workroom');
    }

}
