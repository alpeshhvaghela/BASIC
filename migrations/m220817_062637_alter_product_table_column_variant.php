<?php

use yii\db\Migration;

/**
 * Class m220817_062637_alter_product_table_column_variant
 */
class m220817_062637_alter_product_table_column_variant extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn("product", "color variant", "color_variant");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220817_062637_alter_product_table_column_variant cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220817_062637_alter_product_table_column_variant cannot be reverted.\n";

        return false;
    }
    */
}
