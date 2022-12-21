<?php

namespace BiffBangPow\SilverstripeBootstrap5Forms;

use SilverStripe\Core\Config\Configurable;

class Bootstrap5Forms
{
    use Configurable;

    /**
     * @config
     * @var string
     */
    private static $submit_button_class = 'btn btn-primary';

    /**
     * @config
     * @var string
     */
    private static $non_submit_button_class = 'btn btn-primary';


    /**
     * @config
     * @var boolean
     */
    private static $enable_floating_labels = false;
    
    /**
     * @config
     * @var string
     */
    private static $floating_labels_class = 'form-floating';

}
