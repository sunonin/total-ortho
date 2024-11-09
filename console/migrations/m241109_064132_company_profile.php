<?php

use yii\db\Migration;

/**
 * Class m241109_064132_company_profile
 */
class m241109_064132_company_profile extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        if (!in_array('company_profile', Yii::$app->db->schema->getTableNames())) {
            $this->createTable('{{%company_profile}}', [
                'id' => $this->primaryKey(),
                'name' => $this->string(255)->notNull(),
                'description' => $this->string(255)->notNull(),
                'address' => $this->string(255)->null(),
                'telephone' => $this->string(20)->notNull(),
                'fax_no' => $this->string(20)->notNull(),
                'email' => $this->string(255)->notNull(),
                'tin' => $this->string(20)->notNull(),
                'signatory' => $this->string(255)->notNull(),
                'is_single' => $this->boolean()->notNull()->defaultValue(1),
            ], $tableOptions);

            $this->createIndex('unique_is_single', '{{%company_profile}}', 'is_single', true);
            
            $this->insert('{{%company_profile}}', [
                'name' => 'Total Ortho',
                'description' => 'Medical Supplies Solution, Inc.',
                'address' => '2/F Unit 7, Picture City Bldg., 88 Timog Ave., Brgy. Sacred Heart, Quezon City, Philippines',
                'telephone' => '414-0404',
                'fax_no' => '(063) 414-8568',
                'email' => 'totalorthosolution@yahoo.com',
                'tin' => '237-922-167-000',
                'signatory' => 'Juancho Monjardin',
                'is_single' => 1,
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241109_064132_company_profile cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241109_064132_company_profile cannot be reverted.\n";

        return false;
    }
    */
}
