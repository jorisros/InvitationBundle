<?php

namespace JorisRos\InvitationBundle;

use JorisRos\InvitationBundle\DependencyInjection\InvitationBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class InvitationBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            return new InvitationBundleExtension();
        }

        return $this->extension ?: null;
    }
}
