<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210116_224224_eczaneler
 */
class m210116_224224_eczaneler extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('eczaneler',[
            'EczaneAd' => 'VARCHAR(100) NOT NULL',
            'EczaneSehir' => Schema::TYPE_STRING . ' NOT NULL',
            'EczaneCalisanSayisi' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addPrimaryKey('EczaneAd_PK','eczaneler','EczaneAd');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('eczaneler');
        $this->dropForeignKey('Eczane_PK');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_224224_eczaneler cannot be reverted.\n";

        return false;
    }
    */
}
