<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210116_224306_depolar
 */
class m210116_224306_depolar extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('depolar',[
            'DepoAd' => 'VARCHAR(50) NOT NULL',
            'DepoSehir' => Schema::TYPE_STRING . ' NOT NULL',
            'DepoIlacMiktar' => Schema::TYPE_INTEGER . ' NOT NULL',
            'DepoCalisanSayisi' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->addPrimaryKey('DepoAd_PK','depolar','DepoAd');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('depolar');
        $this->dropPrimaryKey('DepoAd_PK');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210116_224306_depolar cannot be reverted.\n";

        return false;
    }
    */
}
