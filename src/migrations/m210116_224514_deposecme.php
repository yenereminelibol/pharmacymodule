<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210116_224514_deposecme
 */
class m210116_224514_deposecme extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('deposecme',[
            'Deposecmeid' => Schema::TYPE_PK,
            'DepoAd' => 'VARCHAR(50) NOT NULL',
            'EczaneAd' => 'VARCHAR(50) NOT NULL',
        ]);

        $this->addForeignKey(
            'DepoAd_FK',
            'deposecme',
            'DepoAd',
            'depolar',
            'DepoAd'
        );

        $this->addForeignKey(
            'EczaneAd_FK',
            'deposecme',
            'EczaneAd',
            'eczaneler',
            'EczaneAd'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('deposecme');
        $this->dropForeignKey('DepoAd_FK');
        $this->dropForeignKey('EczaneAd_FK');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_224514_deposecme cannot be reverted.\n";

        return false;
    }
    */
}
