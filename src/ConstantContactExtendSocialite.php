<?php
namespace SocialiteProviders\ConstantContact;

use SocialiteProviders\Manager\SocialiteWasCalled;

class ConstantContactExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('constantcontact', __NAMESPACE__.'\Provider');
    }
}
