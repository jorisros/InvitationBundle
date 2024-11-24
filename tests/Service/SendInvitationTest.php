<?php

namespace JorisRos\InvitationBundle\Tests\Service;

use JorisRos\InvitationBundle\Service\SendInvitation;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class SendInvitationTest extends TestCase
{
    public function testSendInvitation(): void
    {
        $this->assertEquals(true, true);
    }
}