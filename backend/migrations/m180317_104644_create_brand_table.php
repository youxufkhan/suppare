<?php

use yii\db\Migration;

/**
 * Handles the creation of table `brand`.
 */
class m180317_104644_create_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('brand', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('brand');
    }
}
