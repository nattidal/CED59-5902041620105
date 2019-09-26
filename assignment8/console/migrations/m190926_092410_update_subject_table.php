<?php

use yii\db\Migration;

/**
 * Class m190926_092410_update_subject_table
 */
class m190926_092410_update_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('subject','create_at',$this->Integer());
        $this->dropColumn('subject','create_by',$this->Integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190926_092410_update_subject_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190926_092410_update_subject_table cannot be reverted.\n";

        return false;
    }
    */
}
