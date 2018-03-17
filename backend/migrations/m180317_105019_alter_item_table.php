<?php

use yii\db\Migration;

/**
 * Class m180317_105019_alter_item_table
 */
class m180317_105019_alter_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('item', 'brand_id', $this->integer());
        $this->addForeignKey('fk_item_brand', 'item', 'brand_id', 'brand', 'id');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180317_105019_alter_item_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180317_105019_alter_item_table cannot be reverted.\n";

        return false;
    }
    */
}
