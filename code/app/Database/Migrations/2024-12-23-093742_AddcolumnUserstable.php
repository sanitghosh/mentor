<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddcolumnUserstable extends Migration
{
    public function up()
    {
        // Add a new column 'new_column' to the 'users' table
        $fields = [
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'default'    => '0',
                'null'       => true,
            ],
        ];

        // Use the 'forge' object from $this->db
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        // Rollback: remove the 'new_column' from the 'users' table
        $this->forge->dropColumn('users', 'role');
    }
}
