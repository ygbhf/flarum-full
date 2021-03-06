<?php
/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flarum\Core\Migration;

use Flarum\Database\AbstractMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuthTokensTable extends AbstractMigration
{
    public function up()
    {
        $this->schema->create('auth_tokens', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('payload', 150);
            $table->timestamp('created_at');
        });
    }

    public function down()
    {
        $this->schema->drop('auth_tokens');
    }
}
