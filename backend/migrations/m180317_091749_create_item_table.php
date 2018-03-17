<?php

use yii\db\Migration;

/**
 * Handles the creation of table `item`.
 */
class m180317_091749_create_item_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('item', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'category_id' => $this->integer(),
        ]);
        $this->addForeignKey('fk_item_category', 'item', 'category_id', 'category', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('item');
    }
}
