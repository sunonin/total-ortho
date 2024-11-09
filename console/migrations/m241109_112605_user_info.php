<?php

use yii\db\Migration;

/**
 * Class m241109_112605_user_info
 */
class m241109_112605_user_info extends Migration
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

        if (!in_array('position', Yii::$app->db->schema->getTableNames())) {
           $this->createTable('{{%position}}', [
                'id' => $this->primaryKey(),
                'name' => $this->string(255)->notNull(),
            ], $tableOptions);
        }

        if (!in_array('marital_status', Yii::$app->db->schema->getTableNames())) {
           $this->createTable('{{%marital_status}}', [
                'id' => $this->primaryKey(),
                'name' => $this->string(255)->notNull(),
            ], $tableOptions);

           $this->batchInsert('{{%marital_status}}', ['id','name'], [
                [1, 'Single'],
                [2, 'Married'],
            ]);
        }

        if (!in_array('user_info', Yii::$app->db->schema->getTableNames())) {
            $this->createTable('{{%user_info}}', [
                'id' => $this->primaryKey(),
                'account_id' => $this->integer(10)->notNull(),
                'username' => $this->string(255)->notNull(),
                'fullname' => $this->string(255)->notNull(),
                'position_id' => $this->integer(10)->notNull(),
                'level' => $this->integer(10)->notNull(),
                'marital_status_id' => $this->integer(2)->notNull(),
                'religion' => $this->string(20)->notNull(),
                'address' => $this->string(255)->notNull(),
                'email' => $this->string(20)->notNull(),
                'contact_no' => $this->string(255)->notNull(),
                'status' => $this->boolean()->notNull()->defaultValue(0),
            ], $tableOptions);

            $this->addForeignKey(
                'fk_user_info_account_id',
                '{{%user_info}}',  
                'account_id',    
                '{{%user}}', 
                'id',            
                'CASCADE',       
                'CASCADE'        
            );

            $this->addForeignKey(
                'fk_user_info_position_id',
                '{{%user_info}}',  
                'position_id',    
                '{{%position}}', 
                'id',            
                'CASCADE',       
                'CASCADE'        
            );

            $this->addForeignKey(
                'fk_user_info_marital_status_id',
                '{{%user_info}}',  
                'marital_status_id',    
                '{{%marital_status}}', 
                'id',            
                'CASCADE',       
                'CASCADE'        
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m241109_112605_user_info cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m241109_112605_user_info cannot be reverted.\n";

        return false;
    }
    */
}
