<?php

namespace BiffBangPow\SilverstripeBootstrap5Forms;

use SilverStripe\Core\Config\Configurable;

class Bootstrap5Forms
{
    use Configurable;

    /**
     * @var string
     */
    private static $submit_button_class = 'btn btn-primary';

    /**
     * @var string
     */
    private static $non_submit_button_class = 'btn btn-primary';
}
