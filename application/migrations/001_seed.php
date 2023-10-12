<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_seed extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 6,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '256',
                        ),
                        'email' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '256',
                        ),
                        'address' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '1024',
                        ),
                        'dob' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                        ),
                        'image' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                        ),
                        'gender' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                         ),
                        'phone' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                        ),
                        'user_type' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '100',
                        ),
                        'password' => array(
                           'type' => 'VARCHAR',
                           'constraint' => '256',
                        ),


                        
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');
        }

        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}

?>