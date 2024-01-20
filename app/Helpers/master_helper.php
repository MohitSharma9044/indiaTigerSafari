<?php

use App\Models\Admin\Settings\General;

function getWebsiteLogo()
{
    $general = General::first();
    return $general->website_logo;
}

