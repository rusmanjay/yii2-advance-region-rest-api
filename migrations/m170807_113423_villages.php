<?php

use yii\db\Migration;

class m170807_113423_villages extends Migration
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

        $this->createTable('villages', [
            'id' => $this->char(10)->notNull(),
            'district_id' => $this->char(7)->notNull(),
            'name' => $this->string(255)->notNull()
        ], $tableOptions);
        $this->addPrimaryKey('villages_pk', 'villages', 'id');
        $this->addForeignKey('villages_district_id_foreign', 'villages', 'district_id', 'districts', 'id', 'CASCADE', 'CASCADE');
        $this->createIndex('villages_district_id_index', 'villages', 'district_id');
    }

    public function down()
    {
        $this->dropTable('villages');
    }
}
