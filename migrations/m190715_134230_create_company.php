<?php

use yii\db\Migration;

/**
 * Class m190715_134230_create_company
 */
class m190715_134230_create_company extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'inn' => $this->integer()->notNull()->unique(),
            'general_director' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190715_134230_create_company cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190715_134230_create_company cannot be reverted.\n";

        return false;
    }
    */
}
