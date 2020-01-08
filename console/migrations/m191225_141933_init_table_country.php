<?php

use yii\db\Migration;

/**
 * Class m191225_141933_init_table_country
 */
class m191225_141933_init_table_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('country', [
            'code'=>$this->string(2),
            'name'=>$this->string(52)->notNull(),
            'population'=>$this->integer(11)->notNull()->defaultValue(0),
            'PRIMARY KEY(code)',
        ]);

        $this->insert('country', ['code'=>'KZ', 'name'=>'Kazakhstan', 'population'=>180000000]);
        $this->insert('country', ['code'=>'RU', 'name'=>'Russia', 'population'=>1000000000]);
        $this->insert('country', ['code'=>'US', 'name'=>'United States', 'population'=>350000000]);
        $this->insert('country', ['code'=>'UZ', 'name'=>'Uzbekistan', 'population'=>250000000]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('country');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191225_141933_init_table_country cannot be reverted.\n";

        return false;
    }
    */
}
