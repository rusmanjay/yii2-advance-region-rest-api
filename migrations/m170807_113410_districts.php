<?php

use yii\db\Migration;

class m170807_113410_districts extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {

    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('districts', [
            'id' => $this->char(7)->notNull(),
            'regency_id' => $this->char(4)->notNull(),
            'name' => $this->string(255)->notNull()
        ], $tableOptions);
        $this->addPrimaryKey('districts_pk', 'districts', 'id');
        $this->addForeignKey('districts_regency_id_foreign', 'districts', 'regency_id', 'regencies', 'id', 'CASCADE', 'CASCADE');
        $this->createIndex('districts_id_index', 'districts', 'regency_id');
    }

    public function down()
    {
        $this->dropTable('districts');
    }
}
