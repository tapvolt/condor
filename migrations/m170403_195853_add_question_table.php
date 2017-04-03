<?php

use yii\db\Schema;
use yii\db\Migration;

class m170403_195853_add_question_table extends Migration
{
    public function up()
    {
        $this->createTable('question', [
            'id' => Schema::TYPE_PK,
            'variable' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT "0"',
            'text' => 'varchar(512) NOT NULL',
            'input' => Schema::TYPE_INTEGER . ' NOt NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
            'updated_at' => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('question');
    }

}
