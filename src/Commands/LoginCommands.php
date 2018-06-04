<?php
/**
 * Created by Diwanee.
 * Date: 6/4/18
 * Time: 10:47 AM
 *
 * Class for defining package commands
 */

namespace Diwanee\Login\Commands;

use Illuminate\Console\Command;

class LoginCommands extends Command {

    protected $signature = 'foo:method';

    protected $description = 'Command description';

    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        echo 'foo';
    }

}