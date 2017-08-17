<?php

use yii\db\Migration;

class m170807_113405_regencies extends Migration
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

        $this->createTable('regencies', [
            'id' => $this->char(4)->notNull(),
            'province_id' => $this->char(2)->notNull(),
            'name' => $this->string(255)->notNull()
        ], $tableOptions);
        $this->addPrimaryKey('regencies_pk', 'regencies', 'id');
        $this->addForeignKey('regencies_province_id_foreign', 'regencies', 'province_id', 'provinces', 'id', 'CASCADE', 'CASCADE');
        $this->createIndex('regencies_province_id_index', 'regencies', 'province_id');
    }

    public function down()
    {
        $this->dropTable('regencies');
    }
}
